<?php
session_start();

$contenido = 'documentos/listado_sin_atender';

$header['js'][] = 'adjuntar_documento';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>