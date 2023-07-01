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
    <title>Pagina web 2</title>
    
</head>

<body>
    
<?php require("Componentes/header.php");?>

    <main class="contenedor contenido-principal">
        <div class="blog">
            <h3>Catalago</h3>

            <article class="entrada">
                

                <div class="entrada__contenido">
                    <h4 class="no-margin">Recomendados</h4>
                    <div class="entrada__imagen">
                        <img src="img/articulo-2.jpg" alt="img/articulo1">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                    <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

            <article class="entrada">

                <div class="entrada__contenido">
                    <h4 class="no-margin">Mas visitados</h4>
                    <div class="entrada__imagen">
                            <img loading="lazy" src="img/articulo4.jpg" alt="imagen blog"> 
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                    <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>

            <article class="entrada">

                <div class="entrada__contenido">
                    <h4 class="no-margin">Mas premiados</h4>
                    <div class="entrada__imagen">
                        <img loading="lazy" src="img/articulo3.jpg" alt="imagen blog">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                    <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                </div>
            </article>
        </div>
        <aside class="sidebar">
            <h3>Emuladores</h3>

            <ul class="cursos no-padding">
                <li class="widget-curso">
                    <h4 class="no-margin">Nintendo</h4>
                    <p class="widget-curso__label">Yuzu</p>
                    <p class="widget-curso__label">Dolphin</p>
                    <p class="widget-curso__label">Nt64</p>
                    <p class="widget-curso__label">Cemu</p>
                    <a href="entrada.html" class="boton boton--secundario">Más Información</a>
                </li>

                <li class="widget-curso">
                    <h4 class="no-margin">Otros</h4>
                    <p class="widget-curso__label">Pcr3</p>
                    <p class="widget-curso__label">Psx 1</p>
                    <p class="widget-curso__label">Psx 2</p>
                    <a href="entrada.html" class="boton boton--secundario">Más Información</a>
                </li>
            </ul>
        </aside>
    </main>

    <?php require("Componentes/footer.php"); ?>

</body>

</html>