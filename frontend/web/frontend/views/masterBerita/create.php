<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBerita */

$this->title = 'Create Master Berita';
$this->params['breadcrumbs'][] = ['label' => 'Master Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-berita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
