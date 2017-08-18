<?php
use yii\bootstrap\Nav;
use yii\helpers\Html;

echo Nav::widget([
    'options' => ['class' => 'x-navigation x-navigation-horizontal x-navigation-panel'],
    'items' => [
        $this->render('//layouts/navigation/toggle'),
        $this->render('//layouts/navigation/search'),
        $this->render('//layouts/navigation/power_off'),
        $this->render('//layouts/navigation/messages'),
        $this->render('//layouts/navigation/tasks'),
        $this->render('//layouts/navigation/lang_bar'),
    ],
]);