<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos del empleado</h1>
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
            <td><input type="submit" value="Crear empleado"></td>
        </tr>
    </table>
    </form>
    <hr>
    
    <hr>
    <a href="controlador/controlador.php">Mostrar listado de los empleados</a>

</body>
</html>
<?php 

?>