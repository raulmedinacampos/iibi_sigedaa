<?php
session_start();

$contenido = 'documentos/reporte_entrega_recepcion';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>