<?php

/**
 * Composer Custom Installer
 *
 * @category  Composer|Installer
 * @package   Composer Custom Installer
 *
 * @author    Mina Nabil Sami <mina.nsami@gmail.com>
 * @copyright 2014 Mina Nabil Sami.
 * @license   https://raw.githubusercontent.com/mnsami/composer-installer-plugin/master/LICENSE [MIT License]
 * @link      http://www.leaseweblabs.com
 *
 * @author    Jason D. Moss <jason@jdmlabs.com>
 * @link      https://github.com/jasondmoss/composer-custom-installer
 */

namespace Composer\CustomInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\PearInstaller as BasePearInstaller;

class PearInstaller extends BasePearInstaller
{

    /**
     * Implement the new path, if provided.
     *
     * @param \Composer\Package\PackageInterface $package
     *
     * @return \Composer\CustomInstaller\PearInstaller
     * @access public
     */
    public function getInstallPath(PackageInterface $package)
    {
        $names = $package->getNames();

        if ($this->composer->getPackage()) {
            $extra = $this->composer->getPackage()->getExtra();
            if (! empty($extra['installer-paths'])) {
                foreach ($extra['installer-paths'] as $path => $packageNames) {
                    foreach ($packageNames as $packageName) {
                        if (in_array($packageName, $names)) {
                            return $path;
                        }
                    }
                }
            }
        }

        /**
         * If a custom path was not provided, use the default one, by calling the parent::getInstallPath function.
         */
        return parent::getInstallPath($package);
    }
}

/* <> */
