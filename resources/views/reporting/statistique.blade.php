@extends('layouts.app')

@section('content')
    <div class="row">
       
       <?php
$con = mysqli_connect("localhost","root","","memoireappli");
if($con)
{
  echo "statistique";
}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['nom', 'nbre'],

         <?php

         
          $sql = "SELECT u.name nom, count(c.users_id)  nbre FROM users u,constats c where u.id=c.users_id group by users_id order By  count(users_id) DESC LIMIT 0, 5";
          $fire = mysqli_query($con,$sql);
           while ($result = mysqli_fetch_assoc($fire))
           {
            echo "['".$result['nom']."',".$result['nbre']."],";
           }


          ?>


        ]);

        var options = {
       
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
    </div>
@endsection
