<?php
// Set the content-type
include("core.php");

// Get Data
    $first_field = $_POST["first_field"];
    $second_field = $_POST["second_field"];
    $third_field = $_POST["third_field"];



//$im = imagecreate(800, 40);
$imgPath = 'background.jpg';
$im = imagecreatefromjpeg($imgPath);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

// The text to draw
$first_field = core($first_field, 'fa', 'persian');
$second_field = core($second_field, 'fa', 'persian');
$third_field = core($third_field, 'fa', 'normal');
// Replace path by your own font path

$font = dirname(__FILE__) . '/card_font/Vazir.ttf';

//first line
// Add some shadow to the text
imagettftext($im, 30, 0, 220, 95, $grey, $font, $first_field);

// Add the text
imagettftext($im, 30, 0, 221, 94, $black, $font, $first_field);

//next line

// Add some shadow to the text
imagettftext($im, 20, 0, 250, 190, $grey, $font, $second_field);

// Add the text
imagettftext($im, 20, 0, 251, 188, $black, $font, $second_field);

//next line

// Add some shadow to the text
imagettftext($im, 20, 0, 270, 285, $grey, $font, $third_field);

// Add the text
imagettftext($im, 20, 0, 271, 284, $black, $font, $third_field);
header('Content-Type: text/html; charset=utf-8');
// Using imagepng() results in clearer text compared with imagejpeg()
$photoName = date('His');
$photoName = "img" . $photoName;

imagepng($im, "../cards/" . $photoName . ".png");
imagedestroy($im);
$photoUrl ="../cards/" . $photoName . ".png";
//$view= '<img src="'.$photoUrl.'">';
return $photoUrl ;
echo $photoUrl;
?>
