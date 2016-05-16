<?php
session_start();

$header['js'][] = 'listado_usuarios';

$contenido = 'administrador/listado';

$seleccion = seleccionarTodo("*","usuarioSUS u JOIN empleado e ON u.idEmpleado = e.idEmpleado","1");

$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'seleccion' => $seleccion
);

Flight::render('template/layout', $data);
?>