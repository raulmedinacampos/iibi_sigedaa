<?php
require 'flight/Flight.php';
require 'inc/consultas.inc.php';

Flight::route('/', function() {
	require_once 'controllers/inicio_controller.php';
});

Flight::route('POST /verifica/', function() {
	require_once 'controllers/verificaUsuario_controller.php';
});

/* Sección Bandejas de documentos */
Flight::route('/bandejas/expedientes/', function() {
	require_once 'controllers/bandejas/expedientes_controller.php';
});

Flight::route('/bandejas/contenido-expediente/', function() {
	require_once 'controllers/bandejas/contenido_expediente_controller.php';
});

Flight::route('/bandejas/documentos-recibidos/', function() {
	require_once 'controllers/bandejas/documentos_recibidos_controller.php';
});

Flight::route('/bandejas/documentos-atendidos/', function() {
	require_once 'controllers/bandejas/documentos_atendidos_controller.php';
});
/* Fin Bandejas de documentos */

/* Sección Documentos */
Flight::route('/documentos/captura/', function() {
	require_once 'controllers/documentos/captura_controller.php';
});

Flight::route('/documentos/asignar-folio-salida/', function() {
	require_once 'controllers/documentos/folio_salida_controller.php';
});

Flight::route('/documentos/adjuntar-documento-anexo/', function() {
	require_once 'controllers/documentos/documento_anexo_controller.php';
});

Flight::route('/documentos/reporte-entrega-recepcion/', function() {
	require_once 'controllers/documentos/reporte_entrega_recepcion_controller.php';
});

Flight::route('/documentos/modificar-documento/', function() {
	require_once 'controllers/documentos/modificar_documento_controller.php';
});
/* Fin Documentos*/

/* Sección Control y seguimiento */
Flight::route('/seguimiento/integracion-de-documentos/', function() {
	require_once 'controllers/seguimiento/integracion_documentos_controller.php';
});

Flight::route('/seguimiento/captura-de-informacion/', function() {
	require_once 'controllers/seguimiento/captura_informacion_controller.php';
});
/* Fin Control y seguimientos*/

/* Sección Búsquedas */
Flight::route('/busquedas/por-expediente/', function() {
	require_once 'controllers/busquedas/por_expediente_controller.php';
});
/* Fin Búsquedas */

Flight::route('/salir/', function() {
	session_start();
	
	$_SESSION = array();
	session_destroy();
	session_unset();
	
	Flight::redirect('/');
});

Flight::start();
?>
