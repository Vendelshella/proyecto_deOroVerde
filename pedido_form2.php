<?php
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $to="info@deoroverde.szmblog.es";
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];

    //HEADERS
    $headers="MIME-Version: 1.0\r\n";
    //con el punto igual concatenamos, no sobreescribimos
    $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
    $headers.="From: $nombre \r\n $email \r\n";

    $exito=mail($to, $asunto, $mensaje, $headers);

    if($exito){
        header('Location: subida_exito.php');
    }else{
        header('Location: subida_error.php');
    }
?>