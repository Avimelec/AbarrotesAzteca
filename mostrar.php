<?php 
session_start();
?>

<?php if (!empty($_SESSION['abministrador_clave'])): ?>

<!DOCTYPE html>
<html>
<head>
	<title>OFERTAS DEL DIA VIERNES 15/05/2020</title>
</head>
<body>
	<a href="logout.php">CERRAR SESSIÓN</a>
<center>
	<table border="2" bgcolor="#ec5600">
		<thead>
			<tr>
				<th colspan="7" > <a href="index2.php"><p style="color:#000a8f";>NUEVA OFERTA DEL DIA<p></a></th>
			</tr>
			<tr>
				<th><p style="color:#000a8f";>CLAVE<p></th>
				<th><p style="color:#000a8f";>IMAGEN<p></th>
				<th><p style="color:#000a8f";>NOMBRE<p></th>
				<th><p style="color:#000a8f";>PRECIO<p></th>
				<th><p style="color:#000a8f";>DESCRIPCIÓN<p></th>
				<th colspan="2"><p style="color:#000a8f";>OPCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php
       include("conexion.php");

       $query = "SELECT * FROM ofertas_diarias";
       $resultado = $conexion->query($query);
       while ($row=$resultado->fetch_assoc()) {
		?>
		<tr>
		<td><p style="color:#000a8f";><?php echo $row['clave']; ?></td>
	    <td><img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
	    <td><p style="color:#000a8f";><?php echo $row['nombre']; ?></td>
	    <td><p style="color:#000a8f"; ><?php echo $row['precio']; ?><p></td>
	    <td><p style="color:#000a8f";><?php echo $row['descripcion']; ?></td>
	    <th><a href="modificar.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>CORREGIR<p></a></th>
	    <th><a href="eliminar.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>ELIMINAR<p></a></th>
		</tr>
		<?php
        }
		?>	
		</tbody>
	</table>
	<br>
	<?php //abarrotes ?>
	<table border="2" bgcolor="#ec5600">
		<thead>
			<tr>
				<th colspan="7" > <a href="indexabarrotes.php"><p style="color:#000a8f";>NUEVA OFERTA DE ABARROTES<p></a></th>
			</tr>
			<tr>
				<th><p style="color:#000a8f";>CLAVE<p></th>
				<th><p style="color:#000a8f";>IMAGEN<p></th>
				<th><p style="color:#000a8f";>NOMBRE<p></th>
				<th><p style="color:#000a8f";>PRECIO<p></th>
				<th><p style="color:#000a8f";>DESCRIPCIÓN<p></th>
				<th colspan="2"><p style="color:#000a8f";>OPCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php
       include("conexion.php");

       $query = "SELECT * FROM ofertas_semana_abarrotes";
       $resultado = $conexion->query($query);
       while ($row=$resultado->fetch_assoc()) {
		?>
		<tr>
		<td><p style="color:#000a8f";><?php echo $row['clave']; ?></td>
	    <td><img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
	    <td><p style="color:#000a8f";><?php echo $row['nombre']; ?></td>
	    <td><p style="color:#000a8f"; ><?php echo $row['precio']; ?><p></td>
	    <td><p style="color:#000a8f";><?php echo $row['descripcion']; ?></td>
	    <th><a href="modificarabarrotes.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>CORREGIR<p></a></th>
	    <th><a href="eliminarabarrotes.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>ELIMINAR<p></a></th>
		</tr>
		<?php
        }
		?>	
		</tbody>
	</table>
	<br>
	<?php //semillas ?>
	<table border="2" bgcolor="#ec5600">
		<thead>
			<tr>
				<th colspan="7" > <a href="indexsemillas.php"><p style="color:#000a8f";>NUEVA OFERTA DE SEMILLAS<p></a></th>
			</tr>
			<tr>
				<th><p style="color:#000a8f";>CLAVE<p></th>
				<th><p style="color:#000a8f";>IMAGEN<p></th>
				<th><p style="color:#000a8f";>NOMBRE<p></th>
				<th><p style="color:#000a8f";>PRECIO<p></th>
				<th><p style="color:#000a8f";>DESCRIPCIÓN<p></th>
				<th colspan="2"><p style="color:#000a8f";>OPCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php
       include("conexion.php");

       $query = "SELECT * FROM ofertas_semana_semillas";
       $resultado = $conexion->query($query);
       while ($row=$resultado->fetch_assoc()) {
		?>
		<tr>
		<td><p style="color:#000a8f";><?php echo $row['clave']; ?></td>
	    <td><img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
	    <td><p style="color:#000a8f";><?php echo $row['nombre']; ?></td>
	    <td><p style="color:#000a8f"; ><?php echo $row['precio']; ?><p></td>
	    <td><p style="color:#000a8f";><?php echo $row['descripcion']; ?></td>
	    <th><a href="modificarsemillas.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>CORREGIR<p></a></th>
	    <th><a href="eliminarsemillas.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>ELIMINAR<p></a></th>
		</tr>
		<?php
        }
		?>	
		</tbody>
	</table>
	<br>
	
	<?php //salchichoneria ?>
	<table border="2" bgcolor="#ec5600">
		<thead>
			<tr>
				<th colspan="7" > <a href="indexsalchichoneria.php"><p style="color:#000a8f";>NUEVA OFERTA DE SALCHICHONERIA<p></a></th>
			</tr>
			<tr>
				<th><p style="color:#000a8f";>CLAVE<p></th>
				<th><p style="color:#000a8f";>IMAGEN<p></th>
				<th><p style="color:#000a8f";>NOMBRE<p></th>
				<th><p style="color:#000a8f";>PRECIO<p></th>
				<th><p style="color:#000a8f";>DESCRIPCIÓN<p></th>
				<th colspan="2"><p style="color:#000a8f";>OPCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php
       include("conexion.php");

       $query = "SELECT * FROM ofertas_semana_salchichoneria";
       $resultado = $conexion->query($query);
       while ($row=$resultado->fetch_assoc()) {
		?>
		<tr>
		<td><p style="color:#000a8f";><?php echo $row['clave']; ?></td>
	    <td><img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
	    <td><p style="color:#000a8f";><?php echo $row['nombre']; ?></td>
	    <td><p style="color:#000a8f"; ><?php echo $row['precio']; ?><p></td>
	    <td><p style="color:#000a8f";><?php echo $row['descripcion']; ?></td>
	    <th><a href="modificarsalchichoneria.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>CORREGIR<p></a></th>
	    <th><a href="eliminarsalchichoneria.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>ELIMINAR<p></a></th>
		</tr>
		<?php
        }
		?>	
		</tbody>
	</table>
	<br>
	<?php //perfumeria ?>
	<table border="2" bgcolor="#ec5600">
		<thead>
			<tr>
				<th colspan="7" > <a href="indexperfumeria.php"><p style="color:#000a8f";>NUEVA OFERTA DE PERFUMERIA<p></a></th>
			</tr>
			<tr>
				<th><p style="color:#000a8f";>CLAVE<p></th>
				<th><p style="color:#000a8f";>IMAGEN<p></th>
				<th><p style="color:#000a8f";>NOMBRE<p></th>
				<th><p style="color:#000a8f";>PRECIO<p></th>
				<th><p style="color:#000a8f";>DESCRIPCIÓN<p></th>
				<th colspan="2"><p style="color:#000a8f";>OPCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php
       include("conexion.php");

       $query = "SELECT * FROM ofertas_semana_perfumeria";
       $resultado = $conexion->query($query);
       while ($row=$resultado->fetch_assoc()) {
		?>
		<tr>
		<td><p style="color:#000a8f";><?php echo $row['clave']; ?></td>
	    <td><img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
	    <td><p style="color:#000a8f";><?php echo $row['nombre']; ?></td>
	    <td><p style="color:#000a8f"; ><?php echo $row['precio']; ?><p></td>
	    <td><p style="color:#000a8f";><?php echo $row['descripcion']; ?></td>
	    <th><a href="modificarperfumeria.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>CORREGIR<p></a></th>
	    <th><a href="eliminarperfumeria.php?clave=<?php echo $row['clave']; ?>"><p style="color:#000a8f";>ELIMINAR<p></a></th>
		</tr>
		<?php
        }
		?>	
		</tbody>
	</table>
</center>
</body>
</html>

<?php else: echo "<script>location.href='administrador.php';</script>";
die();?>

<?php endif; ?>