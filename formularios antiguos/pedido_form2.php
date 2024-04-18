<?php
    $email=$_POST["email"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];
    

    // Convertir el asunto y el mensaje a UTF-8
    $asunto = '=?UTF-8?B?' . base64_encode($asunto) . '?='; // Convertir el asunto a Base64
    $mensaje = utf8_decode($mensaje); // Convertir el mensaje a UTF-8

    
    $to="info@deoroverde.szmblog.es";

    //HEADERS
    $headers="MIME-Version: 1.0\r\n";
    $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
    $headers.="From: $email";

    $exito=mail($to, $asunto, $mensaje, $headers);

    if($exito){
        header('Location: subida_exito.php');
    }else{
        header('Location: subida_error.php');
    }
?>