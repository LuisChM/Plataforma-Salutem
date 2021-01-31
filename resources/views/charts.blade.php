@extends('layouts.dashboard')
@section('seccion')
    Reportes
@endsection

@section('contenido')
   
    <div class="container-fluid p-5">
    <div id="barchart_material" style="width: 100%; height: 500px;"></div><br>
    <div id="barchart_material2" style="width: 100%; height: 500px;"></div><br>
    <div id="barchart_material3" style="width: 100%; height: 500px;"></div>
    </div>

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

@endsection




