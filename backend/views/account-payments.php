<?php


use yii\helpers\Html;
use yii\helpers\Url;

$module = Yii::$app->getModule('account');

$this->beginContent('@wartron/yii2account/views/admin/update.php', [
    'title'     =>  'Payments',
    'account'   =>  $account,
]);

echo "<h4>Backend Payments</h4>";


$this->endContent();