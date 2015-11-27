<?php
session_start();

$contenido = 'documentos/folio_salida';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>