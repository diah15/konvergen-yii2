<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CrimeDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crime-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'crime_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'species')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
