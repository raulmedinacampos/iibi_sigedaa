<h4>Para ser usuario del sistema es necesario que la persona esté registrada como trabajador de la dependencia</h4>

<?php
$attr = array (
		'id' => 'formUsuario',
		'name' => 'formUsuario',
		'class' => 'form-horizontal' 
);

echo form_open(base_url(), $attr);
?>

<div class="form-group">
	<div class="col-sm-8">
		<?php
		echo form_label('Escriba el nombre del trabajador que será dado de alta como usuario:');
		$attr = array (
				'id' => 'grado',
				'name' => 'grado',
				'class' => 'form-control typeahead'
		);
		echo form_input($attr);
		?>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-3">
		<?php
		echo form_label('Usuario');
		$attr = array (
				'id' => 'area_solicitante',
				'name' => 'area_solicitante',
				'class' => 'form-control' 
		);
		echo form_input($attr);
		?>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-3">
		<?php
		echo form_label('Grupo');
		$opt = array(
				'' => 'Seleccione'
		);
		echo form_dropdown('grupo', $opt, '', 'id="grupo" class="form-control"'); ?>
	</div>
</div>

<p class="nota">La contraseña se generará automáticamente y se enviará al correo institucional del usuario junto con su nombre de usuario.</p>

<?php
$attr = array (
		'id' => 'btnGuardar',
		'name' => 'btnGuardar',
		'class' => 'btn btn-primary',
		'content' => 'Guardar nuevo usuario'
);
?>
<div class="row">
	<div class="col-sm-12">
		<div class=""><?php echo form_button($attr); ?></div>
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