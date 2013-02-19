<?php

$nombre=$_POST['name'];//declaramos en variables lo recogido en el textbox atraves del metodo post
$correo=$_POST['email'];//declaramos en variables lo recogido en el textbox atraves del metodo post
$clave=$_POST['clave'];//declaramos en variables lo recogido en el textbox atraves del metodo post
$cuenta = date("YmdHis").rand();
include ("conexion2.php");//incluimos la conexion
$guardar = mysql_query("INSERT INTO usuario (correo,nombre,clave,cuenta) VALUES ('$correo','$nombre','$clave','$cuenta');"); //creamos la consulta con INSERT INTO para insertar los valores recogidos 
mysql_close($conexion);//cerramos la conexion
include("../notificaciones/notificaciones.php");
echo mostrar_mensaje_modificaciones("Usuario registrado","El usuario ha sido creado correctamente.","","<a href='../index.php'>Regresar</a>");;//notificamos al usuario que se ha creado el usuario correctamente
  /* else{
      print "Error! Puede que el tamaño supere el máximo permitido por el servidor. Inténtelo de nuevo."; // Otro error
   }*/

?>
