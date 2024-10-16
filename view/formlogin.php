
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../applications/form.css">
    <title>Login</title>
</head>
<div class="login-box">
    <img src="../image/logo.png" class="avatar" alt="Avatar Image">
    <h1>Login</h1>
    <?php
    include("../model/Conexion.php");
    ?>
 
    <form action="../controller/controllogin.php" method="POST">
    
      <!-- USUARIO -->
      <br>
      <label for="correo">Correo</label>
      <input type="email" placeholder="Ingrese su Correo" name="txtcorreo" required minlength="2" maxlength="30" required><br><br>
      <!-- CONTRASEÑA -->
      <label for="Contraseña">Contraseña</label>
      <input type="password" placeholder="Ingrese su Contraseña" name="txtcontra" required minlength="2" maxlength="30" required><br><br>

      <input type="submit" value="Log In">

    </form>
  </div>
</html>