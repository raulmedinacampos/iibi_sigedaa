<?php
session_start();

$contenido = 'bandejas/expedientes';

$expediente = seleccionarTodo("folio,descripcion,fechaCreacion","expediente","siglasArea='".$_SESSION['siglasArea']."' order by fechaCreacion asc");


$data = array(
		'contenido' => $contenido,
		'expediente' => $expediente,
);

Flight::render('template/layout', $data);
?>