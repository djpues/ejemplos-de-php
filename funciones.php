<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php
/*
 * Primer parametro ...
 * Salida......
 */
function nombre_funcion($parametro_1, $str_datos, $array_ciudades){

    /*
    instruccion_1;
    instruccion_2;
    ....
    instruccion_n;
    */
    return $parametro_1; //con esto podríamos devolver un valor
}
$valor_devuelto=nombre_funcion(1,"2", array());
print_r($valor_devuelto);
print_r("\n\r<br/>");


//paso por valor
function mi_funcion_valor($parametro){
    $parametro++;
}
$mi_variable = 1;
echo "mi_variable vale: ".$mi_variable." antes de llamar a la función";
print_r("\n\r<br/>");
mi_funcion_valor($mi_variable);
echo "mi_variable vale: ".$mi_variable." después de llamar a la función";
print_r("\n\r<br/>");


// paso por referencia
function mi_funcion_referencia(&$parametro){ //atención al símbolo &
    $parametro++;
}
$mi_variable = 1;
echo "mi_variable vale: ".$mi_variable." antes de llamar a la función";
print_r("\n\r<br/>");
mi_funcion_referencia($mi_variable);
echo "mi_variable vale: ".$mi_variable." después de llamar a la función";
print_r("\n\r<br/>");



// Parámetros por defecto
function parametros_defecto($parametro_1=0, $parametro_2="", $parametro_n=2)
{

    /*
    instruccion_1;
    */
    return array($parametro_1,$parametro_2,$parametro_n); //con esto podríamos devolver un valor
}
$valor_devuelto=parametros_defecto(1,2,3);
echo "<h2>";
print_r($valor_devuelto);
echo "</h2>";
print_r("\n\r<br/>");
$valor_devuelto=parametros_defecto(1,2);
var_dump($valor_devuelto);
print_r("\n\r<br/>");
$valor_devuelto=parametros_defecto(1);
print_r($valor_devuelto);
print_r("\n\r<br/>");
$valor_devuelto=parametros_defecto();
print_r($valor_devuelto);
print_r("\n\r<br/>");

// Los parámetros nombrados vete a Python
/*
$valor_devuelto=parametros_defecto($parametro_n:1);
print_r("Parametros nombrados=");
print_r($valor_devuelto);
print_r("\n\r<br/>");
*/

$mi_variable_global = "pepe";
function intento_modificar_variable_global(){
    //uso erróneo de variable global:
    $mi_variable_global = "jose";
}
intento_modificar_variable_global();
print_r($mi_variable_global);
print_r("\n\r<br/>");

function modificar_variable_global(){
    //uso de variable global a trabes de la variable superglobal$GLOBALS:
    $GLOBALS['mi_variable_global'] = "jose";
    //también se puede hacer de esta forma:
    global $mi_variable_global;
    $mi_variable_global = "jose";
 }

modificar_variable_global();
print_r($mi_variable_global);
print_r("\n\r<br/>");


function test(){
    static $i = 0;
    $i++;
    echo $i." ";
    print_r("\n\r<br/>");
}
test();
test();
test();


$i = 0;
function suma_hasta_5(){
    global $i;
    if ($i<5){
        $i++;
        suma_hasta_5();
    } else {
        echo "Ya hemos llegado a 5";
    }
}
suma_hasta_5();

?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>