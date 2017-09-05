<?php

return $global['config']['mysql'] = [
    'read' => [
        'host'      => getenv('DB_REPLICA_HOST'),
        'dbname'    => 'myapp_' . getenv('SYMFONY_ENV'),
        'user'      => getenv('DB_REPLICA_USER'),
        'password'  => getenv('DB_REPLICA_PASSWORD'),
        'charset'   => 'utf8mb4',
    ],
    'write' => [
        'host'      => getenv('DB_MASTER_HOST'),
        'dbname'    => 'myapp_' . getenv('SYMFONY_ENV'),
        'user'      => getenv('DB_MASTER_USER'),
        'password'  => getenv('DB_MASTER_PASSWORD'),
        'charset'   => 'utf8mb4',
    ],
];
