<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php

?>


<div id="container" style="width:100%; height:400px;"></div>
<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/highcharts.js"></script>
<script>
    $(function () {
        var myChart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Fruit Consumption'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
    });
</script>
</body>

</html>

