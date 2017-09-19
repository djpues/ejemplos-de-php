<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php
$fila = 1;
if (($gestor = fopen("test.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $numero = count($datos);
        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
        $fila++;
        for ($c=0; $c < $numero; $c++) {
            echo $datos[$c] . "<br />\n";
        }
    }
    fclose($gestor);
}
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>