<?php
include 'generar.php';
$qr = qr_gen($id);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Personal</title>
    <style type="text/css">

        img.logo {
            width: 100px;
        }
        h1 {
            text-align: center;
            position: relative;
            margin-top: -50px;
        }
        .datos {
            margin-left: 40px;
        }
        .qr {
            text-align: center;
        }
    </style>
</head>
<body>
    <img src="logo M.png" alt="Magallanes" class="logo">
    <h1>Código QR de Entrada Personal</h1>
    
    <div class="datos">
        <h2>Abonado/a:</h2>
        <p>NOMBRE: </p>
        <p>CÉDULA: </p>
        <p>TIPO DE ABONO: </p>
    </div>
    <div class="qr">
        <img src="<?php echo $qr; ?>" alt="Codigo QR">
    </div>
</body>
</html>