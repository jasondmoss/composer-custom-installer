composer-installer
==================

A composer plugin to install composer packages to custom directories outside of the default composer installation path [vendor].

Usage
=====

First, you need to add it to your repositories section:

```
{
    ...
    
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:jasondmoss/composer-custom-installer.git"
        }
    ]
    
    ...
}
```

Second, add it to your require section, here I'm taking the famous `monolog` composer pacakge to install:

```
{
    ...
    
    "require":{
        "php": ">=5.3",

        "jasondmoss/composer-custom-installer": "*",
        "monolog/monolog": "*",
        ...
    }
    
    ...
}
```


Third, to instruct the plugin to install the 'monolog' package in a custom directory, use the 'extra' parameter:

```
{
    ...
    
    "extra":{
        "installer-paths":{
            "./monolog/": ["monolog/monolog"],
            ...
        }
    }
    
    ...
}
```

When defined as above, composer will be instructed to install 'monolog' in the folder, monolog, within the root of the directory 'composer install' was called from.
