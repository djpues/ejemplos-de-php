<html>
<head>
    <title>Cookies en PHP7</title>
</head>

<body>

<?php

if( isset($_COOKIE)
    &&is_array($_COOKIE)
    && count($_COOKIE)>0
){
    ?>
    <h2>Cookies</h2>
    <ul>
        <?php
        foreach($_COOKIE as $indice => $valor) {
            print "<li>$indice => $valor</li> ";
        }
        ?>
    </ul>
    <?php
}
setcookie("cookie1", "valor");
setcookie("cookie2", "valor2", time() + 3600);
setcookie("cookie3", "valor3", time() + 3600, "/", ".midominio.com");
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>