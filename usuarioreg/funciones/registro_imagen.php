<?php
// formulario para subir la imagen del marcador
session_start();
include ("conexion2.php");
$guardar = mysql_query("SELECT cuenta FROM usuario WHERE correo = '".$_SESSION["usuario"]."';"); //creamos la consulta con INSERT INTO para insertar los valores recogidos 
$nombre = $_POST["nombreimg"];
$desc = $_POST["descimg"];
$carpeta = mysql_result($guardar,0);
$imagen=$_FILES['imageUpload'];//declaramos en variables lo recogido en el textbox atraves del metodo post
$error="";
$folder = "../images/".$carpeta."/"; // Carpeta a la que queremos subir los archivos
$folderbd = "images/".$carpeta."/"; // Carpeta para la base de datos
$maxlimit = 5000000; // Máximo límite de tamaño (en bits)
$allowed_ext = "jpg,jpeg,gif,png"; // Extensiones permitidas (usad una coma para separarlas)
$overwrite = "yes"; // Permitir sobreescritura? (yes/no)

$match = ""; 
$filesize = $_FILES['imageUpload']['size']; // toma el tamaño del archivo
$filename = $_FILES['imageUpload']['name']; // toma el nombre del archivo y lo pasa a minúsculas
$ext = pathinfo($_FILES['imageUpload']['name'], PATHINFO_EXTENSION);
$today = date("YmdHis");
$filenamefinal = $today.$filename;

if(!$filename || $filename=="" || $filesize<1){ // mira si no se ha seleccionado ningún archivo
   $error = "- Ningún archivo selecccionado para subir.<br>";
}elseif(file_exists($folder.$filename) && $overwrite=="no"){ // comprueba si el archivo existe ya
   $error = "- El archivo <b>$filename</b> ya existe<br>";
}

// comprobar tamaño de archivo
if($filesize < 1){ // el archivo está vacío
   $error .= "- Archivo vacío.<br>";
}elseif($filesize > $maxlimit){ // el archivo supera el máximo
   $error .= "- Este archivo supera el máximo tamaño permitido.<br>";
}

$file_ext = preg_split("/\./",$filename); // aquí no tengo claro lo que hace xD
$allowed_ext = preg_split("/\,/",$allowed_ext); // ídem, algo con las extensiones
foreach($allowed_ext as $ext){
   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo
}

// Extensión no permitida
if(!$match){
   $error = "- Este tipo de archivo no está permitido: $filename<br>";
}

if($error){
   print "Se ha producido el siguiente error al subir el archivo:<br> $error <br><a href='javascript:history.go(-1).php'>Regresar</a>"; // Muestra los errores
}else{
	   mkdir($folder);
       move_uploaded_file($_FILES['imageUpload']['tmp_name'], $folder.$filenamefinal); // Finalmente sube el archivo
      //print "<b>$filename</b> se ha subido correctamente!"; //el mensaje que saldra cuando el archivo este subido
	  $path_foto=$folderbd.$filenamefinal;
	$guardar = mysql_query("INSERT INTO imagenes (nombre_fecha, nombre_imagen, descripcion, url, rating, directorio, num_descargas) VALUES ('$filenamefinal','$nombre', '$desc', '$path_foto', '0', '$carpeta', '0');"); //creamos la consulta con INSERT INTO para insertar los valores recogidos 
	mysql_close($conexion);//cerramos la conexion
	header ('Location: ../index.php?num=1');
	}
?>