<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
        'usePathInfo'=> true,
        'allowAutoUpdates' => false,
    ),

    'craft-demo.local' => array(
        'devMode' => true,
        'useCompressedJs' => false,
        'allowAutoUpdates' => true,
        'environmentVariables' => array(
            'siteUrl' => 'http://craft-demo.local/',
            'sitePath' => '/Users/robert/webserver/craft-demo/public/',
        ),
    ),

    'staging.example.com' => array(
        'environmentVariables' => array(
            'siteUrl' => 'http://tbd.example.com/',
            'sitePath' => '/var/www/vhosts/staging.example.com/html/',
        ),
    )
);
