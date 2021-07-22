<?php
/* @var $this \yii\web\View */
/* @var $content string */
$this->beginContent('@frontend/views/layouts/main.php');
use yii\bootstrap4\Nav;
use frontend\models\Category;
use yii\helpers\Html;
?>
<div class="col-3">
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <h1>Категории</h1>
    <ul class="nav flex-column">
        <?php
        $model = Category::find()
            ->all();

                foreach ($model as $val) {
                    echo Html::tag('li', Html::a($val->title, [
                            '/category/view', 'id' => $val['id']
                    ]));
                }
                ?>
            </ul>
</div>
</div>
<div class="col-9">
    <?=$content?>
</div>
<?php $this->endContent(); ?>b