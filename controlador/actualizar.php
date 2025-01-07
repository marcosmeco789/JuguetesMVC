<?php 

require_once "../modelo/modelo.php";

$juguete = new Juguete;

if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['proveedor']) && isset($_POST['descuento']) && !empty($_POST['imagen'])) {
    if (is_numeric($_POST['precio']) && is_numeric($_POST['descuento'])) {
        $resultado = $juguete->actualizarJuguete($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['proveedor'], $_POST['descuento'], $_POST['imagen']);

        if ($resultado) {
            $mensaje = "<div class='alert alert-success text-center'>Juguete actualizado correctamente</div>";
        } else {
            $mensaje = "<div class='alert alert-danger text-center'>Error al actualizar el juguete</div>";
        }
    } else {
        $mensaje = "<div class='alert alert-danger text-center'>El precio y el descuento deben ser numéricos</div>";
    }
} else {
    $mensaje = "<div class='alert alert-danger text-center'>Error al actualizar el juguete</div>";
}

$datos = $juguete->getJuguetes();
require_once "../vista/vista.php";



?>