<html>
<head>
    <title>Arrays en PHP7</title>
</head>

<body>
<table class="doctable table">
    <caption><strong>Operadores para arrays</strong></caption>

    <thead>
    <tr>
        <th>Ejemplo</th>
        <th>Nombre</th>
        <th>Resultado</th>
    </tr>

    </thead>

    <tbody class="tbody">
    <tr>
        <td>$a + $b</td>
        <td>Unión</td>
        <td>Unión de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a == $b</td>
        <td>Igualdad</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> i <var class="varname"><var class="varname">$b</var></var> tienen las mismas parejas clave/valor.</td>
    </tr>

    <tr>
        <td>$a === $b</td>
        <td>Identidad</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var> tienen las mismas parejas clave/valor en el mismo
            orden y de los mismos tipos.</td>
    </tr>

    <tr>
        <td>$a != $b</td>
        <td>Desigualdad</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a &lt;&gt; $b</td>
        <td>Desigualdad</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a !== $b</td>
        <td>No-identidad</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es idéntica a <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    </tbody>

</table>
<?php
$ciudades = array(
    0=>"salamanca",
    1=>"valladolid",
    2=>"sevilla");
echo $ciudades[0]; //mostraría: salamanca
$ciudades[3] = "barcelona";
$nuevo_array[0] = "pepe";
$nuevo_array[1] = "jose";

$direccion = array(
    "calle" => "Gran vía",
    "portal" => 23,
    "piso" => 5,
    "letra" => "B",
    "telefono" => 91234567
);

echo $direccion['portal'];

$telefonos = array("casa" => 91234567,
    "móvil" => 61234567);
$direccion = array("calle" => "Gran vía",
    "portal" => 23,
    "piso" => 5,
    "letra" => "B",
    "telefono" => $telefonos);
echo $direccion['telefono']['casa'];


$array1    = array("color" => "red", 2, 4);
$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultado = array_merge($array1, $array2);
print_r($resultado);


?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>