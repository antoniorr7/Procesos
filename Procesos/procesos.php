<?php
include 'acciones.php';
include 'mostrarciudad.php';


switch ($valor) {
    case 'borrar':
        $crud = new Lugar();
        $ip = $_GET['ip'];
        $resultado = $crud->borrar($ip);
        header("refresh:0; url=borrarCiudad.php");
        break;

    default: // Cambiado "case default" a "default"
        $crud = new Lugar();
        $ip = $_GET['ip'];
        $lugar = $_GET['lugar'];
        $descripcion = $_GET['descripcion'];
        $resultado = $crud->modificar($ip, $lugar, $descripcion);
        header("refresh:0; url=modificarCiudad.php");
        break;
}

?>
