<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CrimeDetail */
// ['label' => 'Crime Details', 'url' => ['index']]
$this->title = 'Wildlife Crime Maps';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="crime-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
         <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="http://d3js.org/topojson.v1.min.js"></script>
  <!-- I recommend you host this file on your own, since this will change without warning -->
  <script src="http://datamaps.github.io/scripts/datamaps.world.min.js?v=1"></script>
   <!-- <script src="/konvergen/frontend/web/assets/datamaps.world.min.js")></script> -->
<!--      <script src="/konvergen/frontend/web/assets/datamaps.idn.min.js")></script> -->
<!--   <h2>Datamaps Playground</h2>
  <p><a href="http://datamaps.github.io/">DataMaps Project Homepage</a></p> -->
  <p id="demo"></p>
  <div id="container1" style="position: relative; width: 100%; max-height: 1150px;"></div>
 
     
     <script>
       //basic map config with custom fills, mercator projection
      var map = new Datamap({
        scope: 'world',
        element: document.getElementById('container1'),
        projection: 'mercator',
        height: 1000,
        fills: {
          defaultFill: '#ABDDA4',
          RUS: 'red'
        },
        
        data: {
          USA: {fillKey: 'lt50' },
          RUS: {fillKey: 'lt50' },
          CAN: {fillKey: 'lt50' },
          BRA: {fillKey: 'gt50' },
          ARG: {fillKey: 'gt50'},
          COL: {fillKey: 'gt50' },
          AUS: {fillKey: 'gt50' },
          ZAF: {fillKey: 'gt50' },
          MAD: {fillKey: 'gt50' }       
        }
      })    
      
       
      
       //bubbles, custom popup on hover template
     map.bubbles([
       // {name: 'Hot', latitude: 21.32, longitude: 5.32, radius: 10, fillKey: 'RUS'},
       // {name: 'Chilly', latitude: -25.32, longitude: 120.32, radius: 18, fillKey: 'RUS'},
       // {name: 'Hot again', latitude: 21.32, longitude: -84.32, radius: 8, fillKey: 'RUS'},
       {name: 'Jakarta', latitude: -6.21462, longitude: 106.84513, radius: 6, fillKey: 'RUS'},
       {name: "Sumatera", latitude: -2.553112, longitude: 101.103, radius:6, fillKey:"RUS"}

     ], {
       popupTemplate: function(geo, data) {
         return "<div class='hoverinfo'>It is " + data.name + "</div>";
       }
       // map.svg.selectAll('.bubbles').on("click", function(geo, data){
       //   document.getElementById("demo").innerHTML = data.name
       // })
     });

     map.svg.selectAll('.bubbles').on("click", function(geo, data){
        {
            // window.onload = function(){
            //  localStorage.setItem(data.name)
            // }
            // test = document.getElementById("bubble")
            // alert(test)
            // window.location.replace('http://localhost/konvergen/frontend/web/index.php?r=crime-detail%2Fview&location=jakarta')

            window.open( 
              'http://localhost/konvergen/frontend/web/index.php?r=crime-detail%2Fview&location=jakarta', "_blank"); 
        }
     });
     </script>
    </p>

</div>
