<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
// defined('YII_ENV') or define('YII_ENV', 'dev');
defined('YII_ENV') or define('YII_ENV', 'test');
require_once __DIR__ . implode(DIRECTORY_SEPARATOR, ['', '..', '..', '..', 'autoload.php']);
require_once __DIR__ . implode(DIRECTORY_SEPARATOR, ['', '..', '..', '..', 'yiisoft', 'yii2', 'Yii.php']);
Yii::setAlias('@tests', __DIR__);
Yii::setAlias('@data', __DIR__ . DIRECTORY_SEPARATOR . '_data');