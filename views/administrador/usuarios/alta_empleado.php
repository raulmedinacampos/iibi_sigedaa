<h3>Alta de empleados</h3>
<p>Para dar de alta a un nuevo trabajador de la dependencia, escriba su nombre en los campos correspondientes. Si la persona ya está registrada, el sistema le mostrará sus datos.</p>

<form method="post" id="formEmpleado" name="formEmpleado" class="form-horizontal" action="">
	<div class="panel panel-primary">
		<div class="panel-heading">Datos personales</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Grado</label>
				<div class="col-sm-4">
					<input type="hidden" id="hdnId" name="hdnId" value="" />
					<input type="hidden" id="hdnNE" name="hdnNE" value="" />
					<select id="grado" name="grado" class="form-control">
						<option value="">Seleccione</option>
						<?php
						while ( $row = mysqli_fetch_array($grado[1]) ) {
						?>
							<option value="<?php echo $row['grado']; ?>"><?php echo $row['grado']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				
				<label class="col-sm-2 control-label obligatorio">Nombre(s)</label>
				<div class="col-sm-4">
					<input id="nombre" name="nombre" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label obligatorio">Apellido paterno</label>
				<div class="col-sm-4">
					<input id="apPaterno" name="apPaterno" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Apellido materno</label>
				<div class="col-sm-4">
					<input id="apMaterno" name="apMaterno" class="form-control" />
				</div>
			</div>
			
<!-- 			<div class="form-group datos-adicionales">
				<label class="col-sm-2 control-label">Teléfono</label>
				<div class="col-sm-4">
					<input id="telefono" name="telefono" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Número celular</label>
				<div class="col-sm-4">
					<input id="celular" name="celular" class="form-control" />
				</div>
			</div>
			
			<div class="form-group datos-adicionales">
				<label class="col-sm-2 control-label">Correo personal</label>
				<div class="col-sm-4">
					<input id="correo" name="correo" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Confirmar correo</label>
				<div class="col-sm-4">
					<input id="correoConf" name="correoConf" class="form-control" />
				</div>
			</div>
			
			<div class="form-group datos-adicionales">
				<label class="col-sm-2 control-label">RFC</label>
				<div class="col-sm-4">
					<input id="rfc" name="rfc" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">CURP</label>
				<div class="col-sm-4">
					<input id="curp" name="curp" class="form-control" />
				</div>
			</div>-->
		</div>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">Datos laborales</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label obligatorio">Área IIBI</label>
				<div class="col-sm-4">
					<select id="area" name="area" class="form-control">
						<option value="">Seleccione</option>
						<?php
						while ( $row = mysqli_fetch_array($area[1]) ) {
						?>
							<option value="<?php echo $row['idArea']; ?>"><?php echo $row['area']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				
				<label class="col-sm-2 control-label obligatorio">Puesto</label>
				<div class="col-sm-4">
					<select id="puesto" name="puesto" class="form-control">
						<option value="">Seleccione</option>
						<?php
						while ( $row = mysqli_fetch_array($puesto[1]) ) {
						?>
							<option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
						<?php
						}
						?>
					</select>
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
				
				<label class="col-sm-2 control-label">Núm. trabajador</label>
				<div class="col-sm-4">
					<input id="numTrabajador" name="numTrabajador" class="form-control" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Núm. cuenta</label>
				<div class="col-sm-4">
					<input id="numCuenta" name="numCuenta" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label obligatorio">Teléfono oficina</label>
				<div class="col-sm-4">
					<input id="telefonoOf" name="telefonoOf" class="form-control" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Correo del puesto</label>
				<div class="col-sm-4">
					<input id="correoPuesto" name="correoPuesto" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Confirmar correo</label>
				<div class="col-sm-4">
					<input id="correoPuestoConf" name="correoPuestoConf" class="form-control"  />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label obligatorio">Correo institucional</label>
				<div class="col-sm-4">
					<input id="correoInst" name="correoInst" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label">Confirmar correo</label>
				<div class="col-sm-4">
					<input id="correoInstConf" name="correoInstConf" class="form-control" />
				</div>
			</div>
		</div>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">Datos de usuario</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label obligatorio">Usuario</label>
				<div class="col-sm-4">
					<input id="usuario" name="usuario" class="form-control" />
				</div>
				
				<label class="col-sm-2 control-label obligatorio">Grupo</label>
				<div class="col-sm-4">
					<select id="grupo" name="grupo" class="form-control">
						<option value="">Seleccione</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group text-right">
		<div class="col-sm-12">
			<button id="btnCancelar" name="btnCancelar" class="btn btn-default">Cancelar</button>
			<button id="btnGuardar" name="btnGuardar" class="btn btn-primary">Guardar</button>
		</div>
	</div>
</form>

<!-- Ventana modal para avisos -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>