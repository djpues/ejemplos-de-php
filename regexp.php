<html>
<head>
    <title>Expresiones Regulares en PHP7</title>
</head>

<body>

<?php
/*
 * Obsoleto en PHP7
$email_id = "admin@tutorialspoint.com";
$retval = ereg("(\.)(com$)", $email_id);

if( $retval == true )
{
    echo "Found a .com<br>";
}
else
{
    echo "Could not found a .com<br>";
}

$retval = ereg(("(\.)(com$)"), $email_id, $regs);

if( $retval == true )
{
    echo "Found a .com and reg = ". $regs[0];
}
else
{
    echo "Could not found a .com";
}


$copy_date = "Copyright 1999";
$copy_date = ereg_replace("([0-9]+)", "2000", $copy_date);

print $copy_date;
*/

//Fórmula de uso de REGEXP para PHP7 compatible Perl


$line = "Vi is the greatest word processor ever created!";
// perform a case-Insensitive search for the word "Vi"

if (preg_match("/\bVi\b/i", $line, $match)){
    print "Match found!";
}
echo "<br/>\n";
$copy_date = "Copyright 1999";
$copy_date = preg_replace("([0-9]+)", "2000", $copy_date);

print $copy_date;

// divide la frase mediante cualquier número de comas o caracteres de espacio,
// lo que incluye " ", \r, \t, \n y \f
$claves = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($claves);


$foods = array("pasta", "steak", "fish", "potatoes");

// find elements beginning with "p", followed by one or more letters.
$p_foods = preg_grep("/p(\w+)/", $foods);

print "Encontrados ". count($p_foods). " elemento/s.<br/>\n";
foreach($p_foods as $indice => $valor) {
    print "$indice => $valor. ";
}
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>
