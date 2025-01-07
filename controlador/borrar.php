<?php 

require_once "../modelo/modelo.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    $juguete = new Juguete;
    $resultado = $juguete->eliminarJuguete($_GET['id']);
    $datos = $juguete->getJuguetes();
    require_once "../vista/vista.php";
} else {
    echo "Error al eliminar el empleado";
}

?>