<?php
session_start();
include("conexion.php");

if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
 $sumador=0;
 $query = "SELECT * FROM abministrador";
       $resultado = $conexion->query($query);
        $contador=0;
       while ($row=$resultado->fetch_assoc()) {
     if ($row['contrasena']==$_POST['contrasena'] && $row['correo']==$_POST['correo']) {
      $contador=1;
     }
     $clave=$row['clave'];
      }
     $message = '';
 if ($contador > 0 ) {
          $_SESSION['abministrador_clave'] = $clave;
          echo "<script>location.href='mostrar.php';</script>";
die();
           // header('Location: mostrar.php'); 
     }else{
          $message="DATOS INCORRECTOS";
     }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="css/administrador.css">
</head>
<body>
     <a href="index.php">ir a inicio</a>
     <div class="container">
          <div class="form-box">
               <div class="button-box">
                    <div id="elegir"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Iniciar Sesión</button>
               </div>
               <?php if (!empty($message)) : ?>
                    <p><?= $message  ?>  </p>
                    <?php endif; ?>
               <form action="administrador.php" class="input-group" method="post">
                    <input type="text" name="correo" class="input-field" placeholder="Nombre de Administrador" required>
                    <input type="password" name="contrasena" class="input-field" placeholder="Contraseña" required>

<input type="checkbox" class="check-box"><span>Recordar Contraseña.</span>
                    <button type="submit" class="submit-btn" >Iniciar Sesión</button>
               </form>
          </div>
     </div>

     <script>
          var x = document.getElementById("login");
          var y = document.getElementById("registrar"); 
          var z = document.getElementById("elegir");  

          function login(){
               x.style.left = "50px";
               y.style.left = "450px";
               z.style.left = "0px";
          }

          function registrar(){
               x.style.left = "-400px";
               y.style.left = "50px";
               z.style.left = "120px";
          }

     </script>

</body>
</html>
