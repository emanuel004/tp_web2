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

	<!-- star contenido Area -->
		<?php 
			$rutacompleta = "producto-detalles/hra1.php" ;
			include($rutacompleta); 
		?>
	<!-- End contenido Area -->

	<?php
	include_once("./include/footer.php")
	?>
