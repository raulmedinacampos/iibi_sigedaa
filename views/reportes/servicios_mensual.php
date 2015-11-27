<h2>Informe Mensual de Servicios</h2>
<?php
$i = 1;
$attr = array (
		'id' => 'formSolicitud',
		'name' => 'formSolicitud',
		'class' => 'form-horizontal' 
);

echo form_open(base_url(), $attr);
?>
<div class="form-group">
	<?php
	echo form_label('Mes', '', array('class' => 'col-sm-1'));
	$attr = array (
			'id' => 'area_solicitante',
			'name' => 'area_solicitante',
			'class' => 'form-control',
			'readonly' => 'readonly',
			'value' => 'Octubre'
	);
	?>
	<div class="col-sm-3">
	<?php echo form_input($attr); ?>
	</div>
</div>

<table class="table table-condensed table-striped">
	<tr>
		<th>Línea</th>
		<th>Tipo de servicio</th>
		<th class="text-center">No. servicios solicitados</th>
		<th class="text-center">No. servicios realizados</th>
		<th>Resumen / detalle o notas de apoyo</th>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Correspondencia</td>
		<td class="text-center">19</td>
		<td class="text-center">19</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Fotocopiado</td>
		<td class="text-center">4</td>
		<td class="text-center">4</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Engargolado</td>
		<td class="text-center">1</td>
		<td class="text-center">1</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Mantenimiento a equipo</td>
		<td class="text-center">5</td>
		<td class="text-center">5</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Mantenimiento a inmueble</td>
		<td class="text-center">1</td>
		<td class="text-center">1</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Mantenimiento a vehículos</td>
		<td class="text-center">2</td>
		<td class="text-center">2</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Transporte</td>
		<td class="text-center">2</td>
		<td class="text-center">2</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Limpieza</td>
		<td class="text-center">2</td>
		<td class="text-center">2</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td>Seguridad</td>
		<td class="text-center">0</td>
		<td class="text-center">0</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
</table>

<table class="table table-condensed table-striped">
	<tr>
		<th>Información</th>
		<th class="text-center">Totales p/indicadores</th>
		<th>Observaciones</th>
	</tr>
	<tr>
		<td>Servicios realizados</td>
		<td class="text-center">36</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td>Servicios solicitados</td>
		<td class="text-center">36</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td>Servicios programados realizados<br />(Mantenimiento, seguridad y limpieza)</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td>Servicios programados no realizados<br />(Mantenimiento, seguridad y limpieza)</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
</table>

<table class="table table-condensed table-striped">
	<tr>
		<th>Información</th>
		<th>Control de bienes</th>
		<th>Observaciones</th>
	</tr>
	<tr>
		<td>Entrada de bienes de activo fijo</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
	<tr>
		<td>Salida de bienes de activo fijo</td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
		<?php
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control'
		);
		?>
		<td><?php echo form_input($attr); ?></td>
	</tr>
</table>

<?php
echo form_label('Observaciones:');
$attr = array (
		'id' => 'area_solicitante',
		'name' => 'area_solicitante',
		'class' => 'form-control',
		'rows' => 3
);
echo form_textarea($attr);
?>
<br />
<div class="row">
	<div class="text-center col-sm-4">
		<p><strong>Elaboró</strong></p>
		<p>&nbsp;</p>
		<p>Alejandra Olvera Ortíz<br />
		<em>Responsable Servicios Generales</em></p>
	</div>
	<div class="text-center col-sm-offset-4 col-sm-4">
		<p><strong>Enterado</strong></p>
		<p>&nbsp;</p>
		<p>Lic. Amanda G. González Robles Sánchez<br />
		<em>Secretario o Jefe de Unidad Administrativa</em></p>
	</div>
</div>

<div class="text-center">
<?php
$attr = array (
		'id' => 'btnEnviar',
		'name' => 'btnEnviar',
		'class' => 'btn btn-primary',
		'content' => 'Enviar'
);
echo form_button($attr);
?>
</div>