	<html>
	<head>
		<?php include(HTML_DIR.'/overall/header.php') ?>
	</head>
	<body>
		<?php include(HTML_DIR.'/overall/nav.php') ?>
		<div class="container">
			<h2 align="center">Nuevo Profesor</h2>
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form class="form-horizontal" enctype="multipart/form-data" method="POST">
						<fieldset>
							<div class="form-group">
								<label for="inputNombres" class="col-lg-2 control-label">Nombres</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputNombres" placeholder="Nombres" required>
								</div>
							</div>		
							<div class="form-group">
								<label for="inputPrimerApellido" class="col-lg-2 control-label">Primer Apellido</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputPrimerApellido" placeholder="Primer Apellido" required>
								</div>
							</div>		
							<div class="form-group">
								<label for="inputSegundoApellido" class="col-lg-2 control-label">Segundo Apellido</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputSegundoApellido" placeholder="Segundo Apellido" >
								</div>
							</div>			    	        
							<div class="form-group">
								<label for="inputCelular" class="col-lg-2 control-label">Teléfono</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputTelefono" placeholder="Telefono" >
								</div>
							</div>
							<div class="form-group">
								<label for="inputCelular" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputEmail" placeholder="Email" >
								</div>
							</div>
							<div class="form-group">
								<label for="inputImagen" class="col-lg-2 control-label">Imagen</label>
								<div class="col-lg-10">
									<input type="file" class="form-control" name="inputImagen" >
								</div>
							</div>


							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="reset" class="btn btn-default">Cancelar</button>
									<button type="submit" class="btn btn-success">Guardar</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>  
		</div>
		<?php include(HTML_DIR.'/overall/footer.php') ?> 
	</body>
	</html>		