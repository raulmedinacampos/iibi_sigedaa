<?php
session_start();

$contenido = 'bandejas/documentos_recibidos';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>