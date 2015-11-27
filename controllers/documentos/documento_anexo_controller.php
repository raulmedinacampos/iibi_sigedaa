<?php
session_start();

$contenido = 'documentos/listado_sin_atender';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>