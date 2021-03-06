<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $commentForm app\models\Comment */

$this->title = $model->title;
?>
<div class="row news-view">

    <div class="col-xs-12">
        <?php if(\Yii::$app->user->can('adminNews')): ?>
            <div class="controls">
                <?= Html::a(Yii::t('news', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('news', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('news', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        <?php endif ?>
        <?= $this->render('_view', [
            'isFull' => true,
            'model' => $model,
            'commentForm' => $commentForm,
        ]) ?>
    </div>
</div>