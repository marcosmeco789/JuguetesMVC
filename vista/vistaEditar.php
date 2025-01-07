<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar juguete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Editar juguete</h1>
        <form action="../controlador/actualizar.php" method="post">
            <?php
            for ($i = 0; $i < count($datos); $i++) {
            ?>
                <input type="hidden" name="id" value="<?php echo $datos[$i]['id']; ?>">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $datos[$i]['nombre']; ?>">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" class="form-control" name="precio" id="precio" value="<?php echo $datos[$i]['precio']; ?>">
                </div>
                <div class="mb-3">
                    <label for="proveedor" class="form-label">Proveedor:</label>
                    <input type="text" class="form-control" name="proveedor" id="proveedor" value="<?php echo $datos[$i]['proveedor']; ?>">
                </div>
                <div class="mb-3">
                    <label for="descuento" class="form-label">Descuento:</label>
                    <input type="text" class="form-control" name="descuento" id="descuento" value="<?php echo $datos[$i]['descuento']; ?>">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input type="text" class="form-control" name="imagen" id="imagen" value="<?php echo $datos[$i]['imagen']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            <?php
            }
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>