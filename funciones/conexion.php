<?php
//Aquí va la conexión a la BD
include("../notificaciones/errores.php");//incluimos la función errores para manejar los errores de una forma mas elegante
$conexion=@mysql_connect("localhost","root","root");//configuramos la conexion al servidor de la BD
if (mysql_error())//condicion para manejo de errores
{
	echo mostrar_mensaje_error("Imposible conectarse a servidor",mysql_error(),mysql_error(),"<a href='javascript:history.go(-1)'>Regresar</a>");//se muestra este error si no se pudo establecer la conexion con el servidor
	exit();
}
mysql_select_db("bd_telematica",$conexion); 	//seleccionamos la base de datos a la que nos queremos conectar
$rst=mysql_query("SELECT nombre,apellido FROM usuario WHERE idusuario='". $_SESSION["usuario"] ."';",$conexion);
if ($row = mysql_fetch_array($rst))
{
$nombre = $row["nombre"];
$apellido = $row["apellido"];
$nombre_completo= $nombre." " . $apellido ;
}
?>