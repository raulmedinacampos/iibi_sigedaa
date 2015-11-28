<?php
session_start();

$contenido = 'documentos/lista_expedientes';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>