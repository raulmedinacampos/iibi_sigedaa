<?php
$header['unam'] = 'unam.png';
$header['dependencia'] = 'iibi.png';
$header['nombre_dependencia'] = 'IIBI';
$header['fondo'] = 'fondo.jpg';

$footer['texto'] = '<p>Hecho en México, todos los derechos reservados 2009.<br />Esta
		página puede ser reproducida con fines no lucrativos, siempre y cuando no
		se mutile, se cite la fuente completa y su dirección electrónica. De otra
		forma, requiere permiso previo por escrito de la institución. <a href="#">Créditos</a></p>
		<p><a href="#">Ubicación</a>: Circuito Interior s/n, Torre II de Humanidades, pisos 11, 12
		y 13, Ciudad Universitaria, C.P. 04510, Del. Coyoacán, México, D.F.<br />Sitio
		web administrado por: Instituto de Investigaciones Bibiotecológicas y de
		la Información. <a href="#">Informes</a></p>';

Flight::render('template/header', $header);
Flight::render($contenido);
Flight::render('template/footer', $footer);
?>