<?php session_start(); ?>


<header class="header">

        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Gamez<span class="logo__bold">Full</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                    <a href="contacto.php" class="navegacion__enlace">Contacto</a>
                    <a href="categorias.php" class="navegacion__enlace">categorias</a>
                    <?php if(isset($_SESSION['user_id'])) {?>
                        <a href="cerrar_sesion.php" class="navegacion__enlace">Cerrar Sesión</a>
                        <?php } else { ?>
                        <a href="iniciar_sesion.php" class="navegacion__enlace">Iniciar Sesión</a>    
                        <?php } ?>
                </nav>
            </div>
        </div>

        <div class="header__texto">
            <h2 class="no-margin">Juegos y programas</h2>
            <p class="no-margin">Los mejores juegos en un solo lugar</p>
        </div>

        <div class="header__nav">
            <nav class="navegacion">
                <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                <a href="contacto.php" class="navegacion__enlace">Contacto</a>
                <a href="categorias.php" class="navegacion__enlace">categorias</a>
            </nav>
        </div>
    </header>