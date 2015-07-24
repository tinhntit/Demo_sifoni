<?php

return array(
    'parameters' => array(
        // Connections
        'capsule.connections' => array(
            'default' => array(
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'mydb',
                'username'  => 'root',
                'password'  => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
                'logging'   => false,
            )
        ),

        // Cache
        /*
        'capsule.cache' => array(
            'driver' => 'apc',
            'prefix' => 'sifoni',
        ),
        */
    )
);
