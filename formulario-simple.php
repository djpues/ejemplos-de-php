<html>
<head>
    <title>Plantilla en PHP7</title>
</head>

<body>

<?php
function formulario_valida(&$formu){
    echo "<br/>\nFunción valida<br/>\n";
    $criterios=array(
        'nombre'=>array(
            "required"=>"required",
            "minlength"=>9
        )
    );
    var_dump($criterios);
    echo "<br/>\n";
    $fallo=false;
    $errores=array();
    foreach($criterios as $campo => $valor) {
        //print_r($campo);
        echo "<br/>\n";
        foreach($valor as $criterio => $valorcriterio) {
            //print "$criterio => $valorcriterio.<br/>\n ";
            //var_dump($formu[$campo]);
            //echo "<br/>\n";
            switch ($criterio){
                case "required":
                    if ($formu[$campo]==null){
                        $fallo=true;
                        $errores[$campo][$criterio]="No está rellenado";
                    }
                    break;
                case "minlength":
                    if (strlen($formu[$campo])<$valorcriterio){
                        $fallo=true;
                        $errores[$campo][$criterio]="No es mayor que ".$valorcriterio;
                    }
                    break;
            }
        }
    }
    echo "<h2>Errores</h2>";
    //var_dump($errores);
    $formu['errores']=$errores;
    var_dump($formu['errores']);
    echo "<br/>";
    return !$fallo;
    /*
    //var_dump($formu);
    $nombre=$formu['nombre'];
    if(is_string($nombre) && strlen($nombre)>8){
        return true;
    }
    */
    return false;
}


if(isset($_POST['formu']['enviar'])){
    echo "<h2>Datos de POST</h2>";
    foreach($_POST['formu'] as $indice => $valor) {
        print "$indice => $valor<br/>\n";
    }
    var_dump($_POST['formu']);
}


if(isset($_GET['enviar'])){
    echo "<h2>Datos de GET</h2>";
    foreach($_GET as $indice => $valor) {
        print "$indice => $valor<br/>\n";
    }
}

if(isset($_POST['formu'])|| isset($_GET['formu'])){
    //me están enviando el formulario
    //SE VALIDA EL FORMULARIO
    if(formulario_valida($_REQUEST['formu'])){
        //no presenta el formulario
        ?>
        Presentación de Datos
        Nombre: <?php echo $_POST['formu']['nombre']; ?>
        <?php
    }else{
        //presenta el formulario

        if(count($_REQUEST['formu']['errores'])>0){
        ?>
        <h2>Errores</h2>
        <ul id="errores">
            <?php
            foreach($_REQUEST['formu']['errores'] as $indice => $valor) {
                print "$indice:<br/>";
                foreach($_REQUEST['formu']['errores'][$indice] as $criterio => $valorcriterio) {
                    print "\t$criterio => $valorcriterio. <br/>";

                }

            }
            ?>

        </ul>
        <?php
        }
        ?>
        <FORM ACTION="formulario-simple.php" name="formu" METHOD="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="formu[nombre]"  id="nombre"
                   value="<?php
                   if(isset($_POST['formu']['nombre'])&&$_POST['formu']['nombre']!=null){
                       echo $_POST['formu']['nombre'];
                   }
                   ?>">
            <br/>
            <input type="submit" name="formu[enviar]" value="enviar"/>
        </FORM>
        <?php
    }
}else{
    ?>
    <FORM ACTION="formulario-simple.php" name="formu" METHOD="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="formu[nombre]"  id="nombre"
               value="<?php
               if(isset($_POST['formu']['nombre'])&&$_POST['formu']['nombre']!=null){
                   echo $_POST['formu']['nombre'];
               }
               ?>">
        <br/>
        <input type="submit" name="formu[enviar]" value="enviar"/>
    </FORM>
    <?php

}
?>



<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>
