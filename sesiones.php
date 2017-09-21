<html>
<head>
    <title>Sesiones en PHP7</title>
</head>

<body>
<?php
    if (isset($_POST['formu'])){
        print "<h2>POST</h2>";
        print_r($_POST['formu']);
        if( isset($_POST['formu']['nombre'])
            &&isset($_POST['formu']['valor'])
            &&$_POST['formu']['nombre']!=null
            &&$_POST['formu']['valor']!=null
            &&$_POST['formu']['valor']!=""
            &&$_POST['formu']['valor']!=""
        )
            //$_SESSION['nombre']=valor;
        session_destroy();
        session_start();
        $_SESSION[$_POST['formu']['nombre']]=$_POST['formu']['valor'];
    }
    if( isset($_SESSION)
        &&is_array($_SESSION)
        && count($_SESSION)>0
    ){
        ?>
        <h2>Session</h2>
        <ul>
        <?php
        foreach($_SESSION as $indice => $valor) {
            print "<li>$indice => $valor</li> ";
        }
        ?>
        </ul>
        <?php
    }
?>

<FORM ACTION="sesiones.php" name="formu" METHOD="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="formu[nombre]"  id="nombre"
           value="<?php
           if(isset($_POST['formu']['nombre'])&&$_POST['formu']['nombre']!=null){
               echo $_POST['formu']['nombre'];
           }
           ?>">
    <br/>
    <label for="valor">Valor</label>
    <input type="text" name="formu[valor]"  id="valor"
           value="<?php
           if(isset($_POST['formu']['valor'])
               &&$_POST['formu']['valor']!=null){
               echo $_POST['formu']['valor'];
           }
           ?>">
    <br/>
    <input type="submit" name="formu[enviar]" value="enviar"/>
</FORM>


<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>