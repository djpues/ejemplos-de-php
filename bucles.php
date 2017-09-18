<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php
//While
$i=0;
while($i<10){
    echo $i."\n";
    $i++;
}

//Do-While
$i = 0;
do {
    echo $i."\n";
    $i++;
} while ($i <10);
//For
for($i = 1; $i <10; $i++){
    echo $i."\n";
}
//es lo mismo que
for($i = 1; $i <10; ){
    echo $i."\n";
    $i++;
}

//Foreach

$mi_array = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "cuatro" => cuatro
);
foreach($mi_array as $indice => $valor) {
    print "$mi_array[$indice] => $valor. ";
}
//esto mostraría: 1 => 1. 2 => 2. 3 => 3. 4 => 4.
//si quisiéramos que la salida fuese parecida a uno => 1. dos = 2... el foreach tendría que ser así
foreach($mi_array as $indice => $valor) {
    print "$indice => $valor. ";
}
echo "<br/>\n";
//continue

$i=0;
while ($i<10) {
    $i++;
    echo $i."\n";
    if (!($i % 2)) { // saltar los miembros pares
        continue;
    }
}
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>