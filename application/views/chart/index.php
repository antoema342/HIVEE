<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pie Chart with Google Chart</title>
 <!--js google chart-->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
</head>
<body>
<script type="text/javascript">
       //load package
       google.load('visualization', '1', {packages: ['corechart']});
 </script>
<?php $result = $pie_data;
    //get number of rows returned
    $num_results = $result->num_rows();
    if( $num_results > 0){ ?>
        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    foreach ($result->result_array() as $row) {
                        extract($row);
                        echo "['{$nama}', {$rate}],";
                    } ?>
                ]);
                // Create and draw the visualization.
                new google.visualization.PieChart(document.getElementById('visualization')).
                draw(data, {title:"Data Penjualan Kendaraan Bermotor Tahun 2015"});
            }
 
            google.setOnLoadCallback(drawVisualization);
        </script>
    <?php
    }else{
        echo "Tidak ada data di database.";
    } ?>
    </script><br>
<div id="container">
    <h1>Statistik Penjualan Kendaraan di Indonesia</h1>
    <div id="visualization"></div>
</div>
</body>
</html>
