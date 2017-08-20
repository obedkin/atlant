<div class="page-title">
    <?php if (Yii::$app->request->url != Yii::$app->homeUrl): ?>
        <h2><?= (isset($this->params['title_icon'])) ? $this->params['title_icon'] : ''; ?> <?= $this->title; ?></h2>
    <?php endif; ?>
</div>