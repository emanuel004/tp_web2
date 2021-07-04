<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include('inc/header.php');
include('inc/sidebar.php');
include('Business/mensajesBusiness.php');


if(isset($_GET['del'])){
  businessBorrarMensaje($_GET['del']);
  redirect('mensajesListado.php');
}
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Mensajes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Listado de Mensajes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
              <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>E-Mail</th>
                      <th>Telefono</th>
                      <th>Reclamo</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach(businessObtenerMensajes() as $mensaje ){?>
                    <tr>
                      <td><?php echo $mensaje['id']?></td>
                      <td><?php echo $mensaje['Nombre']?></td>
                      <td><?php echo $mensaje['Email']?></td>
                      <td><?php echo $mensaje['Telefono']?></td>
                      <td><?php echo $mensaje['Reclamo']?></td>
                      <td><?php echo $mensaje['Estado']?></td>
                      <td>
                      <a href="mensajesForm.php?edit=<?php echo $mensaje['id'] ?>"><i class="fas fa-eye"></i></a>
                      <a href="mensajesListado.php?del=<?php echo $mensaje['id'] ?>"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include('inc/footer.php');
?>
