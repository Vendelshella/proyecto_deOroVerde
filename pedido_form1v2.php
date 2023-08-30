<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$archivo = $_FILES["archivo"];
$nombre_archivo = $_FILES["archivo"]["name"];
$tipo_archivo = $_FILES["archivo"]["type"];
$tamaño_archivo = $_FILES["archivo"]["size"];
$carpeta = "/proyecto_deOroVerde/uploads/";
$formato = $_POST["formato"];
$cantidad = $_POST["cantidad"];

if (!is_dir($carpeta)) {
    mkdir("uploads");
}

$db_host = "localhost";
$db_nombre = "deOroVerde";
$db_usuario = "root";
$db_contra = "";

try {
    $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre", $db_usuario, $db_contra);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    header('Location: error_conexion.php');
    exit();
}

if ($tamaño_archivo <= 2097152 && ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png")) {

    $ruta_destino = $_SERVER["DOCUMENT_ROOT"] . $carpeta;

    if (move_uploaded_file($archivo["tmp_name"], $ruta_destino . $nombre_archivo) == false) {
        header('Location: subida_error.php');
    }

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
} else {
    header('Location: subida_error.php');
}
?>
