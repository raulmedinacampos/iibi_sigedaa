<h4>Escriba los datos del nuevo trabajador</h4>

<?php
$attr = array (
		'id' => 'formTrabajador',
		'name' => 'formTrabajador',
		'class' => 'form-horizontal' 
);

echo form_open(base_url(), $attr);
?>

<div class="panel panel-primary">
	<div class="panel-heading">Datos personales</div>
	<div class="panel-body">
		<div class="form-group">
			<?php
			echo form_label('Grado', '', array('class' => 'col-sm-2 control-label'));
			$opt = array(
					'' => 'Seleccione'
			);
			?>
			<div class="col-sm-2"><?php echo form_dropdown('grado', $opt, '', 'id="grado" class="form-control"'); ?></div>
			
			<?php
			echo form_label('Nombre(s)', '', array('class' => 'col-sm-1 col-sm-offset-3 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);
			?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			echo form_label('Apellido paterno', '', array('class' => 'col-sm-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
			
			<?php
			echo form_label('Apellido materno', '', array('class' => 'col-sm-2 col-sm-offset-1 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);
			?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			echo form_label('Teléfono', '', array('class' => 'col-sm-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);
			?>
			<div class="col-sm-2"><?php echo form_input($attr); ?></div>
			
			<?php
			echo form_label('Número celular', '', array('class' => 'col-sm-2 col-sm-offset-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-2"><?php echo form_input($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			echo form_label('Correo electrónico personal', '', array('class' => 'col-sm-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			echo form_label('RFC', '', array('class' => 'col-sm-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);
			?>
			<div class="col-sm-2"><?php echo form_input($attr); ?></div>
			
			<?php
			echo form_label('CURP', '', array('class' => 'col-sm-1 col-sm-offset-3 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-2"><?php echo form_input($attr); ?></div>
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">Datos laborales</div>
	<div class="panel-body">
		<div class="form-group">
			<?php
			echo form_label('Área IIBI', '', array('class' => 'col-sm-2 control-label'));
			$opt = array(
					'' => 'Seleccione'
			);
			?>
			<div class="col-sm-3"><?php echo form_dropdown('grado', $opt, '', 'id="grado" class="form-control"'); ?></div>
			
			<?php
			echo form_label('Puesto o categoría académica', '', array('class' => 'col-sm-2 col-sm-offset-1 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'rows' => '3',
					'class' => 'form-control',
					'readonly' => 'readonly',
					'value' => "Datos recuperados de la base según el área\nTeléfono\nCorreo electrónico"
			);?>
			<div class="col-sm-10 col-sm-offset-1"><?php echo form_textarea($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			echo form_label('Núm. trabajador', '', array('class' => 'col-sm-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
			
			<?php
			echo form_label('Núm. de cuenta', '', array('class' => 'col-sm-2 col-sm-offset-1 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
		</div>
		
		<div class="form-group">
			<?php
			echo form_label('Otro teléfono', '', array('class' => 'col-sm-2 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
			
			<?php
			echo form_label('Correo electrónico institucional', '', array('class' => 'col-sm-2 col-sm-offset-1 control-label'));
			$attr = array (
					'id' => 'grado',
					'name' => 'grado',
					'class' => 'form-control'
			);?>
			<div class="col-sm-3"><?php echo form_input($attr); ?></div>
		</div>
	</div>
</div>

<?php
$attr = array (
		'id' => 'btnGuardar',
		'name' => 'btnGuardar',
		'class' => 'btn btn-primary',
		'content' => 'Guardar'
);
?>
<div class="row">
	<div class="col-sm-12">
		<div class="pull-right"><?php echo form_button($attr); ?></div>
	</div>
</div>

<?php
echo form_close();
?>

<!-- Ventana modal para avisos -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>