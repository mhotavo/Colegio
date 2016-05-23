

<div id="container">
  <h2 align="center">Profesores <i class="fa fa-exchange" aria-hidden="true"></i> Salónes</h2>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

      <table class="table table-striped table-hover dataTable" id="ProfesoresTabla" >
        <thead>
          <tr>
            <th>&nbsp;</th>
            <th>Profesor</th>
            <th>Salón</th>
            <th>Acción</th> 
          </tr>
        </thead>
        <tbody> 
          <?php while($row = mysqli_fetch_array($datos)){ ?>
          <tr>
            <td> <a href="<?php echo URL; ?>Profesores/ver/<?php echo $row['IMAGEN']; ?>"><img class="avatar" src="<?php  echo URL; ?>HTML/Profesores/avatars/<?php echo  !empty($row['IMAGEN']) ? $row['IMAGEN'] : 'no-image.png'    ; ?>"> </a></td>
            <td><?php  echo $row['NOMBRE_PROFESOR']; ?></td>
            <td><?php  echo $row['NOMBRE']; ?></td>
            <td><a  class="btn btn-warning" href="<?php echo URL; ?>Asignar/editar/<?php echo $row['DOCUMENTO']; ?>">Editar</a> 
              <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar esta asignación?','<?php echo URL; ?>Asignar/eliminar/<?php echo $row['ID']; ?>')" >Eliminar</a> 
            </td>
          </tr>
          <?php 
        }
        ?> 
        </tbody>
      </table>

    </div>
    <div class="col-md-2"></div>
  </div>  
</div>
