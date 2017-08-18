<!-- POWER OFF -->
<li class="xn-icon-button pull-right last">


    <?php

    use yii\bootstrap\Nav;
    use yii\helpers\Html;


    echo Html::a(Yii::$app->params['general']['power_icon'], ['#']);


    echo Nav::widget([
        'options' => ['class' => 'xn-drop-left animated zoomIn'],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => Yii::$app->params['general']['login_icon'] . ' '
                    . Yii::t('app', 'Login'),
                'url' => ['/login'],
                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::$app->params['general']['logout_icon'] . ' '
                    . Yii::t('app', 'Logout'),
                'url' => ['/logout'],
                'linkOptions' => ['data-method' => 'post'],
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::$app->params['general']['signup_icon'] . ' '
                    . Yii::t('app', 'Sign up'),
                'url' => ['/signup'],

                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => Yii::$app->params['general']['block_icon'] . ' '
                    . Yii::t('app', 'Block'),
                'url' => ['/user/default/block'],

                'visible' => !Yii::$app->user->isGuest,
            ],

        ],
    ]);
    ?>

</li>
<!-- END POWER OFF -->

<?= Html::a("Выход", 'site/logout', [
        'data' => [
            'method' => 'post'
        ],
        ['class' => 'white text-center']
    ]
);?>

<?= Html::a("Выход", ['/site/logout'], [
    'data' => ['method' => 'post'],
    'class' => 'white text-center',
]);?>
