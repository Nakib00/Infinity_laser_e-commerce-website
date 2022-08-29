<?php
include('C:\xampp\htdocs\Infinity_laser\php\conn.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geaph Damo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
        <!-- include navnar -->
        <?php include('navbar.php'); ?>
    <h1 class="text-center">Testing Graph</h1>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

<script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Students', 'Contribution'],
                <?php
                $sql="SELECT * FROM `contribution`";
                $query=mysqli_query($conn, $sql);
                while($result = mysqli_fetch_assoc($query)){
                    echo"['".$result['student']."',".$result['contribution']."],";
                }
                ?>
            ]);

            var options = {
                title: 'Student Conrtibution'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

</html>