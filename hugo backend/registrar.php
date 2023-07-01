<?php

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

    <h1>Registrate</h1>
    <span>o <a href="login.php">Inicia Sesión</a></span>

    <form action="registrar.php" method="POST">
        <input name="username" type="text" placeholder="Ingresa tu nombre de usuario">
        <input name="email" type="text" placeholder="Ingresa tu email">
        <input name="password" type="password" placeholder="Ingresa tu Contraseña">
        <input name="confirm_password" type="password" placeholder="Confirma tu Contraseña">
        <input type="submit" value="Crear Cuenta">
    </form>

    <?php
  require 'componentes/footer.php';
 ?> 

  </body>
</html>
