<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de los juguetes</title>
</head>

<body>
    <h1>Listado de los juguetes</h1>
    <table border="" cellpadding="10" cellspacing="0" style="width: 40%;">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Proveedor</th>
                <th>Descuento</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        <tbody>
            <?php
            if (is_array($datos) && count($datos) > 0) {
                for ($i = 0; $i < count($datos); $i++) {
            ?>
                    <tr>
                        <td><?php echo $datos[$i]['nombre']; ?></td>
                        <td><?php echo $datos[$i]['precio']; ?></td>
                        <td><?php echo $datos[$i]['proveedor']; ?></td>
                        <td><?php echo $datos[$i]['descuento']."%"; ?></td>

                        <td><img src="<?php echo $datos[$i]['imagen'];?>" alt="" style="max-width: 100px; max-height: 100px;"></td>
                        <td><?php echo "<a href=\"../controlador/editar.php?id={$datos[$i]['id']}\">Editar</a>"?></td>
                        <td><?php echo "<a href=\"../controlador/borrar.php?id={$datos[$i]['id']}\">Borrar</a>"?></td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6'>No hay juguetes.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="../index.php" style="color: green;">Volver a la pagina principal</a>
</body>
</html>