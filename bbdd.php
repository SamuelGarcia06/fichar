<?php
$usuario = "root"; //en ste caso root por ser localhost
$password = "";  //contraseña por si tiene algun servicio de hosting 
$servidor = "localhost"; //localhost por lo del xampp
$basededatos = "fichar"; //nombre de la base de datos
//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect($servidor, $usuario, "") or die("Error con el servidor de la Base de datos");


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die("Error conexion al conectarse a la Base de datos");


//recuperar las variables
$nombre = $_REQUEST['usuario']; //name="nombre"
$hora_actual = date('H:i');
$hora_salida = date('17:45');
$dia_actual = date("Y/m/d");
//sentencia sql
$sql = "INSERT INTO registro VALUES ('$nombre','$dia_actual','$hora_actual','$hora_salida')";
//ejecutamos la centencia de sql
$ejecutar = mysqli_query($conexion, $sql);


//verificacion de la ejecucioon
if (!$ejecutar) {
    echo"huvo algun error"; //si algo sale mal mandanos este mensaje
} else {
    echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; //si todo sale bien mandanos este mensaje
}
?>