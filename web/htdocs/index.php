<?php
//ライブラリの読み込み
require '../vendor/autoload.php';
require '../config.php';

//ini_set('display_errors', '1');

//Slimの初期化
$app = new \Slim\Slim([
    'templates.path' => TEMPLATES_DIR_PATH,
    'view' => new \Slim\Views\Twig()
]);

//Slimにルートを登録
\Tinitter\Route::registration($app);
/*
$app->get('/', function(){
    echo "Hello, World!!!!";
});
*/
//実行
$app->run();
