<?php
require 'libraries/vendor/autoload.php';

$id = $_GET['id'];

use Spipu\Html2Pdf\Html2Pdf;

// Lee el contenido del otro fichero
ob_start();
require_once 'libraries/html2pdf/print_abono.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
$html2pdf -> writeHTML($html);
$html2pdf -> output('Abono.pdf');



?>