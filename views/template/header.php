<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sistema de Control de Gestión</title>
<!-- Hojas de estilo -->
<link href="/sigedaa/css/bootstrap.min.css" rel="stylesheet" />
<link href="/sigedaa/css/general.css" rel="stylesheet" />
		<?php
		if (isset ( $css )) {
			foreach ( $css as $val ) {
		?>
		<link href="<?php echo '/sigedaa/css/'.$val.'.css'; ?>" rel="stylesheet" />
		<?php
			}
		}
		?>
		
<!-- Script -->
<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
<script type="text/javascript" src="/sigedaa/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/sigedaa/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/sigedaa/js/bootstrap-filestyle.min.js"></script>
<script type="text/javascript" src="/sigedaa/js/jquery.validate.min.js"></script>
		<?php
		if (isset ( $js )) {
			foreach ( $js as $val ) {
				?>
		<script type="text/javascript" src="<?php echo '/sigedaa/js/'.$val.'.js'; ?>"></script>
		<?php
			}
		}
		?>
	</head>

<body>
	<div class="container">
		<header>
			<div class="logos">
				<img alt="" src="<?php echo '/sigedaa/images/'.$fondo; ?>" class="fondo-header" />
				<img alt="UNAM" src="<?php echo '/sigedaa/images/'.$unam; ?>" class="logo-unam" />
				<img alt="<?php echo $nombre_dependencia; ?>" src="<?php echo '/sigedaa/images/'.$dependencia; ?>" class="logo-dependencia" />
			</div>
			
			<?php
			if ( !isset($menu) ) {
			?>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse"
						id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Bandejas de documentos<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/sigedaa/bandejas/expedientes">Expedientes en trámite</a></li>
									<li class="dropdown-submenu"><a href="#">Documentos</a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="/sigedaa/bandejas/documentos-recibidos">Recibidos (por turno digital o
													capturados)</a></li>
											<li><a href="/sigedaa/bandejas/documentos-atendidos">Atendidos</a></li>
										</ul></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Documentos <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/sigedaa/documentos/captura">Captura recepción</a></li>
									<li><a href="#">Integración de documentos a un expediente</a></li>
									<li><a href="/sigedaa/documentos/asignar-folio-salida">Folios de salida</a></li>
									<li><a href="/sigedaa/documentos/adjuntar-documento-anexo">Adjuntar documento digital</a></li>
									<li class="dropdown-submenu"><a href="#">Remisión de asuntos</a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="#">Turno digital</a></li>
											<li><a href="/sigedaa/documentos/reporte-entrega-recepcion">Reporte entrega / recepción docs físicos</a></li>
										</ul></li>
									<li><a href="/sigedaa/documentos/modificar-documento">Modificar documento</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Control y seguimiento <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Estado de trámite</a></li>
									<li><a href="/sigedaa/seguimiento/integracion-de-documentos">Integración de documentos al expediente</a></li>
									<li><a href="#">Cancelación de trámite</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Archivo <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Expedientes</a></li>
									<li><a href="#">Inventario de documentos</a></li>
									<li><a href="#">Modificar expediente</a></li>
									<li><a href="#">Consolidación de expedientes</a></li>
									<li><a href="#">Traslado de expedientes</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Búsquedas <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/sigedaa/busquedas/por-indices">Por índices</a></li>
									<li><a href="/sigedaa/busquedas/por-expediente">Por expediente</a></li>
									<li><a href="/sigedaa/busquedas/por-documento">Por documento</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Reportes <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/sigedaa/reportes/indicadores">Indicadores de SGC</a></li>
									<li><a href="#">Estadísticas SADM</a></li>
									<li><a href="#">Estadísticas Director</a></li>
									<li><a href="#">Listado de circulares</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Administración <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Nombres y tipo documentales</a></li>
									<li><a href="#">Documentos en procedimientos</a></li>
									<li><a href="#">Procedimientos</a></li>
									<li><a href="#">Catálogo de servicios</a></li>
									<li><a href="#">Formatos de solicitudes</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Ayuda <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Cuadro general de<br />información archivística
									</a></li>
									<li><a href="#">Catálogo de servicios</a></li>
									<li><a href="#">Formatos de solicitudes</a></li>
									<li><a href="#">Manual de usuario</a></li>
									<li><a href="#">Gestión de cuenta</a></li>
									<li><a href="#">Acerca de</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
			<?php
			} // Menú
			?>
		</header>