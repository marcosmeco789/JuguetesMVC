<?php 

require_once "../modelo/modelo.php";

if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['proveedor']) && !empty($_POST['descuento']) && !empty($_POST['imagen'])) {

    $juguete = new Juguete;

    $resultado = $juguete->actualizarJuguete($_POST['id'],$_POST['nombre'],$_POST['precio'],$_POST['proveedor'],$_POST['descuento'],$_POST['imagen']);

    $datos = $juguete->getJuguetes();
    require_once "../vista/vista.php";
} else {
    echo "Error al eliminar el empleado";

}

?>