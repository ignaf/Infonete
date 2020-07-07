<html>
<head></head>
<body>
<main class="w3-center">
    <div align="center">
        <br>
        <h2 class="w3-wide">Usuarios</h2>
        <table class="w3-table w3-striped w3-bordered w3-centered">
            <tr>
                <th>nombre</th>
                <th>categoria</th>
                <th> </th>
                <th> </th>
            </tr>

            <?php
            foreach ($usuarios as $usuario) {
                $id=$usuario['id_usuario'];
                $id_grupo=$usuario['id_grupo'];
                echo "<tr>
                      <td>" . $usuario['nombre'] . "</td>
                      <td>" . $usuario['nombre_grupo'] . "</td>
                      <td><a href='../model/altabaja?id=$id&grupo=$id_grupo&el=0' class='w3-button w3-round-xlarge w3-blue-gray'>Cambiar categoria</a></td>
                      <td><a href='../model/altabaja?id=$id&grupo=$id_grupo&el=1' class='w3-button w3-round-xlarge w3-blue-gray'>Eliminar</a></td>
                      
                 </tr>";
            }
            ?>
        </table>
    </div>
</main>

</body>
</html>
