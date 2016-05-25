	<html>
	<head>
		<?php include(HTML_DIR.'/overall/header.php') ?>
	</head>
	<body>
		<?php include(HTML_DIR.'/overall/nav.php') ?>
		<div class="container">
			<h2 align="center">Profesor <i class="fa fa-exchange" aria-hidden="true"></i> Salón</h2>
			<br>
			<form class="form-horizontal"  name="myForm"  id="myForm" method="POST">
				<div class="row">
					<div class="col-md-1"></div>

					<div class="col-md-5">
						<fieldset>
							<div class="form-group">
								<label for="inputEmail" class="col-lg-2 control-label">Profesor:</label>
								<div class="col-lg-10">
									<select class="form-control" name="profesor" id="profesor" required onchange="Salones();">
										<option value="">[...]</option>
										<?php 
										foreach ($datos as $clave=>$valor)
											{ if ($valor['TIPO']=="PROFESOR") {?>								 		   		
												<option value="<?php  echo $valor['ID']; ?>"><?php  echo $valor['NOMBRE'] ; ?></option>
												<?php } } ?>
											</select>
										</div>
									</div> 	
								</fieldset>

							</div>
							<div class="col-md-5">
								<fieldset>
									<div class="form-group">
										<label for="inputEmail" class="col-lg-2 control-label" >Salón:</label>
										<div class="col-lg-10">
											<select class="form-control" name="salones[]" multiple=""  id="salones" required>
												<?php /* 
												foreach ($datos as $clave=>$valor)
													{ if ($valor['TIPO']=="SALON") {?>							  				   		
														<option value="<?php  echo $valor['ID']; ?>"><?php  echo $valor['NOMBRE'] ; ?></option>
														<?php } } */?>
													</select>
												</div>
											</div> 
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12" align="center">
										<button type="submit" class="btn btn-success">Guardar</button>	
										<div id="result" name="result"></div>
									</div>
								</div>
							</form>
						</div>  
						<?php include(HTML_DIR.'/overall/footer.php') ?> 
					</body>
					</html>			
