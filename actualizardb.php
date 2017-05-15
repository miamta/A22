<?php
// actualizar los equipos
include 'dbNBA.php';
$actualizar = new dbNBA();
$actualizar->actualizarEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
echo "El equipo ".$_POST['nombre']." ha sido actualizado";
?>
