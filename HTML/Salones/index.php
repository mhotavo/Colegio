<div id="container">
  <h2 align="center">Salónes</h2>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table class="table table-striped table-hover dataTable" >
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Número</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody> 
          <?php while($row = mysqli_fetch_array($datos)){ ?>
          <tr>
            <td><?php  echo $row['NOMBRE']  ?></td>
            <td><?php  echo $row['NUMERO']; ?></td>
            <td><a  class="btn btn-warning" href="<?php echo URL; ?>Salones/editar/<?php echo $row['ID_SALON']; ?>">Editar</a> 
              <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar este salón?','<?php echo URL; ?>Salones/eliminar/<?php echo $row['ID_SALON']; ?>')" >Eliminar</a> 
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
