<?php
use yii\widgets\Breadcrumbs;

echo Breadcrumbs::widget([
    'homeLink' => ['label' => Yii::t('app','Atlant'), 'url' => '/'],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);