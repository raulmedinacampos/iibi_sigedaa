<form method="post" enctype="multipart/form-data" id="formSolicitud" name="formSolicitud" class="form-horizontal" action="">
</form>
<?php
$attr = array (
		'id' => 'formSolicitud',
		'name' => 'formSolicitud',
		'class' => 'form-horizontal'
);
echo form_open_multipart(base_url(''), $attr);

echo '<div class="form-group">';
echo form_label('Tipo de documento', '', array('class' => 'col-sm-2 control-label obligatorio'));
$opt = array('' => 'Seleccione');
echo '<div class="col-sm-4">';
echo form_dropdown('tipo_documento', $opt, '', 'id="tipo_documento" class="form-control"');
echo '</div>';

echo form_label('Asunto', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'asunto',
		'name'	=> 'asunto',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Núm. Oficio / Circular', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'num_oficio',
		'name'	=> 'num_oficio',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-2">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Dirigido a', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'dirigido_a',
		'name'	=> 'dirigido_a',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';

echo form_label('Cargo', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'cargo',
		'name'	=> 'cargo',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Remitente', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'remitente',
		'name'	=> 'remitente',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';

echo form_label('Cargo del remitente', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'cargo_remitente',
		'name'	=> 'cargo_remitente',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Dependencia UNAM', '', array('class' => 'col-sm-2 control-label'));
$opt = array('' => 'Seleccione');
echo '<div class="col-sm-4">';
echo form_dropdown('tipo_documento', $opt, '', 'id="tipo_documento" class="form-control"');
echo '</div>';

$attr = array(
		'id'	=> 'chk_otra_institucion',
		'name'	=> 'chk_otra_institucion',
		'value'	=> 1
);
echo '<div class="checkbox col-sm-2 control-label">';
echo form_label(form_checkbox($attr).' Otra institución');
echo '</div>';
$attr = array(
		'id'		=> 'otra_institucion',
		'name'		=> 'otra_institucion',
		'class'		=> 'form-control',
		'disabled'	=> 'disabled'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Entidad subordinada emisora', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'entidad_subordinada',
		'name'	=> 'entidad_subordinada',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';

echo form_label('C.C.P.', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'ccp',
		'name'	=> 'ccp',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-4">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Información relevante', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'informacion_relevante',
		'name'	=> 'informacion_relevante',
		'rows'	=> 3,
		'class'	=> 'form-control'
);
echo '<div class="col-sm-10">';
echo form_textarea($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo '<div class="col-sm-4">';
echo form_label('Anexos');
echo '&nbsp;&nbsp;&nbsp;';

$attr = array(
		'id'		=> 'btn_anexos',
		'name'		=> 'btn_anexos',
		'class'		=> 'btn btn-primary btn-xs',
		'content'	=> 'Agregar anexos'
);
echo form_button($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Archivo adjunto', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'anexo',
		'name'	=> 'anexo',
		'class'	=> 'filestyle',
		'data-buttonText'	=> 'Adjuntar'
);
echo '<div class="col-sm-4">';
echo form_upload($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Núm. de hojas incluyendo anexos', '', array('class' => 'col-sm-2 control-label'));
$attr = array(
		'id'	=> 'num_hojas',
		'name'	=> 'num_hojas',
		'class'	=> 'form-control'
);
echo '<div class="col-sm-1">';
echo form_input($attr);
echo '</div>';
echo '</div>';

echo '<div class="form-group text-right">';
$attr = array(
		'id'		=> 'btn_cancelar',
		'name'		=> 'btn_cancelar',
		'class'		=> 'btn btn-default',
		'content'	=> 'Cancelar'
);
echo form_button($attr);

$attr = array(
		'id'		=> 'btn_actualizar',
		'name'		=> 'btn_actualizar',
		'class'		=> 'btn btn-primary',
		'content'	=> 'Actualizar'
);
echo form_button($attr);
echo '</div>';

echo form_close();
?>

<!-- Ventana modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>