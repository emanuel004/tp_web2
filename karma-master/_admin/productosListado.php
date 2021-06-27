<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include('inc/header.php');
include('inc/sidebar.php');
include('Business/productosBusiness.php');
include('Business/categoriasBusiness.php');
include('Business/marcasBusiness.php');

$marcas = businessObtenerMarcas();
$categorias = businessObtenerCategorias();

if(isset($_GET['del'])){
  businessBorrarProducto($_GET['del']);
  redirect('productosListado.php');
}



?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Productos</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Productos <a href="productosForm.php"><i class="fas fa-plus"></i></a></h3>

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
                      <th>Categoria</th>
                      <th>Marca</th>
                      <th>Precio</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach(businessObtenerProductos() as $prod ){?>
                    <tr>
                      <td><?php echo $prod['ID']?></td>
                      <td><?php echo $prod['Nombre']?></td>
                      <td><?php echo $categorias[$prod['Idcategoria']]['nombre']?></td>
                      <td><?php echo $marcas[$prod['IdMarca']]['nombre']?></td>
                      <td><?php echo $prod['Precio']?></td>
                     
                      
                      <td>
                      <a href="productosForm.php?edit=<?php echo $prod['ID'] ?>"><p>Editar</p></a>
                      <a href="productosListado.php?del=<?php echo $prod['ID'] ?>"><i class="fas fa-trash"></i></a>
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
