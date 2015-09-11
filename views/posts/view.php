<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'short:ntext',
            'text:ntext',
            [
                'attribute' => 'date',
                'format' => ['date', 'php:d-m-yy']
            ],
            'published:boolean',
            'createdBy.username',
            'updatedBy.username',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d-m-yy']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d-m-yy']
            ],
        ],
    ]) ?>

</div>
