<?php

/*datos del formulario*/
$nombre=$_POST["nombre"];
$email=$_POST["email"];
    /*data archivo de imagen*/
$archivo=$_FILES["archivo"];
$nombre_archivo=$_FILES["imagen"]["name"];
$tipo_archivo=$_FILES["imagen"]["type"];
$tamaño_archivo=$_FILES["imagen"]["size"];
    /*carpeta servidor*/
$carpeta_destino=
/*COMO GUARDO LOS ARCHIVOS DE IMAGEN EN HOSTINGUER???*/
    /*fin archivo imagen*/
$formato=$_POST["formato"];
$cantidad=$_POST["cantidad"];

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

$sql="INSERT INTO `pedido_form1`(`ID`, `Nombre`, `Email`, `Imagen`, `Formato`, `Cantidad`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')"

$result=mysqli_query($conexion, $sql);

/*Éxito o fallo en el registro*/
if($result==false){
    echo "Error en el registro. Comprueba que todos los campos han sido rellenados y seleccionados";
    /*header('Location: mensaje_no_enviado.php');*/
}else{
    echo "Pedido enviado";
    /*header('Location: mensaje_enviado.php');*/
}

/* mandar al usuario a una página informándole que el mensaje ha sido enviado correctamente*/
//Cerrar la conexión con la BBDD:
mysqli_close($conexion);

?>