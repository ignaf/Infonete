<html>
<head></head>
<body>
<main>
    <div class="w3-container w3-light-gray">
        <h3 class="w3-wide w3-margin-left">Iniciar Sesión</h3>
    </div>
        <form action="./model/validar.php" method="post" enctype="application/x-www-form-urlencoded" class="w3-container" style="width: 35%">

            <input type="text" name="usuario" placeholder="Nombre de Usuario" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">

            <input type="password" name="clave" placeholder="Contraseña" required class="w3-input w3-border w3-light-grey w3-animate-input w3-margin" style="width: 70%">
            <input type="submit" value="Login" class="w3-btn w3-blue-grey w3-margin-left w3-margin-top-5">
        </form>
</main>
</body>
</html>

