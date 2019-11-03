<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MasterBeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Beritas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-berita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'link_berita',
            'berita_html:ntext',
            'flag_extract',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
