<?php
$contrasegna="micontraseña";
$safepass=crypt($contrasegna,"semilla");
print "Contraseña:".$contrasegna.":cifrada crypt:".$safepass."<br/>\n";
$safepass=md5($contrasegna);
print "Contraseña:".$contrasegna.":cifrada MD5:".$safepass."<br/>\n";
$safepass=sha1($contrasegna);
print "Contraseña:".$contrasegna.":cifrada SHA1:".$safepass."<br/>\n";

//print_r($_SERVER);
foreach($_SERVER as $indice => $valor) {
    print "$indice => $valor.<br/>\n ";
}

