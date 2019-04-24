<html>
<head>
    <title>Cadenas en PHP7</title>
</head>

<body>
<table class="doctable table">
    <caption><strong>Caracteres escapados</strong></caption>


    <thead>
    <tr>
        <th>Secuencia</th>
        <th>Significado</th>
    </tr>

    </thead>


    <tbody class="tbody">
    <tr>
        <td><em>\n</em></td>
        <td>avance de línea (LF o 0x0A (10) en ASCII)</td>
    </tr>

    <tr>
        <td><em>\r</em></td>
        <td>retorno de carro (CR o 0x0D (13) en ASCII)</td>
    </tr>

    <tr>
        <td><em>\t</em></td>
        <td>tabulador horizontal (HT o 0x09 (9) en ASCII)</td>
    </tr>

    <tr>
        <td><em>\v</em></td>
        <td>tabulador vertical (VT o 0x0B (11) en ASCII) (desde PHP 5.2.5)</td>
    </tr>

    <tr>
        <td><em>\e</em></td>
        <td>escape (ESC o 0x1B (27) en ASCII) (desde PHP 5.4.4)</td>
    </tr>

    <tr>
        <td><em>\f</em></td>
        <td>avance de página (FF o 0x0C (12) en ASCII) (desde PHP 5.2.5)</td>
    </tr>

    <tr>
        <td><em>\\</em></td>
        <td>barra invertida</td>
    </tr>

    <tr>
        <td><em>\$</em></td>
        <td>signo de dólar</td>
    </tr>

    <tr>
        <td><em>\"</em></td>
        <td>comillas dobles</td>
    </tr>

    <tr>
        <td><em>\[0-7]{1,3}</em></td>
        <td>
            la secuencia de caracteres que coincida con la expresión regular
            es un carácter en notación octal, que silenciosamente desborda para encajar en un byte
            (p.ej. "\400" === "\000")
        </td>
    </tr>

    <tr>
        <td><em>\x[0-9A-Fa-f]{1,2}</em></td>
        <td>
            la secuencia de caracteres que coincida con la expresión regular
            es un carácter en notación hexadecimal
        </td>
    </tr>

    <tr>
        <td><em>\u{[0-9A-Fa-f]+}</em></td>
        <td>
            la secuencia de caracteres que coincida con la expresión regular es un
            punto de código de Unicode, la cual será imprimida al string como dicha
            representación UTF-8 del punto de código (añadido en PHP 7.0.0)
        </td>
    </tr>

    </tbody>

</table>
<?php
echo 'esta es una cadena normal';
echo "\n\r";
echo 'Se pueden poner varias lineas
de esta forma
sin ningún problema';
echo "\n\r";
echo 'Para escribir el símbolo "\'" hay que usar la barra "\\"';
// Esto mostraría: Para escribir el símbolo "'" hay que usar la barra "\"
echo "\n\r";

$str = <<<EOD
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis heredoc.
EOD;
echo $str;
echo "\n\r";
$jugo = "manzana";

echo "Él tomó algo de jugo de $jugo.".PHP_EOL;
echo "\n\r";
// Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
echo "Él tomó algo de jugo hecho de ${jugo}s.";
echo "\n\r";


$genial = 'fantástico';

// Funciona, muestra: Esto es fantástico
echo "Esto es {$genial}";
echo "\n\r";

$cadena = "hola mundo!!!";
$valor = strlen($cadena); //$valor valdria 13
echo "Valor: $valor";
echo "\n\r";
$valor = substr_count($cadena, "!");// $valor valdria 3
echo "Valor: $valor";
echo "\n\r";
$valor = strchr($cadena,"!"); //$valor valdria "!!!"
echo "Valor: $valor";
echo "\n\r";
$valor = strtoupper($cadena); //$valor valdría "HOLA MUNDO!!!"
echo "Valor: $valor";
echo "\n\r";
$valor = strtr($cadena,"aou","áóú"); //$valor valdría "hólá múndó!!!"
echo "Valor: $valor";
echo "\n\r";
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>