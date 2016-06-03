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

Flight::route('/bandejas/abrir-expediente/', function() {
	require_once 'controllers/bandejas/abrir_expediente_controller.php';
});

Flight::route('/bandejas/documentos-recibidos/', function() {
	require_once 'controllers/bandejas/documentos_recibidos_controller.php';
});

Flight::route('/bandejas/adjuntar-a-expediente/', function() {
	require_once 'controllers/bandejas/adjuntar_expediente_controller.php';
});

Flight::route('/bandejas/documentos-atendidos/', function() {
	require_once 'controllers/bandejas/documentos_atendidos_controller.php';
});
/* Fin Bandejas de documentos */

/* Sección Documentos */
Flight::route('/listado-dependencias/', function() {
	require_once 'controllers/lista_dependencias_controller.php';
});

Flight::route('/documentos/captura/', function() {
	require_once 'controllers/documentos/captura_controller.php';
});

Flight::route('/documentos/guardarDoc/', function() {
	require_once 'controllers/documentos/guardarDoc_controller.php';
});

Flight::route('/documentos/asignar-folio-salida/', function() {
	require_once 'controllers/documentos/folio_salida_controller.php';
});

Flight::route('/documentos/adjuntar-documento-digital/', function() {
	require_once 'controllers/documentos/adjuntar_digital_controller.php';
});

Flight::route('/documentos/guardar-digital/', function() {
	require_once 'controllers/bandejas/guardaDigital_controller.php';
});
	

Flight::route('/documentos/adjuntar-documento-anexo/', function() {
	require_once 'controllers/documentos/documento_anexo_controller.php';
});

Flight::route('/documentos/remision-de-asuntos/', function() {
	require_once 'controllers/documentos/remision_asuntos_controller.php';
});

Flight::route('/documentos/reporte-entrega-recepcion/', function() {
	require_once 'controllers/documentos/reporte_entrega_recepcion_controller.php';
});

Flight::route('/documentos/modificar-documento/', function() {
	require_once 'controllers/documentos/modificar_documento_controller.php';
});

Flight::route('/documentos/lista-de-expedientes/', function() {
	require_once 'controllers/documentos/lista_expedientes_controller.php';
});

Flight::route('/documentos/detalle-documento/', function() {
	require_once 'controllers/documentos/detalle_documento_controller.php';
});
/* Fin Documentos*/

/* Sección Control y seguimiento */
Flight::route('/seguimiento/integracion-de-documentos/', function() {
	require_once 'controllers/seguimiento/integracion_documentos_controller.php';
});

Flight::route('/seguimiento/captura-de-informacion/', function() {
	require_once 'controllers/seguimiento/captura_informacion_controller.php';
});

Flight::route('/seguimiento/estado-del-tramite', function() {
	require_once 'controllers/seguimiento/estado_tramite_controller.php';
});

Flight::route('/seguimiento/cancelar-tramite', function() {
	require_once 'controllers/seguimiento/cancelar_tramite_controller.php';
});

Flight::route('/seguimiento/informacion-del-tramite', function() {
	require_once 'controllers/seguimiento/informacion_tramite_controller.php';
});
/* Fin Control y seguimientos*/

/* Sección Búsquedas */
Flight::route('/busquedas/por-indices/', function() {
	require_once 'controllers/busquedas/por_indices_controller.php';
});

Flight::route('/busquedas/por-expediente/', function() {
	require_once 'controllers/busquedas/por_expediente_controller.php';
});

Flight::route('/busquedas/lista-de-expedientes/', function() {
	require_once 'controllers/busquedas/lista_expedientes_controller.php';
});

Flight::route('/busquedas/contenido-expediente', function() {
	require_once 'controllers/busquedas/contenido_expediente_controller.php';
});
/* Fin Búsquedas */

/* Seccion Archivo */
Flight::route('/archivo/expedientes/', function() {
	require_once 'controllers/archivo/expedientes_controller.php';
});

Flight::route('/archivo/modificar-expediente/', function() {
	require_once 'controllers/archivo/modificar_expediente_controller.php';
});

Flight::route('/archivo/inventario-general/', function() {
	require_once 'controllers/archivo/inventario_general_controller.php';
});

Flight::route('/archivo/traslado-de-expedientes', function() {
	require_once 'controllers/archivo/traslado_expedientes_controller.php';
});
/* Fin Archivo */

/* Formatos */
Flight::route('/formatos/inventario-general', function() {
	require_once 'controllers/formatos/inventario_general_controller.php';
});

Flight::route('/formatos/inventario-de-transferencia-primaria', function() {
	require_once 'controllers/formatos/inventario_transferencia_primaria_controller.php';
});

Flight::route('/formatos/inventario-de-transferencia-secundaria', function() {
	require_once 'controllers/formatos/inventario_transferencia_secundaria_controller.php';
});

Flight::route('/formatos/inventario-de-baja-documental', function() {
	require_once 'controllers/formatos/inventario_baja_documental_controller.php';
});

Flight::route('/formatos/guia-simple-de-archivos', function() {
	require_once 'controllers/formatos/guia_simple_controller.php';
});
/* Fin formatos */

/* Sección Administrador */
Flight::route('/listado-empleados/', function() {
	require_once 'controllers/lista_empleados_controller.php';
});

Flight::route('/administrador/lista-de-usuarios', function() {
	require_once 'controllers/administrador/lista_usuarios_controller.php';
});
	
Flight::route('/administrador/alta-de-empleado', function() {
	require_once 'controllers/administrador/empleado_controller.php';
});

Flight::route('/administrador/guardar-empleado', function() {
	require_once 'controllers/administrador/guardarEmpleado_controller.php';
});

Flight::route('/administrador/alta-de-usuario', function() {
	require_once 'controllers/administrador/usuario_controller.php';
});

Flight::route('/administrador/guardar-usuario', function() {
	require_once 'controllers/administrador/guardarUsuario_controller.php';
});
/* Fin Administrador*/

Flight::route('/salir/', function() {
	session_start();
	
	$_SESSION = array();
	session_destroy();
	session_unset();
	
	Flight::redirect('/');
});

Flight::start();
?>
