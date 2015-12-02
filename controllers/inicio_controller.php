<?php
/*comentario de Daf*/

$header['css'][] = 'login';
$header['menu'] = 'no';

$contenido = 'login';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'verifica' => (isset($_GET['verifica'])) ? $_GET['verifica'] : ""
);

Flight::render('template/layout', $data);
?>