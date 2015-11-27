<?php
session_start();

$contenido = 'bandejas/documentos_atendidos';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>