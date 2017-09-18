<html>
<head>
    <title>Operadores en PHP7</title>
</head>

<body>

<table class="doctable table">
    <caption><strong>Operadores aritméticos</strong></caption>

    <thead>
    <tr>
        <th>Ejemplo</th>
        <th>Nombre</th>
        <th>Resultado</th>
    </tr>

    </thead>

    <tbody class="tbody">
    <tr>
        <td>+$a</td>
        <td>Identidad</td>
        <td>
            Conversión de <var class="varname"><var class="varname">$a</var></var> a <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> o
            <span class="type"><a href="language.types.float.php" class="type float">float</a></span> según el caso.
        </td>
    </tr>

    <tr>
        <td>-$a</td>
        <td>Negación</td>
        <td>Opuesto de <var class="varname"><var class="varname">$a</var></var>.</td>
    </tr>

    <tr>
        <td>$a + $b</td>
        <td>Adición</td>
        <td>Suma de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a - $b</td>
        <td>Sustracción</td>
        <td>Diferencia de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a * $b</td>
        <td>Multiplicación</td>
        <td>Producto de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a / $b</td>
        <td>División</td>
        <td>Cociente de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a % $b</td>
        <td>Módulo</td>
        <td>Resto de <var class="varname"><var class="varname">$a</var></var> dividido por <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a ** $b</td>
        <td>Exponenciación</td>
        <td>Resultado de elevar <var class="varname"><var class="varname">$a</var></var> a la potencia <var class="varname"><var class="varname">$b</var></var>ésima. Introducido en PHP 5.6.</td>
    </tr>

    </tbody>

</table>

<table class="doctable table">
    <caption><strong>Operadores de comparación</strong></caption>

    <thead>
    <tr>
        <th>Ejemplo</th>
        <th>Nombre</th>
        <th>Resultado</th>
    </tr>

    </thead>

    <tbody class="tbody">
    <tr>
        <td>$a == $b</td>
        <td>Igual</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es igual a <var class="varname"><var class="varname">$b</var></var> después de la manipulación de tipos.</td>
    </tr>

    <tr>
        <td>$a === $b</td>
        <td>Idéntico</td>
        <td>
            <strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es igual a <var class="varname"><var class="varname">$b</var></var>, y son del mismo
            tipo.
        </td>
    </tr>

    <tr>
        <td>$a != $b</td>
        <td>Diferente</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var> después de la manipulación de tipos.</td>
    </tr>

    <tr>
        <td>$a &lt;&gt; $b</td>
        <td>Diferente</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var> después de la manipulación de tipos.</td>
    </tr>

    <tr>
        <td>$a !== $b</td>
        <td>No idéntico</td>
        <td>
            <strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var>, o si no son del mismo
            tipo.
        </td>
    </tr>

    <tr>
        <td>$a &lt; $b</td>
        <td>Menor que</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es estrictamente menor que <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a &gt; $b</td>
        <td>Mayor que</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es estrictamente mayor que <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a &lt;= $b</td>
        <td>Menor o igual que</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es menor o igual que <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a &gt;= $b</td>
        <td>Mayor o igual que</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es mayor o igual que <var class="varname"><var class="varname">$b</var></var>.</td>
    </tr>

    <tr>
        <td>$a &lt;=&gt; $b</td>
        <td>Nave espacial</td>
        <td>
            Un <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span> menor que, igual a, o mayor que cero cuando
            <var class="varname"><var class="varname">$a</var></var> es respectivamente menor que, igual a, o mayor
            que <var class="varname"><var class="varname">$b</var></var>. Disponible a partir de PHP 7.
        </td>
    </tr>

    <tr>
        <td>$a ?? $b ?? $c</td>
        <td>Fusión de null</td>
        <td>
            El primer operando de izquierda a derecha que exista y no sea <strong><code>NULL</code></strong>.
            <strong><code>NULL</code></strong> si no hay valores definidos y no son <strong><code>NULL</code></strong>. Disponible a partir de PHP 7.
        </td>
    </tr>

    </tbody>

</table>


<table class="doctable table">
    <caption><strong>Operadores lógicos</strong></caption>

    <thead>
    <tr>
        <th>Ejemplo</th>
        <th>Nombre</th>
        <th>Resultado</th>
    </tr>

    </thead>

    <tbody class="tbody">
    <tr>
        <td>$a and $b</td>
        <td>And (y)</td>
        <td><strong><code>TRUE</code></strong> si tanto <var class="varname"><var class="varname">$a</var></var> como <var class="varname"><var class="varname">$b</var></var> son <strong><code>TRUE</code></strong>.</td>
    </tr>

    <tr>
        <td>$a or $b</td>
        <td>Or (o inclusivo)</td>
        <td><strong><code>TRUE</code></strong> si cualquiera de <var class="varname"><var class="varname">$a</var></var> o <var class="varname"><var class="varname">$b</var></var> es <strong><code>TRUE</code></strong>.</td>
    </tr>

    <tr>
        <td>$a xor $b</td>
        <td>Xor (o exclusivo)</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> o <var class="varname"><var class="varname">$b</var></var> es <strong><code>TRUE</code></strong>, pero no ambos.</td>
    </tr>

    <tr>
        <td>! $a</td>
        <td>Not (no)</td>
        <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es <strong><code>TRUE</code></strong>.</td>
    </tr>

    <tr>
        <td>$a &amp;&amp; $b</td>
        <td>And (y)</td>
        <td><strong><code>TRUE</code></strong> si tanto <var class="varname"><var class="varname">$a</var></var> como <var class="varname"><var class="varname">$b</var></var> son <strong><code>TRUE</code></strong>.</td>
    </tr>

    <tr>
        <td>$a || $b</td>
        <td>Or (o inclusivo)</td>
        <td><strong><code>TRUE</code></strong> si cualquiera de <var class="varname"><var class="varname">$a</var></var> o <var class="varname"><var class="varname">$b</var></var> es <strong><code>TRUE</code></strong>.</td>
    </tr>

    </tbody>

