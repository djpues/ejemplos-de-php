<html>
<head>
    <title>Envío Ficheros en PHP7</title>
</head>

<body>

<form action="send_files.php" method="post" enctype="multipart/form-data">
    Enviar estos ficheros:<br />
    <input name="fichero_usuario[]" type="file" multiple="multiple"/><br />
    <input type="submit" value="Enviar ficheros" />
</form>
<?php
if(isset($_FILES['fichero_usuario'])
    && isset($_FILES['fichero_usuario']['name'])
    && count($_FILES['fichero_usuario']['name'])>0
    && $_FILES['fichero_usuario']['name'][0]!=''
    ){
    var_dump($_FILES['fichero_usuario']);
    $target_dir = "uploads/";
    echo "<br/>\n";
    var_dump(count($_FILES['fichero_usuario']['name']));
    echo "<br/>\n";
    foreach($_FILES['fichero_usuario']['name'] as $indice => $valor) {
        //print "$indice => $valor. ";
        $target_file = $target_dir . basename($_FILES["fichero_usuario"]["name"][$indice]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fichero_usuario"]["tmp_name"][$indice]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    // Check file size
        if ($_FILES["fichero_usuario"]["size"][$indice] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fichero_usuario"]["tmp_name"][$indice], $target_file)) {
                echo "The file ". basename( $_FILES["fichero_usuario"]["name"][$indice]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        echo "<br/>\n";
    }
}

?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>