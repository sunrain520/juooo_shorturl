<?php

return [
    'debug'    => true,
    'base_url' => 'http://www.ourls.com/',
    'hash'     => [
        'salt'     => '132132131231',
        'length'   => 5,
        'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
    ],
    'db' => [
        'database_type' => 'mysql',
        'database_name' => 'test2',
        'server'        => 'localhost',
        'username'      => 'root',
        'password'      => '123456',
        'charset'       => 'utf8',
        'port'          => 3306,
        'option'        => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
        ],
    ],
    'db_read' => [
        'database_type' => 'mysql',
        'database_name' => 'test2',
        'server'        => 'localhost',
        'username'      => 'root',
        'password'      => '123456',
        'charset'       => 'utf8',
        'port'          => 3306,
        'option'        => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
        ],
    ],
    'settings' => [
        'external_js' => null,
    ],
    'proxies' => [
        '127.0.0.0/8',
        '10.0.0.0/8',
        '172.16.0.0/12',
        '192.168.0.0/16',
        'fd00::/8',
    ],
];
