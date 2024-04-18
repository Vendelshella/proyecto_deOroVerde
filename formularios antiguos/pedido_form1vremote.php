<?php
//datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$archivo = $_FILES["archivo"];
$nombre_archivo = $_FILES["archivo"]["name"];
$tipo_archivo = $_FILES["archivo"]["type"];
$tamaño_archivo = $_FILES["archivo"]["size"];
$carpeta = "/proyecto_deOroVerde/uploads/";
$formato = $_POST["formato"];
$cantidad = $_POST["cantidad"];

//crear directorio para guardar los archivos
if (!is_dir($carpeta)) {
    mkdir("uploads");
}

//datos de conexión
$db_host = "127.0.0.1:3306";
$db_nombre = "u811732966_deOroVerde";
$db_usuario = "";
$db_contra = "";

try {
    $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre;charset=utf8", $db_usuario, $db_contra);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    header('Location: error_conexion.php');
    exit();
}


    //restricción de tamaño (2MB) y tipo de archivo
    if ($tamaño_archivo<=2097152 && ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png")) {

        if(is_uploaded_file($archivo["tmp_name"])){
            //crear una cuenta ftp y rellenar los siguientes campos
            $host="ftp.szmblog.es";
            $puerto=21;
            $usuario="";
            $clave="";
            $guardar_en="/";
            
            //conectar con el servidor
            $conexion_server=@ftp_connect($host,$puerto);
            
            if($conexion_server){
                if(@ftp_login($conexion_server,$usuario,$clave)){
                    
                    //indicar el directorio donde se guardará
                    if(@ftp_chdir($conexion_server,$guardar_en)){
                        
                        //subir del archivo por ftp
                        if(@ftp_put($conexion_server,$nombre_archivo,$archivo["tmp_name"],FTP_BINARY)){
                            
                            //sentencia preparada con marcadores de posición para evitar inyeccion SQL
                            $sql = "INSERT INTO `pedido_form1`(`Nombre`, `Email`, `Imagen`, `Formato`, `Cantidad`) VALUES (?, ?, ?, ?, ?)";

                            try {
                                $result = $conexion->prepare($sql);
                                $result->bindParam(1, $nombre);
                                $result->bindParam(2, $email);
                                $result->bindParam(3, $nombre_archivo);
                                $result->bindParam(4, $formato);
                                $result->bindParam(5, $cantidad);
                                $result->execute();

                                header('Location: subida_exito.php');
                            } catch (PDOException $e) {
                                header('Location: subida_error.php');
                            }
                        }
                    }
                    ftp_close($conexion_server);
                }
            }
    } else {
        header('Location: subida_error.php');
    }
    } else {
    header('Location: subida_error.php');
    }

?>
