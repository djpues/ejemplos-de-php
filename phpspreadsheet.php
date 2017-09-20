<html>
<head>
    <title>Ejemplo de PHPSpreadSheet en PHP7</title>
</head>

<body>

<p>Instalación:
    ./composer.phar require phpoffice/phpspreadsheet:dev-develop</p><a href="https://phpspreadsheet.readthedocs.io/en/develop/">Documentación</a>

<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>