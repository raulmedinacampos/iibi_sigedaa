<h4>Escriba los datos del nuevo empleado</h4>

<form method="post" id="formEmpleado" name="formEmpleado" class="form-horizontal" action="">
	<div class="panel panel-primary">
		<div class="panel-heading">Datos personales</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Grado</label>
				<div class="col-sm-4">
					<select id="grado" name="grado" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
				
				<label class="col-sm-2 control-label">Nombre(s)</label>
				<div class="col-sm-4">
					<input id="nombre" name="nombre" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Apellido paterno</label>
				<div class="col-sm-4">
					<input id="apPaterno" name="apPaterno" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Apellido materno</label>
				<div class="col-sm-4">
					<input id="apMaterno" name="apMaterno" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Teléfono</label>
				<div class="col-sm-4">
					<input id="telefono" name="telefono" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Número celular</label>
				<div class="col-sm-4">
					<input id="celular" name="celular" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Correo personal</label>
				<div class="col-sm-4">
					<input id="correo" name="correo" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Confirmar correo</label>
				<div class="col-sm-4">
					<input id="correoConf" name="correoConf" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">RFC</label>
				<div class="col-sm-4">
					<input id="rfc" name="rfc" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">CURP</label>
				<div class="col-sm-4">
					<input id="curp" name="curp" class="form-control" />
				</div>
			</div>
		</div>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">Datos laborales</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Área IIBI</label>
				<div class="col-sm-4">
					<select id="area" name="area" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
				
				<label class="col-sm-2 control-label">Puesto</label>
				<div class="col-sm-4">
					<input id="puesto" name="puesto" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Fecha de entrada</label>
				<div class="col-sm-4">
					<div class="input-group">
						<input id="fechaEntrada" name="fechaEntrada" class="form-control datepicker" />
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
				</div>
				
				<label class="col-sm-2 control-label">Fecha de salida</label>
				<div class="col-sm-4">
					<div class="input-group">
						<input id="fechaSalida" name="fechaSalida" class="form-control datepicker" />
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Núm. trabajador</label>
				<div class="col-sm-4">
					<input id="numTrabajador" name="numTrabajador" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Núm. cuenta</label>
				<div class="col-sm-4">
					<input id="numCuenta" name="numCuenta" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Teléfono oficina</label>
				<div class="col-sm-4">
					<input id="telefonoOf" name="telefonoOf" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Correo institucional</label>
				<div class="col-sm-4">
					<input id="correoInst" name="correoInst" class="form-control" />
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group text-right">
		<button id="btnCancelar" name="btnCancelar" class="btn btn-default">Cancelar</button>
		<button id="btnGuardar" name="btnGuardar" class="btn btn-primary">Guardar</button>
	</div>
</form>

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