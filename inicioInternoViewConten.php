<html>
<head></head>
<body>
<main>
    <div class="w3-bar w3-grey w3-card">
        <a href="indexInterno?page=agregarNoticias" class="w3-bar-item w3-button">Agregar Noticias</a>
        <a href="indexInterno?page=agregarPublicacion" class="w3-bar-item w3-button">Agregar Diario/Sección/Edición</a>
    </div>
    <div align="center">
        <h2 class="w3-wide w3-padding-16">Bienvenido Contenidista</h2>

       <!-- <h3>¿Que puedo hacer actualmente?</h3>
        <div class="w3-container w3-padding-32 ">
            <a href="indexInterno?page=agregarNoticias" class="w3-button w3-round-xxlarge w3-blue-grey">Agregar noticias</a>
            <a href="indexInterno?page=agregarPublicacion" class="w3-button w3-round-xxlarge w3-blue-grey">Agregar diario/seccion/edicion</a>
        </div>
-->

        <h3 class="w3-wide">Noticias Recientes</h3>

        <div class=\"w3-row-padding w3-auto\">
        <?php
        foreach ($noticias as $noticia){
            $id=$noticia['id_noticia'];
            echo "
        <a href='indexInterno?page=noticia&id=$id'>
        <div class='w3-third'>
            <p>" . strtoupper($noticia['titulo']) . "</p>"
                . "<img src=" .$noticia['url_imagen'] ." width=200 height=120 >".
                "</div>  
        </a>
        ";
        }
        ?>
    </div>

    </div>
</main>


</body>
</html>


