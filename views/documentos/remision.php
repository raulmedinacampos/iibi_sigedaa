<p><strong>Documentos recibidos sin turnar</strong></p>
<p><strong>Área(s) para turno:</strong></p>
<?php
echo form_open();

echo '<div class="row col-sm-offset-2">';
$attr = array(
		'id' => 'chk',
		'name' => 'chk'
);
echo '<div class="checkbox col-sm-12">';
echo form_label(form_checkbox($attr).'Secretaría', '', array('class' => 'col-sm-5'));

echo form_label(form_checkbox($attr).'Apoyo');
echo '</div>';

echo '<div class="checkbox col-sm-12">';
echo form_label(form_checkbox($attr).'Bienes y suministros', '', array('class' => 'col-sm-5'));

echo form_label(form_checkbox($attr).'Apoyo');
echo '</div>';

echo '<div class="checkbox col-sm-12">';
echo form_label(form_checkbox($attr).'Personal', '', array('class' => 'col-sm-5'));

echo form_label(form_checkbox($attr).'Apoyo');
echo '</div>';

echo '<div class="checkbox col-sm-12">';
echo form_label(form_checkbox($attr).'Presupuesto', '', array('class' => 'col-sm-5'));

echo form_label(form_checkbox($attr).'Apoyo');
echo '</div>';

echo '<div class="checkbox col-sm-12">';
echo form_label(form_checkbox($attr).'Servicios Grales', '', array('class' => 'col-sm-5'));

echo form_label(form_checkbox($attr).'Apoyo');
echo '</div>';

echo '</div>';
echo form_close();
?>