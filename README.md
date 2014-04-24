composer-installer
==================

A composer plugin, to install composer packages in custom directories outside of the default composer installation path [vendor].

Usage
=====

First, you need to add it to your repositories section:

_json_

{
    ...

    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:jasondmoss/composer-installer.git"
        },
        {
            ...
        }
    ]

    ...
}


Second, add it to your require section, here I'm taking the famous `monolog` composer pacakge to install:

_json_

{
    ...

    "require":{
        "php": ">=5.3",

        "jasondmoss/composer-installer": "*",
        "monolog/monolog": "*"
        ...
    }

    ...
}


Third, to instruct the plugin to install the 'monolog' package in a custom directory, use the 'extra' parameter:

_json_

{
    ...

    "extra":{
        "installer-paths":{
            "./monolog/": ["monolog/monolog"]
        },
        {
            ...
        }
    }

    ...
}

When stated as above, it will instruct composer to install 'monolog' in the folder, monolog, inside the directory 'composer install' was called from.
