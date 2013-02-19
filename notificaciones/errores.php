<?php
//FUNCIONES

function mostrar_mensaje_error($titulo,$descripcion,$numero="",$enlace="")
{
	$mensaje="<table width='400' border='1' align='center' cellspacing='0'>\n";
	$mensaje.="<td background='../images/pie.jpg'>\n";
	$mensaje.="<font color='black' size='2' face='Arial'><strong> Error". $numero."</strong>: $titulo";
	$mensaje.="</td></tr>\n";
	$mensaje.="<tr><td>\n";
	$mensaje.="<font color='red' size='2' face='Arial'>$descripcion \n"."<br>"."<center><img src ='../images/error.png'></img></center>" ;
	if ($enlace!="")
		$mensaje.="<div align='center'>$enlace</div> \n";
	$mensaje.="</td></tr>\n";
	$mensaje.="</table>\n";	
	return $mensaje;
}
?>
