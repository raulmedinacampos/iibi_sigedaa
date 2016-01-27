<?php
session_start();

$header['js'][] = 'bootstrap3-typeahead.min';
$header['js'][] = 'alta_usuario';

$contenido = 'administrador/usuarios/alta_usuario';

$data = array(
		'header' => $header,
		'contenido' => $contenido
);

Flight::render('template/layout', $data);
?>