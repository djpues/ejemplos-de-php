<html>
<head>
    <title>Inclusiones en PHP7</title>
</head>

<body>

<?php
include "incluido.php";
echo $variable; //esto mostraria por la pantalla 10
$variable = 20;
include "incluido.php";
echo $variable; //esto volveria a mostrar por pantalla 10 y no 20 ya que se ha
//vuelto a ejecutar nuestro fichero1.php
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>