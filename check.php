<?php
include 'connect.php';

$id = $_GET['id'];

$consulta = mysqli_query($conexion, "SELECT * FROM abono WHERE id = '$id'");
$atributo = mysqli_fetch_array($consulta);

$bd_id = $atributo ['id'];
$estado = $atributo ['estado'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chequeo Abono</title>
    <link rel="shortcut icon" href="Logo Magallanes.ico">
    <style type="text/css">
        p {
            font-size: 1.4rem;
        }
        .correcto {
            color: green;
        }
        .incorrecto {
            color: red;
        }
        .estado {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Estado de entrada:</h1>
    <?php
        echo '<p>id en la base de datos = '.$bd_id.'</p>';
        echo '<p>id recogida = '.$id.'</p>';
        echo '<p>Estado del Abono = '.$estado.'</p><br>';

        if ($estado == 'DIS'){
            $update = mysqli_query($conexion, "UPDATE abono SET estado = 'OCU' WHERE abono.id = '$id'");
            echo '<p class="estado correcto">Pase Adelante</p>';
        }else if($estado == 'OCU'){
            echo '<p class="estado incorrecto">Este código ya fue utilizado para este partido</p>';
        }else{
            echo '<p class="estado incorrecto">Este Código es falso</p>';
        }
    ?>
    
</body>
</html>