<?php 
session_start();
?>

<?php if (!empty($_SESSION['abministrador_clave'])): ?>

<!DOCTYPE html>
<html>
<head>
	<title>OFERTAS DE SEMILLAS</title>
</head>
<body>

<?php
       include("conexion.php");

       $clave = $_REQUEST['clave'];

       $query = "SELECT * FROM ofertas_semana_perfumeria where clave = $clave";
       $resultado = $conexion->query($query);
       $row=$resultado->fetch_assoc();
		?>
<center>
	<form action="modificarperfumeria_proceso.php?clave=<?php echo $row['clave']; ?>" method="POST" enctype="multipart/form-data">
		
		<input type="file" name="imagen" img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"><br><br>
		<input type="text" name="nombre" placeholder="nombre..." value="<?php echo $row['nombre']; ?>"/><br><br>
		<img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
		<input type="text" name="precio" placeholder="precio..." value="<?php echo $row['precio']; ?>"/><br><br>
		<input type="text" name="descripcion" placeholder="descripcion.." value="<?php echo $row['descripcion']; ?>" /><br><br>
		<input type="submit" value="aceptar">
	</form>
</center>
</body>
</html>


<?php else: echo "<script>location.href='administrador.php';</script>";
die();?>

<?php endif; ?>