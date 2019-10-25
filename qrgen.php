<?php 
include 'generar.php';

$id = $_GET['id'];


$algo = qr_gen($id);
echo '<img src="'.$algo.'"/>';


#unlink($algo);#borra el archivo


?>