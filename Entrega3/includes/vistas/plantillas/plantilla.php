<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title><?= $tituloPagina ?></title>
        <link rel="stylesheet" type="text/css" href="../../../CSS/estilo.css" />

    </head>

    <body>
        <div id="contenedor">
            <?php
                require(dirname(__DIR__) . '/comun/cabecera.php');
            ?>
            
            <main>
                <article>
                    <?= $contenidoPagina ?>
                </article>
            </main>
            
            <?php
                require(dirname(__DIR__) . '/comun/pie_pagina.php');
                require(dirname(__DIR__) . '/comun/aviso_legal.php');
            ?>
        </div>

    </body>

</html>