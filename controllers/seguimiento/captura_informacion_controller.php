<?php
session_start();

$contenido = 'seguimiento/captura';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>