<html>

<head>
    <script>
        function opcionChange(sel){
            if(sel.value==2){
                divC = document.getElementById("diarios");
                divC.style.display="";

                divT= document.getElementById("ediciones");
                divT.style.display="none";
            }else if (sel.value==3){
                divC = document.getElementById("diarios");
                divC.style.display="";

                divT= document.getElementById("ediciones");
                divT.style.display="";
            }else if(sel.value==1){
                divC = document.getElementById("diarios");
                divC.style.display="none";

                divT= document.getElementById("ediciones");
                divT.style.display="none";
            }
        }
    </script>
</head>
<body>
<main>
    <div class="w3-container w3-content  w3-padding-64" style="max-width:800px">
        <div class="w3-container w3-center w3-light-gray">
            <h2 class="w3-wide">Nueva Publicación</h2>
        </div>

        <form action="./model/guardarpublicacion.php" method="POST" enctype="application/x-www-form-urlencoded" class="w3-container">

            <select name="tipo" id="tipo" onchange="opcionChange(this)" class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top">
                <option value="1">Diario</option>
                <option value="2">Edición</option>
                <option value="3">Sección</option>
            </select>
            <div id="diarios" style="display: none;" >
                <select name='id_diario' id='id_diario' class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top">
                    <?php
                    foreach ($diarios as $diario) {
                        echo "<option value='" . $diario['id_diario'] . "'>" . $diario['nombre'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div id="ediciones" style="display: none;">
                <select name='id_edicion' id='id_edicion' class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top">
                    <?php
                    foreach ($ediciones as $edicion) {
                        echo "<option value='" . $edicion['id_edicion'] . "'>" . $edicion['descripcion'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <input type="text" name="titulo" placeholder="Ingrese el título" class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top" required>

            <input type="submit" value="Publicar" class="w3-btn w3-blue-grey w3-margin-top">
        </form>
    </div>
</main>

</body>
</html>

