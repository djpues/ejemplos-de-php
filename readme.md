Ejemplos de PHP7

Ejemplos básicos del funcionamiento de PHP7 para clase

Instrucciones para la instalación de dependencias

Instalar composer

https://getcomposer.org/download/

desde el directorio de la aplicación

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php

a partir de ese momento deberíamos poder ejecutar
 ./composer.phar 
 
 por ejemplo instalar PHPMailer
 
 ./composer.phar require phpmailer/phpmailer
 
 