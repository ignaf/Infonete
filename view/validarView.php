<html>
<script>
    function optionChange(sel){
        if(sel.value==1){
            tab1 = document.getElementById("diarios");
            tab1.style.display="";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="none";

            tab2 = document.getElementById("secciones");
            tab2.style.display="none";

            tab2 = document.getElementById("noticias");
            tab2.style.display="none";
        }else if(sel.value==2){
            tab1 = document.getElementById("diarios");
            tab1.style.display="none";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="";

            tab2 = document.getElementById("secciones");
            tab2.style.display="none";

            tab2 = document.getElementById("noticias");
            tab2.style.display="none";
        }else if(sel.value==3){
            tab1 = document.getElementById("diarios");
            tab1.style.display="none";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="none";

            tab2 = document.getElementById("secciones");
            tab2.style.display="";

            tab2 = document.getElementById("noticias");
            tab2.style.display="none";
        }else if(sel.value==4){
            tab1 = document.getElementById("diarios");
            tab1.style.display="none";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="none";

            tab2 = document.getElementById("secciones");
            tab2.style.display="none";

            tab2 = document.getElementById("noticias");
            tab2.style.display="";
        }
    }
</script>
<head></head>
<body>
<main class="w3-center">
    <div align="center">
        <br>
        <h2 class="w3-wide">Publicaciones Pendientes</h2>
        <div style="width: 30%">
            <select name="tipo" id="twek" onchange="optionChange(this)" class="w3-input w3-border w3-light-grey w3-animate-input">
                <option value="1">Diarios</option>
                <option value="2">Ediciones</option>
                <option value="3">Secciones</option>
                <option value="4">Noticias</option>
            </select>
        </div>


        <table class="w3-table w3-striped w3-bordered w3-centered" id="diarios" style="display: ;">
            <tr>
                <th>Título</th>
                <th> </th>
                <th> </th>
            </tr>

            <?php
            foreach ($diarios as $diario) {
                $id=$diario['id_diario'];
                echo "<tr>
                      <td>" . $diario['nombre'] . "</td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=0' class='w3-button w3-round-xlarge w3-blue-gray'>Aprobar</a></td> 
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=1' class='w3-button w3-round-xlarge w3-blue-gray'>Eliminar</a></td>          
                 </tr>";
            }
            ?>
        </table>

        <table class="w3-table w3-striped w3-bordered w3-centered" id="ediciones" style="display: none;">
            <tr>
                <th>Nombre</th>
                <th></th>
                <th></th>
            </tr>

            <?php
            foreach ($ediciones as $edicion) {
                $id=$edicion['id_edicion'];
                echo "<tr>
                      <td>" . $edicion['descripcion'] . "</td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=2' class='w3-button w3-round-xlarge w3-blue-gray'>Aprobar</a></td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=1' class='w3-button w3-round-xlarge w3-blue-gray'>Eliminar</a></td>  
                  </tr>";
            }
            ?>
        </table>
        <table class="w3-table w3-striped w3-bordered w3-centered" id="secciones" style="display: none;">
            <tr>
                <th>Nombre</th>
                <th></th>
                <th></th>
            </tr>

            <?php
            foreach ($secciones as $seccion) {
                $id=$seccion['id_seccion'];
                echo "<tr>
                      <td>" . $seccion['nombre'] . "</td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=3' class='w3-button w3-round-xlarge w3-blue-gray'>Aprobar</a></td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=1' class='w3-button w3-round-xlarge w3-blue-gray'>Eliminar</a></td>
                 </tr>";
            }
            ?>
        </table>

        <table class="w3-table w3-striped w3-bordered w3-centered" id="noticias" style="display: none;">
            <tr>
                <th>Título</th>
                <th>Contenido</th>
                <th>Imagen</th>
                <th></th>
                <th></th>
            </tr>

            <?php
            foreach ($noticias as $noticia) {
                $id=$noticia['id_noticia'];
                echo "<tr>
                      <td>" . $noticia['titulo'] . "</td>
                      <td>" . $noticia['cuerpo'] . "</td>
                      <td><img src=" .$noticia['url_imagen'] ." width=200 height=120 ></td>
                      <td><a href='../model/aprobarPublicacion?id=$id&tipo=4' class='w3-button w3-round-xlarge w3-blue-gray'>Aprobar</a></td>
                      <td><a href='../model/aprobarPublicacion?id=$id&tipo=1&el=1' class='w3-button w3-round-xlarge w3-blue-gray'>Eliminar</a></td>     
                 </tr>";
            }
            ?>
        </table>

    </div>
</main>

</body>
</html>

