<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Arts','Percentage per Person'],
          ['Musique',1],
          ['Cinema',    3],
          ['Litterature',  8],
          ['Danse',      6],
        ]);

        var options = {
          title: 'Les Types Arts'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 900px;"></div>
  </body>
</html>