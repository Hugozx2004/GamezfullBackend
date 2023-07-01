<?php

  if (isset($_SESSION['user_id'])) {
    header('Location: /index.php');
  }

  require 'database.php';
  $message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'] && !empty($_POST['confirm_password']))) {
        $verify = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $verify->bindParam(':email',$_POST['email']);
        $verify->execute();
        if($verify->rowCount() > 0){

        $message = 'Este usuario ya esta registrado';

        }else {
        
        if($_POST['password'] === $_POST['confirm_password']){

            $sql = "INSERT INTO usuarios (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $_POST['username']);
            $stmt->bindParam(':email', $_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password);
    
            if ($stmt->execute()) {
            $message = 'Nuevo Usuario Creado Satisfactoriamente';
            } else {
            $message = 'Lo sentimos, hubo un problema al crear tu cuenta';
            }
        } else {
            $message = 'La contraseña debe ser igual en los dos campos';
        }

        }
    
    }else {
        $message = 'Alguno de los campos está vacio';
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Registrate</title>
  </head>
  <body>

    <?php require 'componentes/header.php' ?>
    

    <?php if(!empty($message)): ?>
      <p> <?php echo $message; ?> </p>
    <?php endif; ?>

    <div class="container">
      <div class="text">
         Registrate
         <span>o <a href="iniciar_sesion.php">Inicia Sesión</a></span>
      </div>
      <form action="registrar.php" method="POST">
         <div class="form-row">
            <div class="input-data">
               <input name="username" type="text" required>
               <div class="underline"></div>
               <label>Nombre de usuario</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input name="email"  type="email" required>
               <div class="underline"></div>
               <label for="email">ingresa tu email</label>
            </div>
            <div class="input-data">
               <input name="password" type="password" required>
               <div class="underline"></div>
               <label for="">ingresa tu Contraseña</label>
            </div>
            <div class="input-data">
               <input name="confirm_password" type="password" required>
               <div class="underline"></div>
               <label for="">Confirma tu Contraseña</label>
            </div>
         </div>
         
         <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="Crear Cuenta">
               </div>
            </div>
      </form>
    </div>

    <?php
  require 'componentes/footer.php';
 ?> 

  </body>
</html>
