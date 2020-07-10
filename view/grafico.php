
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

          var data = google.visualization.arrayToDataTable([
                  ['Usuario', 'Compras'],
              <?php
              foreach ($data as $dato){
                  echo "['". $dato['nombre'] . "',".$dato['count(co.id_usuario)']."],";
              }
              ?>
              ]);

          var options = {
              title: 'Cantidad de compras por usuario'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div style="display: flex; justify-content: center">
      <div id="piechart" style="width: 900px; height: 500px;"></div>
  </div>

  </body>
</html>
