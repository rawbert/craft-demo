<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

'*' => array(
        'tablePrefix'   => 'craft',
    ),
	/* Change to .env stuff for this */
    'craft-demo.local' => array(
        'server'        => 'localhost',
        'user'          => 'root',
        'password'      => 'root',
        'database'      => 'craft_demo',
    ),

    'staging.example.com' => array(
        'server'        => 'localhost',
        'user'          => 'example_staging',
        'password'      => '********************',
        'database'      => 'example_staging',
    ),

);
