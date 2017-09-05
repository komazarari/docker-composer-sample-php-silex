<?php

return $global['config']['redis'] = [
    'primary' => [
        'host' => 'redis',
        'port' => 6379,
    ],
    'replica' => [
        'host' => 'redis',
        'port' => 6379,
    ],
];