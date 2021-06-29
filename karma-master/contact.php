<?php
$section = "contact";
include("include/header.php");
include_once('Business/contactenosBusiness.php');
include_once('_admin/business/contactBusiness.php');
	
	//de esta forma recibe el port
	if(!empty($_POST['email'])){ 
		var_dump($_POST);
		sendMail($_POST);
	}
?>


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Contact Us</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="contact.php">Contact</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom">
	<div class="container">
		<div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-home"></i>
						<h6>California, United States</h6>
						<p>Santa monica bullevard</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><a href="#">00 (440) 9865 562</a></h6>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="#">support@colorlib.com</a></h6>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<form class="row contact_form"  method="post" id="contactForm" >
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="Nombre" name="nombre" placeholder="Ingresae Nonbre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresae Nonbre'" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="Email" name="correo" placeholder="Ingrese Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese Email'" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="Telefono" name="telefono" placeholder="Telefono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefono'" required>
						</div>

						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="Reclamo" placeholder="Reclamo/Sugerencia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Reclamo/Sugerencia'" required>
						</div>
				
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" name="Comentario" id="message" rows="1" placeholder="Ingrese Mensage" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese Mensage'" required></textarea>
							<input type="hidden" class="form-control" name="Estado" value="Recibido">
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button type="submit" name = "submitCon" value="Enviar mensaje" class="primary-btn">Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================End Contact Area =================-->


<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>

<?php
include_once("./include/footer.php")
?>

