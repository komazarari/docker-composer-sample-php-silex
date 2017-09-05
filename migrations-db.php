<?php

$master = $global['config']['mysql']['write'];

return [
    'driver'    => 'pdo_mysql',
    'host'      => $master['host'],
    'dbname'    => $master['dbname'],
    'user'      => $master['user'],
    'password'  => $master['password'],
    'charset'   => $master['charset'],
];