<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>
<h3>./composer.phar require picqer/php-barcode-generator</h3>
<a href="https://github.com/picqer/php-barcode-generator">Página proyecto</a>

<?php
require "vendor/autoload.php";

use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;

$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);

echo "<br/>";
echo "<br/>";
echo "<br/>";

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>