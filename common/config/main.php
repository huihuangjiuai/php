<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//    	'db' => [
//    		'class' => 'yii\db\Connection',
//    		'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
//    		'username' => 'root',
//    		'password' => 'root',
//    		'charset' => 'utf8',
//     		'tablePrefix' => 'hyw_',
//    	],
    ],
];
