<?php
$header['css'][] = 'login';
$header['js'][] = 'login';
$header['menu'] = 'no';

$contenido = 'login';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'verifica' => (isset($_GET['verifica'])) ? $_GET['verifica'] : ""
);

Flight::render('template/layout', $data);
?>