<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require './../../../../php_source/yii-basic-app-2.0.17/vendor/autoload.php';
require './../../../../php_source/yii-basic-app-2.0.17/vendor/yiisoft/yii2/Yii.php';
$config = require './../config/web.php';

(new yii\web\Application($config))->run();
