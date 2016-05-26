	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo URL; ?>">Institución Educativa</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agregar &nbsp;<span class="fa fa-plus-circle"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>profesores/agregar">Profesor  </span></a></li>
							<li class="divider"></li>
							<li><a href="<?php echo URL; ?>salones/agregar">Salón </span></a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Gestionar  &nbsp;<span class="fa fa-pencil-square-o"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>asignar">Asignaciones</a></li>
							
							<li class="divider"></li>
							<li><a href="<?php echo URL; ?>profesores">Profesores</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo URL; ?>salones">Salones</a></li>	
							
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="">
						<a href="<?php echo URL; ?>asignar/agregar"  role="button" aria-expanded="false"> Asignar Salones&nbsp;<span class="fa fa-cogs"></span></a>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="">
						<a href="<?php echo URL; ?>asignar/listar"  role="button" aria-expanded="false"> Informe&nbsp;<span class="fa fa-list-ol"></span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>