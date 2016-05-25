	<html>
	<head>
		<?php include(HTML_DIR.'/overall/header.php') ?>
	</head>
	<body>
		<?php include(HTML_DIR.'/overall/nav.php') ?>
		<div  class="container box-principal">
			<h3  align="center"><?php echo $datos['NOMBRES'] ." ". $datos['PRIMER_APELLIDO']." ". $datos['SEGUNDO_APELLIDO'] ; ?></h3>
			<br>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title" align="center">  Editar Profesor </h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<img class="img-responsive" src="<?php echo URL;?>HTML/Profesores/avatars/<?php echo  !empty($datos['IMAGEN']) ? $datos['IMAGEN'] : 'no-image.png'    ; ?>" required>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<form class="form-horizontal" enctype="multipart/form-data" method="POST">
								<fieldset>
									<div class="form-group">
										<label for="inputNombres" class="col-lg-2 control-label">Nombres</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputNombres" value="<?php echo $datos['NOMBRES']; ?>" required>
										</div>
									</div>		
									<div class="form-group">
										<label for="inputPrimerApellido" class="col-lg-2 control-label">Primer Apellido</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputPrimerApellido" value="<?php echo $datos['PRIMER_APELLIDO']; ?>" required>
										</div>
									</div>		
									<div class="form-group">
										<label for="inputSegundoApellido" class="col-lg-2 control-label">Segundo Apellido</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputSegundoApellido" value="<?php echo $datos['SEGUNDO_APELLIDO']; ?>" >
										</div>
									</div>			    	        
									<div class="form-group">
										<label for="inputDireccion" class="col-lg-2 control-label">Teléfono</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputTelefono" value="<?php echo $datos['TELEFONO']; ?>" >
										</div>
									</div>
									<div class="form-group">
										<label for="inputCelular" class="col-lg-2 control-label">Email</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputEmail" value="<?php echo $datos['EMAIL']; ?>" >
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
											<input type="hidden" class="form-control" name="Documento"  required value="<?php echo $datos['DOCUMENTO']; ?>" >
											<input type="hidden" class="form-control" name="nombreImagen"  required value="<?php echo $datos['IMAGEN']; ?>" >
											<button onclick="window.location = '<?php echo URL; ?>profesores'" class="btn btn-default">Regresar</button>
											<button type="submit" class="btn btn-success">Editar</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>  
			</div>
		</div>
		<?php include(HTML_DIR.'/overall/footer.php') ?> 
	</body>
	</html>		