<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<main>
    <div align="center">
        <h2 class="w3-wide w3-padding-16">Bienvenido Administrador</h2>

        <!--<h3>¿Que puedo hacer actualmente?</h3>
        <div class="w3-container w3-padding-32 ">
            <a href="indexInterno?page=abmContenidistas" class="w3-button w3-round-xxlarge w3-blue-grey">Gestionar Usuarios</a>

            <a href="indexInterno?page=agregarNoticias" class="w3-button w3-round-xxlarge w3-blue-grey">Agregar Noticias</a>

            <a href="indexInterno?page=agregarPublicacion" class="w3-button w3-round-xxlarge w3-blue-grey">Agregar Diario/Sección/Edición</a>

            <a href="indexInterno?page=validarPublicacion" class="w3-button w3-round-xxlarge w3-blue-grey">Publicaciones Pendientes</a>

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

        foreach ($noti as $noticia){
            $id=$noticia['id_noticia'];
            echo "
        <a href='indexInterno?page=noticia&id=$id'>
        <div class='w3-third'>
            <p>" . strtoupper($noticia['titulo']) . "</p>"
                . "<img src=" .$noticia['url_imagen'] ." width=200 height=120 >
                <i style='font-size:24px' class='fas'>&#xf06a;</i>".
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


