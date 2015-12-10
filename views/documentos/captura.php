<form method="post" enctype="multipart/form-data" id="formSolicitud" name="formSolicitud" class="form-horizontal" action="">
	<div class="form-group">
		<label class="col-sm-2 control-label obligatorio">Tipo de documento</label>
		<div class="col-sm-4">
			<select id="tipo_documento" name="tipo_documento" class="form-control">
				<option value="">Seleccione</option>
			</select>
		</div>
		
		<label class="col-sm-2 control-label">Asunto</label>
		<div class="col-sm-4">
			<input id="asunto" name="asunto" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Núm. Oficio / Circular</label>
		<div class="col-sm-2">
			<input id="num_oficio" name="num_oficio" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Dirigido a</label>
		<div class="col-sm-4">
			<input id="dirigido_a" name="dirigido_a" class="form-control" />
		</div>
		
		<label class="col-sm-2 control-label">Cargo</label>
		<div class="col-sm-4">
			<input id="cargo" name="cargo" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Remitente</label>
		<div class="col-sm-4">
			<input id="remitente" name="remitente" class="form-control" />
		</div>
		
		<label class="col-sm-2 control-label">Cargo del remitente</label>
		<div class="col-sm-4">
			<input id="cargo_remitente" name="cargo_remitente" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Dependencia UNAM</label>
		<div class="col-sm-4">
			<input id="dependencia_unam" name="dependencia_unam" class="form-control" />
		</div>
		
		<div class="checkbox col-sm-2 control-label">
			<label><input type="checkbox" id="chk_otra_institucion" name="chk_otra_institucion" value="1" /> Otra institución</label>
		</div>
		<div class="col-sm-4">
			<input id="otra_institucion" name="otra_institucion" disabled="disabled" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Entidad subordinada emisora</label>
		<div class="col-sm-4">
			<input id="entidad_subordinada" name="entidad_subordinada" class="form-control" />
		</div>
		
		<label class="col-sm-2 control-label">C.C.P. <span class="glyphicon glyphicon-question-sign"></span></label>
		<div class="col-sm-4">
			<input id="ccp" name="ccp" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Información relevante</label>
		<div class="col-sm-10">
			<textarea rows="3" id="informacion_relevante" name="informacion_relevante" class="form-control"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Anexos <span class="glyphicon glyphicon-question-sign"></span></label>
		<div class="col-sm-10">
			<textarea rows="3" id="anexos" name="anexos" class="form-control"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Núm. de hojas incluyendo anexos</label>
		<div class="col-sm-1">
			<input id="num_hojas" name="num_hojas" class="form-control" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Para atender por</label>
		<div class="col-sm-4">
			<select id="atender_por" name="atender_por" class="form-control">
				<option value="">Seleccione</option>
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