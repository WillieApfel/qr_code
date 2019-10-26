<?php
require_once 'libraries/vendor/autoload.php';
use Endroid\QrCode\QrCode;



$parametro = 3;
$dir = 'temp/';
$filename = $dir.'qr_code_'.$parametro.'.png'; #cedula,

$content = 'http://localhost/qr/check.php?id='.$parametro;


$texto = "Generando códigos QR con PHP desde parzibyte.me";
$codigoQR = new QrCode($content);
header('Content-Type: ' . $codigoQR->getContentType());
$codigoQR->setLogoPath("Logo.png");
$codigoQR->setLogoSize(140, 55);
$colorDeFondo = ['r' => 0, 'g' => 0, 'b' => 2554, 'a' => 0];
#$codigoQR->setForegroundColor($colorDeFondo);
echo $codigoQR->writeString();
?>