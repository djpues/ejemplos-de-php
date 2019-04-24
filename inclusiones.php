<html>
<head>
    <title>Inclusiones en PHP7</title>
</head>

<body>

<?php
// se incluye el contenido del fichero y se ejecuta
include "incluido.php";
echo $variable."\n"; //esto mostraria por la pantalla 10
$variable = 20;
// sólo se incluye y ejecuta una vez
include_once "incluido.php";
echo $variable."\n"; //esto volveria a mostrar por pantalla 10 y no 20 ya que se ha
//vuelto a ejecutar nuestro fichero1.php
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>