<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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