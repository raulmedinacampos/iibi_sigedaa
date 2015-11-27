<?php
session_start();

$contenido = 'bandejas/contenido_expedientes';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>