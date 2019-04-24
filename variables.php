<html>
<head>
    <title>Variables en PHP7</title>
</head>

<body>

<?php
$a = 1; //El valor de $a es 1
$a = 2; //El valor de $a es 2
$a + 1; //En este caso si usásemos el método "echo" para escribir por pantalla, aparecería el valor 3, pero $a seguiría siendo 2
$b = $a + 1; //$b valdria $a + 1 en este caso 2 + 1, es decir $b es 3
$c = $b - $a; //$c valdría $b menos el valor de $a, en este caso 3 - 2, es decir $c es igual a 1

//tipado dinámico
$a = "";

?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>

