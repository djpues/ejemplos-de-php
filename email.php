<html>
<head>
    <title>Envío de Email en PHP7</title>
</head>

<body>

Changes required in sendmail.ini

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=your-gmail-id@gmail.com
auth_password=your-gmail-password
force_sender=your-gmail-id@gmail.com

Changes required in php.ini

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = your-gmail-id@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
<?php
// Varios destinatarios
$para  = 'aidan@example.com' . ', '; // atención a la coma
$para .= 'wez@example.com';

// título
$título = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>

<ul>
    <li><a href="index.php">Volver al Inicio</a></li>
</ul>
</body>
</html>