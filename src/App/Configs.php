<?php

$container->set('settings',function(){
    return (object)[
        'db' => [
            "DB_HOST" => '192.168.64.3',
            "DB_NAME" => 'test',
            "DB_USER" => 'cesar',
            "DB_PASS" => '2021',
            "DB_CHAR" => 'utf8'
        ]
    ];
});