

<div id="container">
  <h2 align="center">Listado de Profesores</h2>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

      <table class="table table-striped table-hover dataTable" id="ProfesoresTabla" >
        <thead>
          <tr>
            <th>Imagen</th>
            <th>Nombres</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Telefono</th>
            <th>Acción</th> 
          </tr>
        </thead>
        <tbody> 
          <?php while($row = mysqli_fetch_array($datos)){ ?>
          <tr>
            <td> <a href="<?php echo URL; ?>Profesores/ver/<?php echo $row['DOCUMENTO']; ?>"><img class="avatar" src="<?php  echo URL; ?>HTML/Profesores/avatars/<?php echo  !empty($row['IMAGEN']) ? $row['IMAGEN'] : 'no-image.png'    ; ?>"> </a></td>
            <td><?php  echo $row['NOMBRES']; ?></td>
            <td><?php  echo $row['PRIMER_APELLIDO']; ?></td>
            <td><?php  echo $row['SEGUNDO_APELLIDO']; ?></td>
            <td><?php  echo $row['TELEFONO']; ?></td>
            <td><a  class="btn btn-warning" href="<?php echo URL; ?>Profesores/editar/<?php echo $row['DOCUMENTO']; ?>">Editar</a> 
              <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar este Integrante?','<?php echo URL; ?>Profesores/eliminar/<?php echo $row['DOCUMENTO']; ?>')" >Eliminar</a> 
            </td>
          </tr>
          <?php 
        }
        ?> 
        </tbody>
      </table>

    </div>
    <div class="col-md-1"></div>
  </div>  
</div>
