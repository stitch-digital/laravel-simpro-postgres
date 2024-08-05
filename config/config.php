<?php

return [
    'database' => [
        'driver' => 'pgsql',
        'host' => env('SIMPRO_DB_HOST'),
        'port' => env('SIMPRO_DB_PORT', '5432'),
        'database' => null, // The database connection is set dynamically in the DatabaseService
        'username' => env('SIMPRO_DB_USERNAME', 'client_readonly'),
        'password' => env('SIMPRO_DB_PASSWORD'),
        'charset' => env('SIMPRO_DB_CHARSET', 'utf8'),
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
    ],
];