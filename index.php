<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir juguete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e9ecef;
        }
    </style>
   <?php 
if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['proveedor']) && isset($_POST['descuento']) && !empty($_POST['imagen'])) {
    if (is_numeric($_POST['precio']) && is_numeric($_POST['descuento'])) {
        require_once("modelo/modelo.php");
        $juguete = new Juguete;
        $resultado = $juguete->setJuguete($_POST['nombre'], $_POST['precio'], $_POST['proveedor'], $_POST['descuento'], $_POST['imagen']);
        if ($resultado) {
            echo "<div class='alert alert-success text-center'>Juguete añadido correctamente</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error al añadir el juguete</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center'>El precio y el descuento deben ser numéricos</div>";
    }
}
?>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Añadir juguete</h1>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" class="form-control" name="precio" id="precio" required>
            </div>
            <div class="mb-3">
                <label for="proveedor" class="form-label">Proveedor:</label>
                <input type="text" class="form-control" name="proveedor" id="proveedor" required>
            </div>
            <div class="mb-3">
                <label for="descuento" class="form-label">Descuento:</label>
                <input type="text" class="form-control" name="descuento" id="descuento" required>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="text" class="form-control" name="imagen" id="imagen" placeholder="Introduce el link de la imagen" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir juguete</button>
        </form>
        <hr>
        <div class="text-center mt-4">
            <a href="controlador/verJuguetes.php" class="btn btn-info">Mostrar juguetes</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>