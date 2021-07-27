<?php
$old = imagecreatefrompng('image.png');
$new = imagecreatetruecolor(200, 100);
imageCopyResampled($new, $old, 50, 0, 0, 0, 100, 100, 20000, 20000);
// в уменьшеной картинке по краям будут пустые заливки, т.к. пропорции исходного изображения и баннера различны

imagepng($new, 'image_min.png');
imagedestroy($new);
?>
<html>
    <head><title>Test</title></head>
    <body>
        <img src="image_min.png">
    </body>
</html>
