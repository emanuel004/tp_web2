<?php
	$section="shop";
	include("./include/header.php");
	?>


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.php">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<?php 
		$product = json_decode(file_get_contents('datos/productos.json'),TRUE);
		$nombreP;
		$precioP;
		foreach($product as $producto){
			if ($producto['imagen'] == $_GET['id']) {
				$nombreP = $producto['Nombre'];
				$precioP = $producto['Precio'];
			}
		} 
	?>

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product-details/<?php echo $_GET['id']?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product-details/<?php echo $_GET['id']?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product-details/<?php echo $_GET['id']?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $nombreP?></h3>
						<h2><?php echo $precioP?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Household</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
							something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
							during the winter.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
						<?php
							$coment = json_decode(file_get_contents('datos/comentarios.json'),TRUE);
							foreach($coment as $comentario){
								if($comentario['IdProducto'] == substr($_GET['id'],0,4)){
						?>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4><?php echo $comentario['Nombre'] ?></h4>
										</div>
									</div>
									<p><?php echo $comentario['Comentario'] ?></p>
								</div>
							</div>	
						<?php }} ?>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
									<div class="form-group">
										<select name="combo">
    									<!-- Opciones de la lista -->
    										<option value="1">Opción 1</option>
    										<option value="2">Opción 2</option> <!-- Opción por defecto -->
    										<option value="3">Opción 3</option>
  										</select>
									</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include_once("./include/footer.php")
	?>
