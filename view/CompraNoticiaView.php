<?php
$id=$_GET['id'];
?>
<html>
<head></head>
<body>
<main>
    <div class="w3-container w3-light-gray">
        <h3 class="w3-wide w3-margin-left">Comprar Noticia</h3>
    </div>
    <form action="./model/guardarCompra.php?id_noticia=<?php echo "$id" ?>" method="POST" enctype="application/x-www-form-urlencoded" class="w3-container" style="width: 35%">
        <input type="tel" name="numerotarjeta" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="Ingrese el número de su tarjeta" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">
        <input type="text" name="nombretarjeta" placeholder="Nombre que figura en la tarjeta" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">
        <input type="number" name="mes_venc" placeholder="Mes de vencimiento de la tarjeta" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">
        <input type="number" name="año_venc" placeholder="Año de vencimiento de la tarjeta" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">
        <input type="number" name="codigo_seg" placeholder="Código de seguridad al dorso" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">
        <input type="submit" value="Comprar" class="w3-btn w3-blue-grey w3-margin-left w3-margin-top-5">
    </form>
</main>
</body>
</html>