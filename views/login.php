<div class="row">
	<div class="contenedor col-sm-5">
		<?php
		if ( $verifica == 10 ) {
		?>
		<p class="mensaje-error">Verifique sus datos o comuníquese con el administrador</p>
		<?php
		}
		?>
		<div class="panel panel-default">
			<div class="panel-heading">Bienvenido</div>
			<div class="panel-body">
				<form id="formLogin" name="formLogin" action="verifica" method="post" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-3 control-label">Usuario</label>
						<div class="col-sm-9">
							<input type="text" id="usuario" name="usuario" class="form-control" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Contraseña</label>
						<div class="col-sm-9">
							<input type="password" id="password" name="password" class="form-control" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12 pull-right">
							<input type="submit" id="btnLogin" name="btnLogin" class="btn btn-default col-sm-12" value="Entrar" >
						</div>
					</div>
					
					<a href="#" class="pull-right">Recuperar contraseña</a>
				</form>
			</div>
		</div>
	</div>
</div>