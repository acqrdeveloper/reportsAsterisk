<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => storage_path('database.sqlite'),
            'prefix'   => '',
        ],
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('LARAVEL_HOST', 'localhost'),
            'database'  => env('LARAVEL_DATABASE', 'forge'),
            'username'  => env('LARAVEL_USERNAME', 'forge'),
            'password'  => env('LARAVEL_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'laravel' => [
            'driver'    => 'mysql',
            'host'      => env('LARAVEL_HOST', 'localhost'),
            'database'  => env('LARAVEL_DATABASE', 'forge'),
            'username'  => env('LARAVEL_USERNAME', 'forge'),
            'password'  => env('LARAVEL_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'queuelog' => [
            'driver'    => 'mysql',
            'host'      => env('QUEUELOG_HOST', 'localhost'),
            'database'  => env('QUEUELOG_DATABASE', 'forge'),
            'username'  => env('QUEUELOG_USERNAME', 'forge'),
            'password'  => env('QUEUELOG_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'cdr_asterisk' => [
            'driver'    => 'mysql',
            'host'      => env('CDR_ASTERISK_HOST', 'localhost'),
            'database'  => env('CDR_ASTERISK_DATABASE', 'forge'),
            'username'  => env('CDR_ASTERISK_USERNAME', 'forge'),
            'password'  => env('CDR_ASTERISK_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 0,
        ],

    ],

];