<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model shoxabbos\apicrud\models\Apidoc */

$this->title = 'Create Apidoc';
$this->params['breadcrumbs'][] = ['label' => 'Apidocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apidoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
