<?php
include 'libraries/phpqrcode/qrlib.php';


function qr_gen($parametro){

    $dir = 'temp/';
    
    if(file_exists($dir)==true){
        if(is_dir($dir)==true){
            $archivos = scandir($dir);
            foreach($archivos as $archivo){
                if($archivo != '.' && $archivo !='..'){
                    unlink($dir.$archivo);
                }
            }
        }
    }else{
        mkdir($dir);
    }
    
    $filename = $dir.'qr_code_'.$parametro.'.png'; #cedula,

    $size = 10;
    $level = 'H';
    $frameSize = 3;
    $content = 'http://localhost/qr/check.php?id='.$parametro;
    QRcode::png($content,$filename,$level,$size,$frameSize);

    return $filename;
}




?>