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
                <select name='id_diario' id='diario' onchange="updateEdiciones()"  class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top">
                    <?php
                    foreach ($diarios as $diario) {
                        echo "<option value='" . $diario['id_diario'] . "'>" . $diario['nombre'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div id="ediciones" style="display: none;">
                <select name='id_edicion' id='edi' class="w3-input w3-border w3-light-grey w3-animate-input w3-margin-top">
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
<script>
    function opcionChange(sel) {
        if (sel.value == 2) {
            divC = document.getElementById("diarios");
            divC.style.display = "";

            divT = document.getElementById("ediciones");
            divT.style.display = "none";
        } else if (sel.value == 3) {
            divC = document.getElementById("diarios");
            divC.style.display = "";

            divT = document.getElementById("ediciones");
            divT.style.display = "";
        } else if (sel.value == 1) {
            divC = document.getElementById("diarios");
            divC.style.display = "none";

            divT = document.getElementById("ediciones");
            divT.style.display = "none";
        }
    }

    var opcionesCargadas = JSON.parse('<?php echo json_encode($opciones); ?>');

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
</script>

