<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CrimeDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wildlife Crime Detail';
$this->params['breadcrumbs'][] = ['label' => 'Wildlife Crime Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crime-detail-index">

    <h1><?= Html::encode($this->title) ;
    ?></h1>

</div>


<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Wildlife Crime Type Chart"
    },
    // subtitles: [{
    //     text: "Oktober 2019"
    // }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($crimeData, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>     


<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    #'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'tanggal',
        'crime_type',
        'species',
        'link',

       # ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>                