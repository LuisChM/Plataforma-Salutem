@extends('layouts.dashboard')
@section('seccion')
    Reportes
@endsection


@section('contenido')
<!doctype html>
<html lang="en">
  <head>
    <title>Google Bar Chart | LaravelCode</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
  <body>


    
    <div class="container-fluid p-5">
    <div id="barchart_material" style="width: 100%; height: 500px;"></div>
    <div id="barchart_material2" style="width: 100%; height: 500px;"></div>
    <div id="barchart_material3" style="width: 100%; height: 500px;"></div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      
      function drawChart() {
          var data = google.visualization.arrayToDataTable([
              ['Dias', 'Ingresos'],
              @php
              foreach($ingresos as $ingreso) {
                  echo "['".$ingreso->fecha."', ".$ingreso->ingresos."],";
                }
                @endphp
            ]);
            
            var options = {
                chart: {
                    title: 'Ingresos'                
                },
                bars: 'vertical'
            };
            var chart = new google.charts.Bar(document.getElementById('barchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
            ['Dias', 'gastos'],

            @php
              foreach($ingresos as $ingreso) {
                  echo "['".$ingreso->fecha."', ".$ingreso->gastos."],";
              }
            @endphp
        ]);

        var options = {
          chart: {
            title: 'Gastos',
            
          },
          bars: 'vertical'
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material2'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Dias', 'Saldos'],

            @php
              foreach($ingresos as $ingreso) {
                  echo "['".$ingreso->fecha."', ".$ingreso->total."],";
              }
            @endphp
        ]);

        var options = {
          chart: {
            title: 'Saldos',
            
          },
          bars: 'vertical'
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material3'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    

</body>
</html> 
@endsection




