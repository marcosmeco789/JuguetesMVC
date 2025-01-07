<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de los juguetes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <?php if (isset($mensaje)) { echo $mensaje; } ?>
        <h1 class="text-center mb-4">Listado de los juguetes</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Proveedor</th>
                    <th>Descuento</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($datos) && count($datos) > 0) {
                    for ($i = 0; $i < count($datos); $i++) {
                ?>
                        <tr>
                            <td><?php echo $datos[$i]['nombre']; ?></td>
                            <td><?php echo $datos[$i]['precio']."€"; ?></td>
                            <td><?php echo $datos[$i]['proveedor']; ?></td>
                            <td><?php echo $datos[$i]['descuento']."%"; ?></td>
                            <td><img src="<?php echo $datos[$i]['imagen'];?>" alt="" class="img-thumbnail" style="max-width: 100px; max-height: 100px;"></td>
                            <td><a href="../controlador/editar.php?id=<?php echo $datos[$i]['id']; ?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="../controlador/borrar.php?id=<?php echo $datos[$i]['id']; ?>" class="btn btn-danger">Borrar</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No hay juguetes.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-success">Volver a la pagina principal</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>