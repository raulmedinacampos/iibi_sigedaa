<?php
session_start();

$contenido = 'bandejas/expedientes';

$expediente = seleccionarTodo("folio,descripcion,fechaCreacion","expediente","siglasArea='".$_SESSION['areaSiglas']."' order by fechaCreacion asc");


$data = array(
		'contenido' => $contenido,
		'expediente' => $expediente,
);

Flight::render('template/layout', $data);
?>