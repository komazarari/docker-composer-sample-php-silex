<?php

// $hoge = require __DIR__.'/../etc/mysql.php';
require __DIR__.'/../etc/mysql.php';
// var_dump($hoge);
$master = $global['config']['mysql']['write'];

return [
    'driver'    => 'pdo_mysql',
    'host'      => $master['host'],
    'dbname'    => $master['dbname'],
    'user'      => $master['user'],
    'password'  => $master['password'],
    'charset'   => $master['charset'],
];