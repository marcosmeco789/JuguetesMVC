<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php 

        if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['proveedor']) && !empty($_POST['descuento']) && !empty($_POST['imagen'])) {

            require_once("modelo/modelo.php");

            $juguete = new Juguete;

            $resultado = $juguete->setJuguete($_POST['nombre'],$_POST['precio'],$_POST['proveedor'],$_POST['descuento'],$_POST['imagen']);

            if ($resultado) {
                echo "<h2>Juguete añadido correctamente</h2>";
            } else {
                echo "<h2>Error al añadir el juguete</h2>";
            }
        }
    
    ?>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <h1>Añadir juguete</h1>
    <hr>
    <form action="#" method="post">
    <table>
        <tr>
            <td>Nombre:</td><td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td>Precio:</td><td><input type="text" name="precio" required></td>
        </tr>
        <tr>
            <td>Proveedor:</td><td><input type="text" name="proveedor" required></td>
        </tr>
        <tr>
            <td>Descuento:</td><td><input type="text" name="descuento" required></td>
        </tr>
        <tr>
            <td>Imagen:</td><td><input type="text" name="imagen" placeholder="Introduce el link de la imagen" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Añadir juguete"></td>
        </tr>
    </table>
    </form>
    <hr>
    
    <hr>
    <a href="controlador/verJuguetes.php">Mostrar juguetes</a>

</body>
</html>
<?php 

?>