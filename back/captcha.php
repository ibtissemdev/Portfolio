<?php
require_once 'Model.php';
$conn=new Model;
//$conn->getPdo();

$_SESSION['captcha']= random_int(10000, 99999);

$img=imagecreate(60, 30);
$background= imagecolorallocate($img,0, 0, 255); 
$textcolor=imagecolorallocate($img, 255, 255, 255);

imagestring($img,5,6,6,$_SESSION['captcha'],$textcolor);
header("Content-Type:image/jpeg"); 
imagejpeg($img,null); 
imagedestroy($img); 


?>