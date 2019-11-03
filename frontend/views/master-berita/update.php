<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBerita */

$this->title = 'Update Master Berita: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Master Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-berita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
