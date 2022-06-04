@extends('plantilla')
@section('content')

<div>

<div>
<h3>Seccion de la grafica 1</h3>
<div id="chartDiv" class="pie-chart"></div>
</div>
    
    <h3>Final Seccion 1</h3>



<div class="text-center">
    <a href="{{ route('download') }}">Download PDF File</a>
    <h2 name='tutsmake'>tutsmake.com.com</h2>
</div>

<?php

$vot = '38';
$votoid = 'holas';
$vs = '';
//$arrays = array();

$arreglovotos = ['luis',11,'balta',12,'Mariano',13];
$arre = [];
$i = -1;
$val = 0;
    //foreach($votos as  $voto){
        foreach($votocandidatos as $candidato){ //Primero es la lista el segundo el valor
            $i = $i+1;
          $vs = $candidato->votos;
          array_push($arre,$vs);
          echo $vs;
        }
       // print_r($arre);
        echo ' ----';
        //print_r($arre);

        $voto01 = $arre [0];
        $voto02 = $arre [1];
        $voto03 = $arre [2];
        $voto04 = $arre [3];
        //echo $voto04;


    //}
//echo $votoid;
//echo $vs;
//echo var_dump($arre);

?>




<script type="text/javascript">
    window.onload = function() {
        google.load("visualization", "1.1", {
            packages: ["corechart"],
            callback: 'drawChart'
        });
    };
   
    function drawChart() {
        var algo = "<?php echo $vot; ?>";
        var val01  = "<?php echo $voto01 ?>";
        var val02  = "<?php echo $voto02 ?>";
        var val03  = "<?php echo $voto03 ?>";
        var val04  = "<?php echo $voto04 ?>";
        
       let v =  Number(algo);
       let v1 = Number(val01);
       let v2 = Number(val01);
       let v3 = Number(val01);
       let v4 = Number(val01);

        console.log(v1);
        
        

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pizza');
        data.addColumn('number', 'Populartiy');
        data.addRows([
            ['Candidato1', v1],
            ['Candidato2', v2],
            //['Symfony', 22],
            ['CakePHP', 10],
            ['Slim', 9]
        ]);


        var options = {
            title: 'Eleccion: Facultad de Derecho',
            sliceVisibilityThreshold: .2
        };

        
   
        var chart = new google.visualization.PieChart(document.getElementById('chartDiv'));
        chart.draw(data, options);

       
      // document.getElementById("elemento").innerHTML = algo;



       //document.getElementById("elemento").innerHTML = algo;
    }
   
</script>


</div>


@endsection


@section('content2')
<div>


<h3>Seccion de la grafica 2</h3>
         <div id="chart_divs" class="pie-chart"></div>
        <h3>Final Seccion</h3>


        <?php

$vot = '38';
$votoid = 'holas';
$vs = '';

//$arrays = array();

$arreglovotos = ['luis',11,'balta',12,'Mariano',13];
$arre = [];
$i = -1;
$val = 0;
$validacio = 0;
    //foreach($votos as  $voto){
        foreach($votocandidatos as $votocandidato){
            $i = $i+1;
          $vs = $votocandidato->votos; //quite s
          array_push($arre,$vs);
          //echo $i;
        }
      //}
        //print_r($arreglovotos);
        //echo ' ----';
        //print_r($arre);

        $voto01 = $arre [0];
        $voto02 = $arre [1];
        $voto03 = $arre [2];
        $voto04 = $arre [3];
        echo $voto04."ALfoo";



    //}
//echo $votoid;
//echo $vs;
//echo var_dump($arrays);

?>
<script type="text/javascript">
    


google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
    var val01  = "<?php echo $voto03 ?>";
        var val02  = "<?php echo $voto04 ?>";
    
        let v3 = Number(val01);
       let v4 = Number(val01);

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Votos');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, v3],
        [{v: [9, 0, 0], f: '9 am'}, v4],
        
      ]);

      var options = {
        title: 'Elecion de la facultad de Medicina',
        hAxis: {
          title: 'Hora del dia',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Escala (scale of 1-100)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_divs'));

      chart.draw(data, options);
    }



    
   
</script>


</div>
@endsection