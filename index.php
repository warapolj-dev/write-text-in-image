<?php
// ต้องใช้ gd2 
// php.ini => extension=gd2

$img = imagecreatefromjpeg('test.jpg'); //ที่อยู่รูปภาพ
$white = imagecolorallocate($img, 254, 0, 0); //สีข้อความ
$txt = "Hello"; //ข้อความ
$font = "C:\Windows\Fonts\arial.ttf"; // ที่อยู่ font
$textSize = 20; //ขนาดข้อความ
$tiltAngle = 0; //มุมเอียง
$x = 50; // แกน x นับจากซ้ายไปขวา
$y = 50; // แกน y นับจากบนลงล่าง

imagettftext($img, $textSize, $tiltAngle, $x, $y, $white, $font, $txt); //นำข้อความใาแสดงบนรูปภาพ

// แสดงผล
header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($img);

// ถ้าต้องการ save file ใหม่
// 100 คือคุณภาพของรูป มีค่าตั้งแต่ 0-100
// imagejpeg($img, "new.jpg", 100);
?>