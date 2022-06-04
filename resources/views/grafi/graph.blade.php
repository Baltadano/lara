<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://www.google.com/jsapi"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
   
<h2 class="text-center">Laravel 8 Generate PDF with Chart</h2>
   
<div id="chartDiv" class="pie-chart"></div>
   
<div class="text-center">
    <a href="{{ route('download') }}">Download PDF File</a>
    <h2 name='tutsmake'>tutsmake.com.com</h2>
</div>
<?php
use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Models\Casilla;
use App\Models\Eleccion;
use App\Models\Voto;
use App\Models\Votocandidato;

use Illuminate\Support\Facades\DB;

$hola = 'hey';


?>
 <div id="elemento"></div>
<script type="text/javascript">
    window.onload = function() {
        google.load("visualization", "1.1", {
            packages: ["corechart"],
            callback: 'drawChart'
        });
    };
   
    function drawChart() {
        var algo = "<?php echo $hola; ?>" 
        

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pizza');
        data.addColumn('number', 'Populartiy');
        data.addRows([
            ['Laravel', 33],
            ['Codeigniter', 26],
            ['Symfony', 22],
            ['CakePHP', 10],
            ['Slim', 9]
        ]);
   
        var options = {
            title: 'Popularity of Types of Framework',
            sliceVisibilityThreshold: .2
        };
   
        var chart = new google.visualization.PieChart(document.getElementById('chartDiv'));
        chart.draw(data, options);
       
       document.getElementById("elemento").innerHTML = algo;
    }
   
</script>
   
</body>
</html>