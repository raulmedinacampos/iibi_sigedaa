<?php
session_start();

$contenido = 'administrador/usuarios/alta_usuario';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>