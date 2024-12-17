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
                <td>Nombre:</td>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="apellidos" required></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="tel" name="telefono" pattern="[0-9]{9}" required></td>
            </tr>
            <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamento" required></td>
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