</table>

<table id="language.operators.comparison.types" class="doctable table">
    <caption><strong>La comparación con varios tipos</strong></caption>

    <thead>
    <tr>
        <th>Tipo de operando 1</th>
        <th>Tipo de operando 2</th>
        <th>Resultado</th>
    </tr>

    </thead>

    <tbody class="tbody">
    <tr>
        <td><span class="type"><a href="language.types.null.php" class="type null">null</a></span> o <span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
        <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
        <td>Convierte <strong><code>NULL</code></strong> en "", comparación numérica o léxica</td>
    </tr>

    <tr>
        <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> o <span class="type"><a href="language.types.null.php" class="type null">null</a></span></td>
        <td>cualquiera</td>
        <td>Convierte ambos lados a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, <strong><code>FALSE</code></strong> &lt; <strong><code>TRUE</code></strong></td>
    </tr>

    <tr>
        <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
        <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
        <td>Las clases internas pueden definir su propia comparación, diferentes clases
            son incomparables, la misma clase - comparan propiedades en la misma forma que
            los arrays (PHP 4), PHP 5 tiene su propia <a href="language.oop5.object-comparison.php" class="link">explicación</a>
        </td>
    </tr>

    <tr>
        <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span>, <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> o <span class="type"><a href="language.pseudo-types.php#language.types.number" class="type number">number</a></span></td>
        <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span>, <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> o <span class="type"><a href="language.pseudo-types.php#language.types.number" class="type number">number</a></span></td>
        <td>Traducir las cadenas y recursos a números, matemática usual</td>
    </tr>

    <tr>
        <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
        <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
        <td>Un array con menos elementos es menor, si una clave del operando 1 no se
            encuentra en el operando 2 entonces los arrays son incomparables, de otra forma - compara
            valor por valor (ver el siguiente ejemplo)</td>
    </tr>

    <tr>
        <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
        <td>cualquiera</td>
        <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span> es siempre mayor</td>
    </tr>

    <tr>
        <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
        <td>cualquiera</td>
        <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span> es siempre mayor</td>
    </tr>

    </tbody>

</table>
<?php

//operadores aritméticos
$a = ($b = 5) + 3;
/* En este caso habríamos inicializado 2 variables. $a y $b * $b tendría el valor 5, pero $a tendría el valor $b + 3,
* es decir, 8.
*/

echo (5 % 3)."\n";           // muestra 2
echo (-5 % -3)."\n";         // muestra -2

echo 2**3; //muestra 2 elevado a la 3 es decir 8
echo "<br/>";


echo "Postincremento<br />";
$a = 1;
echo "Al usar el operador el usarlo es 2: ". $a."<br />";
echo "Preincremento<br />";
$a = 1;
echo "Al usar el operador el usarlo es 2: ". $a."<br />";
echo "Postdecremento<br />";
$a = 2;
echo "Al usar el operador el usarlo es 1: ". $a."<br />";
echo "Predecremento<br />";
$a = 2;
echo "Al usar el operador el usarlo es 1: ". $a."<br />";

//operadores de comparación
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

//nuevo en PHP7
// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1

echo "a" <=> "aa"; // -1
echo "zz" <=> "aa"; // 1

// Arrays
echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo [1, 2, 3] <=> []; // 1
echo [1, 2, 3] <=> [1, 2, 1]; // 1
echo [1, 2, 3] <=> [1, 2, 4]; // -1

// Objects
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b; // 0

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b; // -1

$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b; // 1

// only values are compared
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b; // 1


// Booleanos y null son comparados siempre coomo bool
var_dump(1 == TRUE);  // TRUE - same as (bool)1 == TRUE
var_dump(0 == FALSE); // TRUE - same as (bool)0 == FALSE
var_dump(100 < TRUE); // FALSE - same as (bool)100 < TRUE
var_dump(-10 < FALSE);// FALSE - same as (bool)-10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool)NULL < (bool)-100 is FALSE < TRUE


// Fetches the value of $_GET['user'] and returns 'nobody'
// if it does not exist.
$username = $_GET['user'] ?? 'nobody';
// This is equivalent to:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// Coalescing can be chained: this will return the first
// defined value out of $_GET['user'], $_POST['user'], and
// 'nobody'.
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>