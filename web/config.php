<?php
define('TEMPLATES_DIR_PATH', __DIR__.'/templates');
define('DEBUG', true);
//define('LOG_LEVEL', \Slim\Log::FATAL);

$db_settings = [
    'driver' => 'sqlite',
    'database' => __DIR__."/sqlite.db"
];
