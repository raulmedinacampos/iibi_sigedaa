<h2>Solicitud Única de Servicios</h2>
<?php
$attr = array (
		'id' => 'formSolicitud',
		'name' => 'formSolicitud',
		'class' => 'form-horizontal' 
);

echo form_open(base_url(), $attr);
?>
<div class="form-group">
	<?php
	echo form_label('Área solicitante', '', array('class' => 'col-sm-2'));
	$attr = array (
			'id' => 'area_solicitante',
			'name' => 'area_solicitante',
			'class' => 'form-control',
			'readonly' => 'readonly',
			'value' => 'Área solicitante'
	);
	?>
	<div class="col-sm-4">
	<?php echo form_input($attr); ?>
	</div>
	
	<?php
	echo form_label('Responsable del área solicitante', '', array('class' => 'col-sm-2'));
	$attr = array (
			'id' => 'area_solicitante',
			'name' => 'area_solicitante',
			'class' => 'form-control',
			'readonly' => 'readonly',
			'value' => 'Responsable del área solicitante'
	);
	?>
	<div class="col-sm-4">
	<?php echo form_input($attr); ?>
	</div>
</div>
<div class="form-group">
	<?php
	echo form_label('Nombre del usuario', '', array('class' => 'col-sm-2'));
	$attr = array (
			'id' => 'area_solicitante',
			'name' => 'area_solicitante',
			'class' => 'form-control' 
	);
	?>
	<div class="col-sm-4">
	<?php echo form_input($attr); ?>
	</div>
	
	<?php
	echo form_label('Fecha de solicitud', '', array('class' => 'col-sm-1'));
	$attr = array (
			'id' => 'area_solicitante',
			'name' => 'area_solicitante',
			'class' => 'form-control',
			'readonly' => 'readonly',
			'value' => date('d/m/Y')
	);
	?>
	<div class="col-sm-2">
	<?php echo form_input($attr); ?>
	</div>
	
	<?php
	echo form_label('Teléfono', '', array('class' => 'col-sm-1'));
	$attr = array (
			'id' => 'area_solicitante',
			'name' => 'area_solicitante',
			'class' => 'form-control',
			'readonly' => 'readonly',
			'value' => '5622 0000'
	);
	?>
	<div class="col-sm-2">
	<?php echo form_input($attr); ?>
	</div>
</div> <!-- Fin .form-group -->

<h4>Tipo de servicio:</h4>
<p class="nota">Nota: Es necesario elaborar una solcitud por cada servicio requerido</p>

<div class="row row-eq-height">
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Diversos</div>
			<div class="panel-body">
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Limpieza');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Servicio de bocadillos');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_diversos_otro',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Otro');
				?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Mensajería</div>
			<div class="panel-body">
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_21',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Con propio');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_22',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Correo ordinario');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_23',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Mensajería especializada');
				?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Reproducción y engargolado</div>
			<div class="panel-body">
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_41',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Fotocopiado');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_42',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Engargolado');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_43',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Enmicado');
				?>
				</div>
			</div>
		</div>
	</div>	
		
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Vigilancia para eventos especiales</div>
			<div class="panel-body">
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_7',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Vigilancia');
				?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- Fin .row -->

<div class="row row-eq-height">
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Mantenimiento a equipo y vehículos</div>
			<div class="panel-body">
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_31',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Mecánica');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_32',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Aire acondicionado');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_33',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Equipo de cómputo');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_34',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Reparación de equipo');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_35',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Mantenimiento a mobiliario');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_36',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Otro');
				?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">Servicio a inmueble</div>
			<div class="panel-body">
				<div class="col-sm-6">
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Albañilería');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Carpintería');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Herrerería');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Cerrajería');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Fumigación');
					?>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Electricidad');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Plomería');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Pintura');
					?>
					</div>
					
					<div class="radio">
					<?php
					$attr = array (
							'id' => 'rdb',
							'name' => 'rdb' 
					);
					echo form_label(form_radio($attr).'Otro');
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Transporte</div>
			<div class="panel-body">
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_51',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Local');
				?>
				</div>
	
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_52',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Foráneo');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_53',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Pasajeros');
				?>
				</div>
				
				<div class="radio">
				<?php
				$attr = array (
						'id' => 'rdb_54',
						'name' => 'rdb' 
				);
				echo form_label(form_radio($attr).'Carga');
				?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- Fin .row -->

<?php
echo form_label ( 'Escribir la descripción del servicio, los días, horario y lugar dónde se requerirá' );
$attr = array (
		'id' => 'detalles_servicio',
		'name' => 'detalles_servicio',
		'rows' => '3',
		'class' => 'form-control' 
);
echo form_textarea ( $attr );
?>

<br />

<?php
echo form_label ( 'Detalles del servicio' );
$attr = array (
		'id' => 'area_solicitante',
		'name' => 'area_solicitante',
		'rows' => '3',
		'class' => 'form-control' 
);
echo form_textarea ( $attr );
?>
<div id="instrucciones"></div>

<div class="row">
	<div class="col-sm-12 text-right">
	<?php
	$attr = array (
			'id' => 'btn_enviar',
			'name' => 'btn_enviar',
			'class' => 'btn btn-primary',
			'content' => 'Solicitar autorización del servicio'
	);
	echo form_button($attr);
	?>
	</div>
</div> <!-- Fin .row -->
<?php
echo form_close();
?>