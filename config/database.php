<?php

return [


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

    'default' =>  'new',

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
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'new' => [


          'driver' => 'mysql',
           'host' => env('DB_HOST', '185.176.43.49'),
           'port' => env('DB_PORT', '3306'),
           'database' => env('DB_DATABASE', '2445951_app'),
           'username' => env('DB_USERNAME', '2445951_app'),
           'password' => env('DB_PASSWORD', 'znay1094'),
           'unix_socket' => env('DB_SOCKET', ''),
           'charset' => 'utf8mb4',
           'collation' => 'latin1_swedish_ci',
           'prefix' => '',
           'strict' => true,
           'engine' => MyISAM,
        ],



        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'ec2-54-221-221-153.compute-1.amazonaws.com'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'd9krd47cs0j4i8'),
            'username' => env('DB_USERNAME', 'zdluwmngfedkfc'),
            'password' => env('DB_PASSWORD', 'df6a79df2b02886f8722ebd57aa5a45e7918b31bec2a792db21c1d606f02098c'),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'fdb15.awardspace.net'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', '2445951_app'),
            'username' => env('DB_USERNAME', '2445951_app'),
            'password' => env('DB_PASSWORD', 'znay1094'),
            'charset' => 'utf8',
            'prefix' => '',
              'collation' => 'latin1_swedish_ci',
              'strict' => true,
              'engine' => MyISAM,
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

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', 'fdb15.awardspace.net'),
            'password' => env('REDIS_PASSWORD', 'znay1094'),
            'port' => env('REDIS_PORT', 3306),
            'database' => env('DB_DATABASE', '2445951_app'),
        ],

    ],

  ];
