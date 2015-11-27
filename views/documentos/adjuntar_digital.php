<script type="text/javascript" src="<?php echo base_url('js/bootstrap-filestyle.min.js'); ?>"></script>
<?php
echo form_open_multipart();
echo '<h4>Adjuntar documento digital al folio E/SAD/123/2015</h4>';

echo form_label ( 'Buscar' );
$attr = array (
		'id' => 'documento',
		'name' => 'documento',
		'class' => 'filestyle',
		'data-buttonText' => 'Examinar' 
);
echo form_upload ( $attr );
echo form_close ();
?>