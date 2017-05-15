<?php
include 'dbNBA.php';
$borrar = new dbNBA();
$borrar->borrarEquipo($_GET['nombre']);
echo "El equipo ".$_GET['nombre']." se ha borrado de la DB";
?>
