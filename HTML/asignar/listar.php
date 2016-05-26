  <html>
  <head>
    <?php include(HTML_DIR.'/overall/header.php') ?>
  </head>
  <body>
    <?php include(HTML_DIR.'/overall/nav.php') ?><div id="container">
    <h1 align="center">Informe de salones asignados</h1>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">

        <table class="table table-striped table-hover" id="ProfesoresTabla" >
          <thead>
            <tr>
              <th>Profesor</th>
              <th>Salones</th>
            </tr>
          </thead>
          <tbody> 
            <?php while($row = mysqli_fetch_array($datos)){ ?>
            <tr>
              <td><?php  echo $row['NOMBRE_PROFESOR']; ?></td>
              <td><?php  echo $row['NOMBRE']; ?></td>
            </tr>
            <?php 
          }
          ?> 
        </tbody>
      </table>
      <div align="right">
      <button  class="btn btn-success" onclick="location='<?php echo URL;?>asignar/informeExcel'">Exportar a Excel <i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>  
</div>
<?php include(HTML_DIR.'/overall/footer.php') ?> 
</body>
</html> 