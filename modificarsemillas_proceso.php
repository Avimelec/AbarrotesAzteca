<?php 
session_start();
?>

<?php if (!empty($_SESSION['abministrador_clave'])): ?>

<?php
include("conexion.php");//se llama al archivo de conexion a la BD

$clave = $_REQUEST['clave'];

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$nombre = $_POST['nombre'];
$precio =  $_POST['precio'];
$descripcion =  $_POST['descripcion'];

$query = "UPDATE ofertas_semana_semillas SET imagen='$imagen', nombre='$nombre', precio='$precio', descripcion='$descripcion' where clave = '$clave'";

$resultado = $conexion->query($query);//almacena los datos en la BD

if($resultado){
	echo "<script>location.href='mostrar.php';</script>";
die();
}else{
	echo "ALGO FALLO";
}
?>

<?php else: echo "<script>location.href='administrador.php';</script>";
die();?>

<?php endif; ?>