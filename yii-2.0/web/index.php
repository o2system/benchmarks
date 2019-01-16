<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

define( 'STARTUP_TIME', microtime( true ) );
define( 'STARTUP_MEMORY', memory_get_usage( true ) );

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();


// require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';