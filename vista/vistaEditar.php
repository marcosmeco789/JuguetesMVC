<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <h1>Editar juguete</h1>
    <form action="../controlador/actualizar.php" method="post">
        <?php
        for ($i = 0; $i < count($datos); $i++) {
            ?>
            <input type="hidden" name="id" value="<?php echo $datos[$i]['id']; ?>">
            <label for="">Nombre: </label><input type="text" name="nombre" id="" value="<?php echo $datos[$i]['nombre']; ?>">
            <br>
            <br>
            <label for="">Precio: </label><input type="text" name="precio" id="" value="<?php echo $datos[$i]['precio']; ?>">
            <br>
            <br>
            <label for="">Proveedor: </label><input type="text" name="proveedor" id="" value="<?php echo $datos[$i]['proveedor']; ?>">
            <br>
            <br>
            <label for="">Descuento: </label><input type="text" name="descuento" id="" value="<?php echo $datos[$i]['descuento']; ?>">
            <br>
            <br>
            <label for="">Imagen: </label><input type="text" name="imagen" id="" value="<?php echo $datos[$i]['imagen']; ?>">
            <br>
            <br>

            <input type="submit" value="Actualizar"> 
            <?php
        }
        ?>
    </form>
</body>

</html>