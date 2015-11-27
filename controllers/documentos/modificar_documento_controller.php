<?php
session_start();

$contenido = 'documentos/buscador';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>