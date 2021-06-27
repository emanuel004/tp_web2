<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$section="shop";
	include_once('include/header.php');
	include_once('Business/comentariosBusiness.php');
	
	//de esta forma recibe el port
	if(isset($_POST['submitCom'])){ 
		//var_dump($_POST);
		businessGuardarComentario($_POST);
	}
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
		$p = $product[$_GET['id']];
	?>

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product-details/<?php echo $p['imagen']?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product-details/<?php echo $p['imagen']?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product-details/<?php echo $p['imagen']?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $p['Nombre']?></h3>
						<h2><?php echo $p['Precio']?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Household</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p><?php echo $p['Descripcion'] ?> </p>
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
							$puntu = 0;
							$totalComen = 0;
							$a = businessObtenerComentarios();
							foreach($a as $a1){
								if($a1['IdProducto'] == $_GET['producto']){
									$puntu = $puntu + $a1['Puntuacion'];
									$totalComen = $totalComen + 1;
								}
							}
							$total = intval($puntu/$totalComen);
						?>
						<h4><?php echo 'Valoracion Producto: '.$total; ?></h4>
						<?php
							$coment = businessObtenerComentarios();
							krsort($coment);
							foreach($coment as $comentario){
								if($comentario['IdProducto'] == $_GET['producto']){
						?>
									<div class="review_list">
										<div class="review_item">
										<div class="media">
												<div class="d-flex"><img src="img/product/anonimo.png" alt=""></div>
												<div class="media-body"><h4><?php echo $comentario['Nombre'] ?></h4></div>
												<div class="media-body"><h6><?php echo 'Valoracion: '.$comentario['Puntuacion'] ?></h6></div>
											</div>
											<p><?php echo $comentario['Comentario'] ?></p>
											<hr style="color: #0056b2;" />
										</div>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<h6>Puntuacion</h6>
										<div class="form-check form-check-inline">
  											<input class="form-check-input" type="checkbox" name="inlineCheckbox1" value="1">
  											<label class="form-check-label" for="Puntuacion">1</label>
										</div>
										<div class="form-check form-check-inline">
  											<input class="form-check-input" type="checkbox" name="Puntuacion" value="2">
  											<label class="form-check-label" for="inlineCheckbox2">2</label>
										</div>
										<div class="form-check form-check-inline">
  											<input class="form-check-input" type="checkbox" name="Puntuacion" value="3">
  											<label class="form-check-label" for="inlineCheckbox3">3</label>
										</div>
										<div class="form-check form-check-inline">
  											<input class="form-check-input" type="checkbox" name="Puntuacion" value="4">
  											<label class="form-check-label" for="inlineCheckbox3">4</label>
										</div>
										<div class="form-check form-check-inline">
  											<input class="form-check-input" type="checkbox" name="Puntuacion" value="5">
  											<label class="form-check-label" for="inlineCheckbox3" >5</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="Email" name="Email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="Comentario" id="Comentario" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										<input type="hidden" name="IdProducto" id="IdProducto" value="<?php echo $_GET['producto']?>"><br>
										</div>
									</div>
									
									<div class="col-md-12 text-right">
										<button type="submit" name="submitCom" class="primary-btn">Submit Now</button>
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
