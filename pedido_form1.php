<?php

/*datos del formulario*/
$nombre=$_POST["nombre"];
$email=$_POST["email"];
    /*data archivo de imagen*/
$archivo=$_FILES["archivo"];
$nombre_archivo=$_FILES["archivo"]["name"];
$tipo_archivo=$_FILES["archivo"]["type"];
$tamaño_archivo=$_FILES["archivo"]["size"];
$carpeta="/proyecto_deOroVerde/uploads/";
    /*fin archivo imagen*/
$formato=$_POST["formato"];
$cantidad=$_POST["cantidad"];

if (!is_dir($carpeta)) {
    mkdir("uploads");
}

/*restricción de tamaño (2MB) y tipo de archivo*/
if($tamaño_archivo<=2000000 && ($tipo_archivo=="image/jpeg" || $tipo_archivo=="image/jpg" || $tipo_archivo=="image/png")){

    /*ruta carpeta de destino*/
    $ruta_destino=$_SERVER["DOCUMENT_ROOT"] . $carpeta;
    /*COMO GUARDO LOS ARCHIVOS DE IMAGEN EN HOSTINGUER???
    cómo configurar los permisos utilizando las herramientas de gestión de archivos de tu panel de control de Hostinger.*/

    //de carpeta temporal a carpeta destino:
    if(move_uploaded_file($archivo["tmp_name"], $ruta_destino.$nombre_archivo)){
        echo "Archivo subido correctamente";
    }else{
        echo "Error al subir el archivo";
    }
}else{
    echo "Error al subir el archivo. El tamaño del archivo es mayor de 2 MB o el formato no es .jpg .jpeg o .png";
}

/*datos de conexión**/
$db_host="localhost";
$db_nombre="deOroVerde";
$db_usuario="root";
$db_contra="";

/*conexión*/
$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

/*manejo de errores*/
if(mysqli_connect_errno()==true){
    echo "Fallo al conectar con la BBDD";
    exit();
}

mysqli_set_charset($conexion, "utf8");

$sql="INSERT INTO `pedido_form1`(`Nombre`, `Email`, `Imagen`, `Formato`, `Cantidad`) VALUES ('$nombre', '$email', '$archivo', '$formato', $cantidad)";

$result=mysqli_query($conexion, $sql);

/*Éxito o fallo en el envío del formulario*/
if($result==false){
    echo "Error en el envío del formulario.";
    /*header('Location: formulario_no_enviado.php');*/
}else{
    echo "Formulario enviado";
    /*header('Location: formulario_enviado.php');*/
}

//Cerrar la conexión con la BBDD:
mysqli_close($conexion);

?>