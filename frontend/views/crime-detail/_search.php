<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CrimeDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crime-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'crime_type') ?>

    <?= $form->field($model, 'species') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'location') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
