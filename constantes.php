<html>
<head>
    <title>Constantes en PHP7</title>
</head>

<body>

<?php
define("NOMBREVARIABLE", "valor");
define("NOMBREVARIABLE2", 27);
echo NOMBREVARIABLE;
echo "<br />";
echo NOMBREVARIABLE2;

// Funciona a partir de PHP 7
define('ANIMALES', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES[1]; // muestra "gato"
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>