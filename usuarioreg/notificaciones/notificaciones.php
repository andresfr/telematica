<?php
//FUNCIONES

function mostrar_mensaje_modificaciones($titulo,$descripcion,$numero="",$enlace="")
{
	$mensaje="<table width='400' border='1' align='center' cellspacing='0'>\n";
	$mensaje.="<td background='../images/pie.jpg'>\n";
	$mensaje.="<font color='black' size='2' face='Arial'><strong> Notificacion". $numero."</strong>: $titulo";
	$mensaje.="</td></tr>\n";
	$mensaje.="<tr><td>\n";
	$mensaje.="<font color='blue' size='2' face='Arial'>$descripcion \n"."<br>"."<center><img src ='../images/informacion.gif'></img></center>" ;
	if ($enlace!="")
		$mensaje.="<div align='center'>$enlace</div> \n";
	$mensaje.="</td></tr>\n";
	$mensaje.="</table>\n";	
	return $mensaje;
}
?>
