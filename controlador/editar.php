<?php 

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    require_once "../modelo/modelo.php";
    $juguete = new Juguete;
    $datos = $juguete->getJuguete($_GET['id']);
    require_once "../vista/vistaEditar.php";
} else {
    echo "Error al obtener el empleado";
}
?>