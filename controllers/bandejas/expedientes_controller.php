<?php
session_start();

$contenido = 'bandejas/expedientes';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>