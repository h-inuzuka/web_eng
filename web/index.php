<?php
//ライブラリの読み込み
require '../vendor/autoload.php';

//Slimの初期化
$app = new \Slim\Slim([]);

//Slimにルートを灯籠
$app->get('/', function(){
    echo "Hello, World!";
});

//実行
$app->run();
