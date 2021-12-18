<?php 
session_start();
?>

<?php if (!empty($_SESSION['abministrador_clave'])): ?>

<!DOCTYPE html>
<html>
<head>
	<title>OFERTAS DEL DIA</title>
</head>
<body>
<center>
	<form action="guardar_proceso.php" method="POST" enctype="multipart/form-data">
		<input type="text"  name="clave" placeholder="clave..."><br><br>
		<input type="file" name="imagen"><br><br>
		<input type="text" name="nombre" placeholder="nombre..." ><br><br>
		<input type="text" name="precio" placeholder="precio..."><br><br>
		<input type="text" name="descripcion" placeholder="descripcion.."><br><br>
		<input type="submit" value="aceptar">
	</form>
</center>
</body>
</html>

<?php else: echo "<script>location.href='administrador.php';</script>";
die();?>

<?php endif; ?>