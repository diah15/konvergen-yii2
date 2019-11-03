<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CrimeDetail */

$this->title = 'Update Crime Detail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Crime Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="crime-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
