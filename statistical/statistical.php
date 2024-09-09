<?php
    include "../connect.php";
    if(isset($_GET['type'])){
        $loai = $_GET['type'];
    }
    else{
        $loai = "";
    }
    //-----------------------------------------------------------dem meo muop--------------------------------------------------------------
    $count_muop = 0;
    $sql_muop = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat, 2) AS UNSIGNED) % 10 = 0 AND trang_thai = '0' and chung_loai = 'muop'";
    $result_muop = $conn->query($sql_muop);
    $rows_muop = array();
    if($result_muop && $result_muop->num_rows > 0){
        while($row_muop = $result_muop->fetch_assoc()){
            $count_muop ++;
            $rows_muop[] = $row_muop;
        }
    }





    echo "muoppp: ";
    echo $count_muop;
    echo "<pre>";
    var_dump($rows_muop);
    echo "</pre>";
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
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