<?php
// comment out the following line to disable debug mode
defined('YII_DEBUG') or define('YII_DEBUG', true);

$frameworkPath = __DIR__ . '/../../yii';

require($frameworkPath . '/Yii.php');
// Register Composer autoloader
@include($frameworkPath . '/vendor/autoload.php');

$config = require(__DIR__ . '/protected/config/main.php');
$application = new yii\web\Application($config);
/**
 * @var yii\base\Application $yiiApp;
 */
$yiiApp = Yii::$app;
$yiiApp->on("beforeRequest",function($event) {
    return ob_start('ob_gzhandler');
});
$yiiApp->on("afterRequest",function($event) {
    return ob_end_flush();
});
$application->run();
