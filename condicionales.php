
<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php
$a =2;
$b= 7;
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}

$i=1;
switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}


$beer='carlsberg';
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Buena elección';
        break;
    default;
        echo 'Por favor haga una nueva selección...';
        break;
}



?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>
