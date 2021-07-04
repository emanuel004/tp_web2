<?php
$section="shop";
include("include/header.php");
?>


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<?php
						if(!empty($_GET)){ ?>
							<div class="head">
								<a href="category.php" class="btn btn-warning">Eliminar Filtros</i></a>
							</div>
					<?php ;} ?>
					<div class="common-filter">
						<div class="head">Zapatillas</div>
						<form action="#">
							<ul>
								<?php 
								$cat = json_decode(file_get_contents('datos/categoria.json'),TRUE);
								foreach($cat as $cate){?>
									<li class="filter-list"><a href="category.php?categoria=<?php echo $cate['Id'] ?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><?php echo $cate['nombre'] ?></a></li>
								<?php } ?>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Marcas</div>
						<form action="#">
							<ul>
							<?php 
							$marc = json_decode(file_get_contents('datos/marcas.json'),TRUE);
							foreach($marc as $marca){?>
								<li class="filter-list"><a href="category.php?marca=<?php echo $marca['Id']?>&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>">
								<?php echo $marca['nombre'] ?>
								</a></li>
							<?php } ?>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
							$prod = json_decode(file_get_contents('datos/productos.json'),TRUE);
							shuffle($prod);
							foreach($prod as $producto){
								$posicion = strpos($producto['imagen'],".",0);
								$img = substr($producto['imagen'],0,$posicion);

								$print = true;
					
								if(!empty($_GET['categoria']) AND $print){
									if($producto['Idcategoria'] != $_GET['categoria']) $print = FALSE;
								}
							
								if(!empty($_GET['marca']) AND $print){
									if($producto['IdMarca'] != $_GET['marca']) $print = FALSE;
								}
							
								if($print){
						?>
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<img class="img-fluid" src="img/product-details/<?php echo $producto['imagen'] ?>" alt="">
											<div class="product-details">
												<h6><?php echo $producto['Nombre'] ?></h6>
												<div class="price">
													<h6><?php echo $producto['Precio'] ?></h6>
												</div>
												<div class="prd-bottom">
													<a  href="single-product.php?id=<?php echo $producto['ID'] ?>&producto=<?php echo $img ?>" class="social-info">
														<span class="lnr lnr-move"></span>
														<p class="hover-text">detalles</p>
													</a>
												</div>
											</div>
										</div>
									</div> 
						<?php } }?>
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>


<?php include("include/footer.php") ?>