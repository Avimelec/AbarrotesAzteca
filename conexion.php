<?php
$conexion = new mysqli("localhost","root","","id18111518_abarrotes_azteca");//conección con la BD

if($conexion){//codiciones respecto a la conección a la BD
	echo " ";
}
else{
	echo "CONECCIÓN FALLIDA A LA BD";
}
?>