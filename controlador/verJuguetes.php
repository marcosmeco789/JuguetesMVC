<?php 
    require_once("../modelo/modelo.php");

    $juguete = new Juguete;
    $datos = $juguete->getJuguetes();

    require_once("../vista/vista.php");
?>