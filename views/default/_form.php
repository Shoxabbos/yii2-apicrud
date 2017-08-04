<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model shoxabbos\apicrud\models\Apidoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apidoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'method')->dropDownList(\shoxabbos\apicrud\models\Apidoc::methods()) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-12">
            <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'request')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'response')->textarea(['rows' => 6]) ?>

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
