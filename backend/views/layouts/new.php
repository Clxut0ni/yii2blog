<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<?php $this->beginContent('yii2\backend\views\layouts\main.php'); ?>
<?php $this->title = 'Test'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <header>Моя компания</header>
    <?= $content ?>
    <footer>Моя компания &copy; 2014</footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endContent(); ?>
<?php $this->endPage() ?>