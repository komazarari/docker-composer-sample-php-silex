<?php

return $global['config']['redis'] = [
    'primary' => [
        'host' => getenv('REDIS_PRIMARY_HOST'),
        'port' => 6379,
    ],
    'replica' => [
        'host' => getenv('REDIS_REPLICA_HOST'),
        'port' => 6379,
    ],
];