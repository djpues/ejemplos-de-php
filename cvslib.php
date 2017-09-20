<html>
<head>
    <title>Biblioteca de CSV en PHP7</title>
</head>

<body>

<?php
use League\Csv\Reader;
require 'vendor/league/csv/autoload.php';

$csv = Reader::createFromPath('./test.csv');

//get the first row, usually the CSV header
$headers = $csv->fetchOne();

//get 25 rows starting from the 11th row
$res = $csv->setOffset(10)->setLimit(25)->fetchAll();
var_dump($res);
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>

