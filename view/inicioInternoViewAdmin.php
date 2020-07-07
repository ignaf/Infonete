<html>
<head></head>
<body>
<main>
    <div align="center">
        <h2 class="w3-wide w3-padding-16">Bienvenido Administrador</h2>

        <h3>¿Que puedo hacer actualmente?</h3>
        <div class="w3-container w3-padding-32 ">
            <a href="indexInterno?page=abmContenidistas" class="w3-button w3-round-xxlarge w3-blue-grey">Gestionar Usuarios</a>

            <a href="indexInterno?page=agregarNoticias" class="w3-button w3-round-xxlarge w3-blue-grey">Agregar Noticias</a>

            <a href="indexInterno?page=agregarPublicacion" class="w3-button w3-round-xxlarge w3-blue-grey">Agregar Diario/Sección/Edición</a>

            <a href="indexInterno?page=validarPublicacion" class="w3-button w3-round-xxlarge w3-blue-grey">Publicaciones Pendientes</a>

        </div>

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


