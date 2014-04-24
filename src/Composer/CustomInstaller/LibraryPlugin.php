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

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\CustomDirectoryInstaller\LibraryInstaller;

class LibraryPlugin implements PluginInterface
{

    /**
     * Activate the composer plugin.
     *
     * @param \Composer\Composer       $composer
     * @param \Composer\IO\IOInterface $io
     *
     * @return void
     * @access public
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new LibraryInstaller($io, $composer);

        $composer->getInstallationManager()->addInstaller($installer);
    }
}

/* <> */
