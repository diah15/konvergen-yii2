<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBerita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'link_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berita_html')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'flag_extract')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
