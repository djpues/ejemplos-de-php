<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>
Superglobals — Superglobals son variables internas que están disponibles siempre en todos los ámbitos
$GLOBALS — Hace referencia a todas las variables disponibles en el ámbito global
$_SERVER — Información del entorno del servidor y de ejecución
$_GET — Variables HTTP GET
$_POST — Variables POST de HTTP
$_FILES — Variables de subida de ficheros HTTP
$_REQUEST — Variables HTTP Request
$_SESSION — Variables de sesión
$_ENV — Variables de entorno
$_COOKIE — Cookies HTTP
$php_errormsg — El mensaje de error anterior
$HTTP_RAW_POST_DATA — Datos POST sin tratar
$http_response_header — Encabezados de respuesta HTTP
$argc — El número de argumentos pasados a un script
$argv — Array de argumentos pasados a un script

<?php
echo "<br/>\n";
echo "Parámetros de \$_SERVER";
echo "<br/>\n";
print_r($_SERVER);
echo "<br/>\n";
echo "<br/>\n";
echo "Parámetros de \$_GET";
echo "<br/>\n";
print_r($_GET);
echo "<br/>\n";
echo "Parámetros de \$_POST";
echo "<br/>\n";
print_r($_POST);
echo "<br/>\n";
echo "Parámetros de \$_REQUEST";
echo "<br/>\n";
print_r($_REQUEST);
echo "<br/>\n";
if(isset($_GET['param1'])&&$_GET['param1']!=null){
    echo "El valor de param1 es ".$_GET['param1'];
}
echo "<br/>\n";

echo "Parámetros de \$_SESSION";
echo "<br/>\n";
//print_r($_SESSION);

?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>

