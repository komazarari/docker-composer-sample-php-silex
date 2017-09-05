<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$mysql_config = require __DIR__.'/../etc/mysql.php';
$redis_config = require __DIR__.'/../etc/redis.php';

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array (
        'mysql_read' => array(
            'driver'    => 'pdo_mysql',
            'host'      => $mysql_config['read']['host'],
            'dbname'    => $mysql_config['read']['dbname'],
            'user'      => $mysql_config['read']['user'],
            'password'  => $mysql_config['read']['password'],
            'charset'   => 'utf8mb4',
        ),
        'mysql_write' => array(
            'driver'    => 'pdo_mysql',
            'host'      => $mysql_config['write']['host'],
            'dbname'    => $mysql_config['write']['dbname'],
            'user'      => $mysql_config['write']['user'],
            'password'  => $mysql_config['write']['password'],
            'charset'   => 'utf8mb4',
        ),
    ),
));

$app['redis'] = new Redis();
$app['redis']->connect($redis_config['primary']['host'], $redis_config['primary']['port']);
