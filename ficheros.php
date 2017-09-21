<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php
$fp = fopen('ficheros/texto.txt', 'w');
fputs($fp, "1");
fputs($fp, "23");
fclose($fp);
// el contenido de 'texto.txt' es 123 todo junto.
$fp = fopen('ficheros/texto2.txt', 'w');
fputs($fp, "1\n");
fputs($fp, "23");
fclose($fp);


if($fh = fopen("ficheros/texto.txt","r")){ //Al colocarlo dentro de la condición if, sabremos si no ha habido ningún problema al abrir el fichero
 while (!feof($fh)){ //Atención a la función feof(), se usa para saber si se ha llegado al final de un fichero
 $F1[] = fgets($fh);
 }
 fclose($fh);
 }
foreach($F1 as $indice => $valor) {
    print "$indice => $valor<br/>";
}


//copia
$old = '/tmp/ejemplo.txt';
$new = '/tmp/nuevo.txt';
copy($old, $new) or die("Unable to copy $old to $new.");

//Mover/renombrar
$old = '/tmp/nuevo.txt';
$new = '/tmp/renombrado.txt';
rename($old, $new) or die("Unable to rename $old to $new.");

//Borrado
unlink("/tmp/renombrado.txt");
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>
