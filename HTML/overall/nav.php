<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo URL; ?>"><b>Institución</b> Educativa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agregar &nbsp;<span class="fa fa-plus-circle"></span>  </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL; ?>profesores/agregar">Profesor&nbsp;<span class="fa fa-user"></span> </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo URL; ?>salones/agregar">Salón&nbsp;<span class="fa fa-university"></span> </a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestionar  &nbsp;<span class="fa fa-pencil-square-o"></span>  </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL; ?>asignar">Asignaciones&nbsp;<span class="fa fa-cogs"></span></a></li>
            <li class="divider"></li>
            <li><a href="<?php echo URL; ?>profesores">Profesores&nbsp;<span class="fa fa-users"></span> </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo URL; ?>salones">Salones&nbsp;<span class="fa fa-university"></span> </a></li>  
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="">
          <a href="<?php echo URL; ?>asignar/agregar"  role="button" aria-expanded="false"> Asignar Salones&nbsp;<span class="fa fa-cog"></span></a>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>