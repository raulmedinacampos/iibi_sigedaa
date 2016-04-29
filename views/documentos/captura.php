<form method="post" enctype="multipart/form-data" id="formSolicitud" name="formSolicitud" class="form-horizontal" action="">
<h4>Captura de documentos recibidos</h4>
<p>Por favor, ingrese la información del documento recibido, considerando que los campos marcados con (*) son obligatorios.</p>	
	
	
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Tipo de documento</label>
		<div class="col-sm-5">
			<select id="tipo_documento" name="tipo_documento" class="form-control">
				<option value="">Seleccione</option>
				<?php
				while( $row = mysqli_fetch_array($tipo[1]) ) {
				?>
				<option value="<?php echo $row['idTipoDocumental']; ?>"><?php echo $row['tipoDocumental']; ?></option>
				<?php
				}
				?>
			</select>
		</div>
		
		<label class="col-sm-2 control-label">Núm. Oficio / Circular</label>
		<div class="col-sm-3">
			<input id="num_oficio" name="num_oficio" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Asunto</label>
		<div class="col-sm-10">
			<input id="asunto" name="asunto" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Dirigido a</label>
		<div class="col-sm-10">
			<input id="dirigido_a" name="dirigido_a" class="form-control" />
		</div>
		<!--		
 		<label class="col-sm-2 control-label obligatorio">Cargo</label>
		<div class="col-sm-4">
			<input id="cargo" name="cargo" class="form-control" />
		</div> -->
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Remitente</label>
		<div class="col-sm-10">
			<input id="remitente" name="remitente" class="form-control" />
		</div>
		<!--		
		<label class="col-sm-2 control-label">Cargo del remitente</label>
		<div class="col-sm-4">
			<input id="cargo_remitente" name="cargo_remitente" class="form-control" />
		</div>-->
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">*Dependencia remisora UNAM </label>
		<div class="col-sm-4">
			<input id="dependencia_unam" name="dependencia_unam" class="form-control typeahead" autocomplete="off" />
		</div>
		
		<div class="checkbox col-sm-2 control-label">
			<label><input type="checkbox" id="chk_otra_institucion" name="chk_otra_institucion" value="1" /> Otra institución</label>
		</div>
		<div class="col-sm-4">
			<input id="otra_institucion" name="otra_institucion" disabled="disabled" class="form-control" />
		</div>
	</div>
	<!--
	<div class="form-group">
		<label class="col-sm-2 control-label">Entidad subordinada emisora</label>
		<div class="col-sm-4">
			<input id="entidad_subordinada" name="entidad_subordinada" class="form-control typeahead" autocomplete="off" />
		</div>
		
		<label class="col-sm-2 control-label">C.C.P. <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" title="Capturar nombre, apellido y siglas"></span></label>
		<div class="col-sm-4">
			<input id="ccp" name="ccp" class="form-control" />
		</div>
	</div>-->
	
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Información relevante</label>
		<div class="col-sm-4">
			<textarea rows="3" id="informacion_relevante" name="informacion_relevante" class="form-control"></textarea>
		</div>

		<label class="col-sm-2 control-label">Anexos <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" title="Documentos con información soporte incluídos en el documento que se recibe"></span></label>
		<div class="col-sm-4">
			<textarea rows="3" id="anexos" name="anexos" class="form-control"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Núm. de hojas (incluyendo anexos)</label>
		<div class="col-sm-1">
			<input id="num_hojas" name="num_hojas" class="form-control" />
		</div>
		
		<div class="checkbox col-sm-3 control-label">
			<label><input type="checkbox" id="chk_no_original" name="chk_no_original" value="1"/> El documento no es original</label>
		</div>
		<label class="col-sm-2 control-label obligatorio">Para atender por</label>
		<div class="col-sm-4">
			<select id="atender_por" name="atender_por" class="form-control">
				<option value="">Seleccione</option>
				<?php
				while( $row = mysqli_fetch_array($areaAtencion[1]) ) {
				?>
				<option value="<?php echo $row['idArea']; ?>"><?php echo $row['area']; ?></option>
				<?php
				}
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group text-right">
		<button id="btn_cancelar" name="btn_cancelar" class="btn btn-default">Cancelar</button>
		<button id="btn_obtener" name="btn_obtener" class="btn btn-primary">Obtener número de folio</button>
	</div>
</form>

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