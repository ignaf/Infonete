<main>
    <div align="center">
        <h2 class="w3-wide w3-padding-16">Bienvenido Contenidista</h2>

        <div>
            <h3 class="w3-wide">Noticias Recientes</h3>

            <div class="w3-row-padding w3-auto">
                <?php
                foreach ($noticias as $noticia){
                    $id=$noticia['id_noticia'];
                    echo "
        <div>
        <a href='indexInterno?page=noticia&id=$id'>
        <div class='w3-third'>
            <p>" . strtoupper($noticia['titulo']) . "</p>"
                        . "<img src=" .$noticia['url_imagen'] ." width=200 height=120 >".
                        "</div>  
        </a>
        </div>
        
        ";
                }?>
            </div>
        </div>

        <div>
            <h3 class="w3-wide">Noticias Pendientes</h3>

            <div class="w3-row-padding w3-auto">
            <?php
            foreach ($noti as $noticia){
                $id=$noticia['id_noticia'];
                echo "
        <a href='indexInterno?page=noticia&id=$id'>
        <div class='w3-third'>
            <p>" . strtoupper($noticia['titulo']) . "</p>"
                    . "<img src=" .$noticia['url_imagen'] ." width=200 height=120 >
                <img src='../images/exclamation-icon.png' style='font-size:24px; height: 24px; width: 24px;'/>".
                    "</div>
        </div>
        </a>
        ";
            }?>
        </div>
    </div>
</main>


