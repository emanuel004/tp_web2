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
					<div class="common-filter">
						<div class="head">Para</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Todo<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Mujer<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Hombre<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Marcas</div>
						<form action="#">
							<ul>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Todo<span>(29)</span></label></li>
							<?php 
							$marc = json_decode(file_get_contents('datos/marcas.json'),TRUE);
							foreach($marc as $marca){?>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple"><?php echo $marca['nombre'] ?></label></li>
							<?php } ?>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Genero</div>
						<form action="#">
							<ul>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Todo<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Running<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Trainning<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
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
							foreach($prod as $producto){
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
										<a  href="single-product.php?id=hra1.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">detalles</p>
										</a>
									</div>
								</div>
							</div>
						</div> 
						<?php } ?>
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