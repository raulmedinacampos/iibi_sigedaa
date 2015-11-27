<h4>Elegir clave del cuadro de clasificación archivística</h4>
<?php
echo form_open();
echo form_label('Trámite');
$opt = array(
		''	=> 'Seleccione'
);
echo form_dropdown('', $opt, '', 'class="form-control"');

echo '<div class="row">';
echo '<div class="col-sm-12 text-right">';
$attr = array(
		'class'		=> 'btn btn-default btn-sm',
		'content'	=> 'Agregar otro'
);
echo form_button($attr);
echo '</div>';
echo '</div>';

echo '<div class="row">';
echo '<div class="col-sm-4">';
echo form_label('Sección');
$opt = array(
		''	=> 'Seleccione'
);
echo form_dropdown('', $opt, '', 'class="form-control"'); 
echo '</div>';

echo '<div class="col-sm-4">';
echo form_label('Serie');
$opt = array(
		''	=> 'Seleccione'
);
echo form_dropdown('', $opt, '', 'class="form-control"');
echo '</div>';

echo '<div class="col-sm-4">';
echo form_label('Subserie');
$opt = array(
		''	=> 'Seleccione'
);
echo form_dropdown('', $opt, '', 'class="form-control"');
echo '</div>';

echo '<div class="col-sm-12 text-right">';
echo '<a href="#">Ver cuadro de clasificación archivística</a>';
echo '</div>';
echo '</div>';

echo form_label('Descripción del expediente');
$attr = array(
		'class'			=> 'form-control',
		'rows'			=> 3,
		'placeholder'	=> 'Escriba palabras clave para identificar el expediente'
);
echo form_textarea($attr);

echo form_label('Ubicación física');
$attr = array(
		'class'	=> 'form-control',
		'rows'	=> 3
);
echo form_textarea($attr);

echo form_close();
?>