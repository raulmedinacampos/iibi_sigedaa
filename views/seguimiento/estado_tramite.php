<?php
$attr = array(
		'id' => 'formEstadoTramite',
		'name' => 'formEstadoTramite',
		'class' => 'form-horizontal'
);

echo form_open('', $attr);

echo '<div class="form-group">';
echo form_label('Núm. de expediente', '', array('class' => 'col-sm-4'));
echo '<div class="col-sm-8">IIBI - SAD - [D]fclave (12345) 2015</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Trámite', '', array('class' => 'col-sm-4'));
echo '<div class="col-sm-8">Nombre del trámite o servicio</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Duración estimada', '', array('class' => 'col-sm-4'));
echo '<div class="col-sm-8">Duración estimada en días hábiles</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Inicio', '', array('class' => 'col-sm-2'));
echo '<div class="col-sm-2">dd/mm/aa</div>';
echo form_label('Avance', '', array('class' => 'col-sm-2'));
echo '<div class="col-sm-2">avance %</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Etapa actual', '', array('class' => 'col-sm-4'));
echo '<div class="col-sm-8">Nombre de la etapa</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Responsable de la etapa', '', array('class' => 'col-sm-4'));
echo '<div class="col-sm-8">Persona y área responsable de la etapa</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Descripción', '', array('class' => 'col-sm-4'));
echo '<div class="col-sm-8">Descripción del expediente</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Observaciones sobre el avance del trámite', '', array('class' => 'col-sm-4'));
$attr = array(
		'id' => 'observaciones',
		'name' => 'observaciones',
		'class' => 'form-control',
		'rows' => 2
);
echo '<div class="col-sm-8">';
echo form_textarea($attr);
echo '</div>';
echo '</div>';
echo form_close();
?>