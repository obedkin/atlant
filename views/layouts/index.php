<?php

/* @var $this \yii\web\View */

/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="page-container">
        <?= $this->render('blocks/sidebar'); ?>
        <div class="page-content">
            <?= $this->render('blocks/navigation'); ?>
            <?= $this->render('blocks/breadcrumb'); ?>
            <?= $this->render('blocks/alert'); ?>
            <?= $this->render('blocks/title'); ?>

            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?= $content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render('blocks/message'); ?>
    <?= $this->render('blocks/audio'); ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>