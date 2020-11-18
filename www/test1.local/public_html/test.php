<?php
header('Content-type: image/jpeg');//в header будем передавать изображение
$uploadfile='addregion/RussiaWithTowns.jpg'; //указываем путь файла
list($width, $height) = getimagesize($uploadfile);//получаем текущий размер изображения в $width,$height
$new_width = 200;//будущая пропорция(ширина)
$new_height = 100;//будущая пропорция(высота)
$image_p = imagecreatetruecolor($new_width, $new_height); //создание изображения 200x100
$image = imagecreatefromjpeg($uploadfile); //создание изображения,путь которого лежит в $uploadfile
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);//изображение $image будет скопировано в $image_p с ресемплированием(уменьшение размера не влияло на четкость)
imagejpeg(imagecreatefromjpeg($uploadfile));//вывод изображения
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег IMG</title>
 </head>
 <body> 

 </body>
</html>