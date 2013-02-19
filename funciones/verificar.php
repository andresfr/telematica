<?php
	//Incluimos el archivo que permite la conexión al servidor y escoger la BD
include("conexion2.php");
	//Consultamos la BD para ver si el usuario y clave son correctos
$rst=mysql_query("SELECT * FROM usuario WHERE correo='". $_REQUEST["name"] ."' and clave='". $_REQUEST["clave"] ."';",$conexion);
	//Averiguamos cuántos registros devolvió la consulta anterior.
$numero_reg=mysql_num_rows($rst);
	//Si el número de registros es mayor que CERO, damos la bienvenida
if ($numero_reg>0)
{
	//Cerramos la conexión
	//mysql_close($conexion);
	session_start();
	$_SESSION["usuario"]=$_REQUEST["name"];
	header("Location:../usuarioreg/index.php?num=1");
	//include ("verificar_rol.php");
	exit();
} else { //Si no es mayor que CERO es porque los datos no son correctos
	//Mostramos el mensaje usando la funcion del archivo errores.php
	echo mostrar_mensaje_error("No se puede acceder al sistema","Usuario o clave no v&aacute;lidos. Por favor int&eacute;ntelo nuevamente.","","<a href='javascript:history.go(-1)'>Regresar</a>");
}
	//Cerramos la conexión
mysql_close($conexion);


?>