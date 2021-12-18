<?php

$hostname_localhost="localhost";
$database_localhost="abarrotes_azteca";
$username_localhost="root";
$password_localhost="";

$json=array();

$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

$consulta="select * from ofertas_semana_perfumeria";
$resultado=mysqli_query($conexion, $consulta);

while($registro=mysqli_fetch_array($resultado)){
$result['clave']=$registro['clave'];
$result['imagen']=base64_encode($registro['imagen']);
$result['nombre']=$registro['nombre'];
$result['precio']=$registro['precio'];
$result['descripcion']=$registro['descripcion'];
$json['ofertas_semana_perfumeria'][]=$result;
}

mysqli_close($conexion);
echo json_encode($json);

?>