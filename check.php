<?php
include 'connect.php';

$id = $_GET['id'];

$consulta = mysqli_query($conexion, "SELECT * FROM abono WHERE id = '$id'");
$atributo = mysqli_fetch_array($consulta);


$bd_id = $atributo ['id'];
$estado = $atributo ['estado'];

echo 'id en la base de datos = '.$bd_id.'<br>';
echo 'id recogida = '.$id.'<br>';
echo 'Estado del Abono = '.$estado.'<br><br>';

if ($estado == 'DIS'){
    $update = mysqli_query($conexion, "UPDATE abono SET estado = 'OCU' WHERE abono.id = '$id'");
    echo 'Pase Adelante';
}else if($estado == 'OCU'){
    echo 'Este código ya fue utilizado para este partido';
}else{
    echo 'Este Código es falso';
}

?>