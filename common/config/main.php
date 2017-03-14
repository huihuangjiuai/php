<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'db' => [
    		'class' => 'yii\db\Connection',
    		'dsn' => 'mysql:host=127.0.0.1;dbname=yii2advanced',
    		'username' => 'root',
    		'password' => '111111',
    		'charset' => 'utf8',
//     		'tablePrefix' => 'hyw_',
    	],
    ],
];
