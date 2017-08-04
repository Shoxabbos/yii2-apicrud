<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel shoxabbos\apicrud\models\ApidocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apidocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apidoc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apidoc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'method',
                'filter' => \shoxabbos\apicrud\models\Apidoc::methods()
            ],
//            'model',
            'url:url',
            'desc:ntext',
            [
                'attribute' => 'request',
                'format' => 'html',
                'options' => [
                    'width' => '300'
                ],
                'value' => function ($model) {
                    return "<pre><code>{$model->request}</code></pre>";
                }
            ],
            [
                'attribute' => 'response',
                'format' => 'html',
                'value' => function ($model) {
                    return "<pre><code>{$model->response}</code></pre>";
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
