<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model shoxabbos\apicrud\models\Apidoc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apidocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apidoc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create new', ['create'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'method',
            'model',
            'url:url',
            'title',
            'desc:ntext',
            'request:ntext',
            'response:ntext',
        ],
    ]) ?>

</div>
