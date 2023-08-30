<?php
//VALIDAR LOS DATOS DEL FORMULARIO CON PHP


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

/*datos de conexión**/
$db_host="localhost";
$db_nombre="deOroVerde";
$db_usuario="root";
$db_contra="";

/*conexión*/
$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

/*manejo de errores*/
if(mysqli_connect_errno()==true){
    header('Location: error_conexion.php');
    exit();
}

mysqli_set_charset($conexion, "utf8");



/*restricción de tamaño (2MB) y tipo de archivo*/
if($tamaño_archivo<=2097152 && ($tipo_archivo=="image/jpeg" || $tipo_archivo=="image/jpg" || $tipo_archivo=="image/png")){
    if(is_uploaded_file($archivo["tmp_name"])){
        /*crear una cuenta ftp en HOSTINGER y rellenar los siguientes campos*/
        $host="ftp.szmblog.es";
        $puerto=21;
        $usuario="u811732966.Sonia";
        $clave="20012510Sonia*";
        $guardar_en="/";
        
        //conectar con el Servidor
        $conexion_server=@ftp_connect($host,$puerto);
        if($conexion_server){
            if(@ftp_login($conexion_server,$usuario,$clave)){
                //indicar el directorio donde se guardará
                if(@ftp_chdir($conexion_server,$guardar_en)){
                    //subida del archivo por FTP
                    if(@ftp_put($conexion_server,$nombre_archivo,$archivo["tmp_name"],FTP_BINARY)){
                        
                    $sql="INSERT INTO `pedido_form1`(`Nombre`, `Email`, `Imagen`, `Formato`, `Cantidad`) VALUES ('$nombre', '$email', '$nombre_archivo', '$formato', $cantidad)";

                    $result=mysqli_query($conexion, $sql);

                    /*Éxito o fallo en el envío del formulario*/
                    if($result==false){
                        header('Location: subida_error.php');
                    }else{
                        header('Location: subida_exito.php');
                    }
                    }
                }
                ftp_close($conexion);
            }
        }
    }else{
        header('Location: subida_error.php');
    }
}

//Cerrar la conexión con la BBDD:
mysqli_close($conexion);

?>