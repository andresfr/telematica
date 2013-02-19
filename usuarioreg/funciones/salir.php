<?php
//Codigo para salir
	session_start();
	session_destroy();
	include("../../notificaciones/notificaciones.php");
	echo mostrar_mensaje_modificaciones("Cerrando Sistema","El Sistema se ha cerrado correctamente.","","<a href='../../index.php'>Ir al inicio</a>");
?>