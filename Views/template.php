<?php namespace Views;
class Template 
{

	public function __construct()
	{?>
	<html>
	<head>
		<title>Colegio</title>

		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/css/general.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/fontawesome/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="<?php echo URL; ?>Views/js/jquery.min.js"></script>

		<?php  
	} 

	public function dataTable()
	{ ?>
	<!-- DataTables-->
	<link rel="stylesheet" type="text/css" href="Views/DataTables/media/css/dataTables.bootstrap.css">
	<script type="text/javascript" src="Views/DataTables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="Views/DataTables/media/js/dataTables.bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.dataTable').DataTable({
				"iDisplayLength": -1,
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"autoWidth": true,
				"columns": [{ "orderable": true},     
				null,
				null,
				null,
				null,
				null
				],				         
				"sPaginationType": "full_numbers",
				"order": [[ 0, 'asc' ], [ 1, 'asc' ]]
			});
		} );
	</script>
	<?php 
} 

public function menu()
{?>	
	<script src="<?php echo URL; ?>Views/bootstrap/js/bootstrap.min.js"></script> 	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
 
				<a class="navbar-brand" href="<?php echo URL; ?>profesores">Institución Educativa</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Agregar <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>profesores/agregar">Profesor</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo URL; ?>salones/agregar">Salón</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Listar <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>profesores">Profesores</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo URL; ?>salones">Salónes</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo URL; ?>Logout"> Salir  <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php 
}
function __destruct()
{ ?>

	<script src="<?php echo URL; ?>Views/js/generales.js"></script> 	
</body>
</html>			
<?php 	
}		
}



?>