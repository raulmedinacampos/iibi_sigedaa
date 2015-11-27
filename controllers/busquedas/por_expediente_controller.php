<?php
session_start();

$contenido = 'reportes/expediente';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>