<?php
    require("database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="https://.googleapifontss.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php require("Componentes/header.php");?>

    <main class="contenedor">
        <h3 class="centrar-texto">Contacto</h3>

        <div class="contacto-bg"></div>

        <form class="formulario">
            <div class="campo">
                <label class="campo__label" for="nombre">Nombre</label>
                <input 
                    class="campo__field"
                    type="text" 
                    placeholder="Tu Nombre" 
                    id="nombre"
                >
            </div>
            <div class="campo">
                <label class="campo__label" for="email">E-mail</label>
                <input 
                    class="campo__field"
                    type="email" 
                    placeholder="Tu E-mail" 
                    id="email"
                >
            </div>
            <div class="campo">
                <label class="campo__label" for="mensaje">Mensaje</label>
                <textarea 
                    class="campo__field campo__field--textarea"
                    id="mensaje"
                ></textarea>
            </div>

            <div class="campo">
                <input type="submit" value="Enviar" class="boton boton--primario">
            </div>
        </form>

        
    </main>

    <?php require("Componentes/footer.php"); ?>
    <script src="js/javascript.js"></script>
</body>
</html>