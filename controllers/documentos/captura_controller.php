<?php
session_start();

$contenido = 'documentos/captura';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>