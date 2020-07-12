<main>
    <div class="w3-container w3-content  w3-padding-64" style="max-width:800px">
        <div class="w3-container w3-center w3-light-gray">
            <h2 class="w3-wide">Agregar Noticia</h2>
        </div>
        <form action="../model/guardarpublicacion.php" method="POST" enctype="multipart/form-data" class="w3-container">
            <div class="w3-row-padding">
                <div class="w3-half">
                    <label for="tipo" >Tipo de publicación</label>
                    <select name="tipo" class="w3-input w3-border w3-light-grey w3-animate-input" >
                        <option value="4">Noticia</option>
                    </select>
                </div>
                <div class="w3-half">
                    <label for="diario">Seleccionar diario</label>
                    <select name='id_diario' id='diario' onchange="updateEdiciones()" class="w3-input w3-border w3-light-grey w3-animate-input">
                    </select>
                </div>
            </div>
            <div class="w3-row-padding">
                <div class="w3-half">
                    <label for="edi">Seleccionar edición</label>
                    <select name='id_edicion' id='edi' onchange="updateSecciones()" class="w3-input w3-border w3-light-grey w3-animate-inputp">
                    </select>
                </div>
                <div class="w3-half">
                    <label for="sec">Seleccionar sección</label>
                    <select name='id_seccion' id='sec' class="w3-input w3-border w3-light-grey w3-animate-input ">
                    </select>
                </div>
            </div>
            <div class="w3-row-padding">
                <input type="text" name="titulo" placeholder="Ingrese un título" class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top" required>
                <textarea name="cuerpo" placeholder="Ingrese un cuerpo" rows="10" class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top" cols="50" required></textarea>
                <div class="w3-container w3-light-gray w3-margin-top">
                    <label for="imagen" class="w3-margin-right">Imagen</label>
                    <input type="file" name="imagen" id="imagen" class="w3-margin" onchange="loadFile(event)">
                    <div style="display: flex; justify-content: center; margin-bottom: 16px;">
                        <img id="output" style="max-width: 250px; max-height: 200px;"/>
                    </div>
                </div>
                <div class="w3-container w3-center">
                    <input type="submit" value="Publicar" class="w3-btn w3-blue-grey w3-margin-top">
                </div>

            </div>

        </form>
    </div>
</main>
<script>
    var opcionesCargadas = JSON.parse('<?php echo json_encode($opciones); ?>');
    window.onload = updateDiarios();
    function getDiarios(opciones) {
        var retorno = {};
        opciones.forEach((option) => {
            if (!retorno[option.id_diario]) {
                retorno[option.id_diario] = option.diario_nombre;
            }
        });
        return retorno;
    }

    function addOptionsDiarios(diarios) {
        var selectdiarios = document.getElementById("diario");
        Object.keys(diarios).forEach((id) => {
            selectdiarios.add(new Option(diarios[id], id, false, false));
        });
        if (selectdiarios[0]) selectdiarios[0].selected = true;
    }

    function getEdiciones(opciones) {
        var id_diario_seleccionado = document.getElementById("diario").value;
        var retorno = {};
        opciones.forEach((option) => {
            if (!retorno[option.id_edicion] && option.id_diario == id_diario_seleccionado) {
                if (option.descripcion) retorno[option.id_edicion] = option.descripcion;
                else retorno[option.id_edicion] = "";
            }
        });
        return retorno;
    }

    function addOptionsEdiciones(ediciones) {
        var selectEdiciones = document.getElementById("edi");
        while (selectEdiciones.length >= 1) {
            selectEdiciones.remove(0);
        }
        Object.keys(ediciones).forEach((id) => {
            selectEdiciones.add(new Option(ediciones[id], id, false, false));
        });
        if (selectEdiciones[0]) selectEdiciones[0].selected = true;
    }

    function getSecciones(opciones) {
        var id_diario_seleccionado = document.getElementById("diario").value;
        var id_edicion_seleccionada = document.getElementById("edi").value;
        var retorno = {};
        opciones.forEach((option) => {
            if (!retorno[option.id_seccion] && option.id_diario == id_diario_seleccionado
                && option.id_edicion == id_edicion_seleccionada) {
                retorno[option.id_seccion] = option.seccion_nombre;
            }
        });
        return retorno;
    }

    function addOptionsSecciones(ediciones) {
        var selectSecciones = document.getElementById("sec");
        while (selectSecciones.length >= 1) {
            selectSecciones.remove(0);
        }
        Object.keys(ediciones).forEach((id) => {
            selectSecciones.add(new Option(ediciones[id], id, false, false));
        });
        if (selectSecciones[0]) selectSecciones[0].selected = true;
    }

    function updateDiarios() {
        addOptionsDiarios(getDiarios(opcionesCargadas));
        updateEdiciones();
    }

    function updateEdiciones() {
        addOptionsEdiciones(getEdiciones(opcionesCargadas));
        updateSecciones();
    }

    function updateSecciones() {
        addOptionsSecciones(getSecciones(opcionesCargadas));
    }

    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };


</script>

