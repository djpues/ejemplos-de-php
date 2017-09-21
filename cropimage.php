<?php

// ./composer.phar require gregwar/image
require_once 'vendor/autoload.php';
use Gregwar\Image\Image;
Image::open('img/mona.jpg')
    ->cropResize(500, 150)
    ->save('img/out.jpg');
?>
<img src="img/mona.jpg"/>
<img src="img/out.jpg"/>
