<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CrimeDetail */

$this->title = 'Create Crime Detail';
$this->params['breadcrumbs'][] = ['label' => 'Crime Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crime-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
