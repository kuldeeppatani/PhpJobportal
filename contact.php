<?php
include('header.php');
?>
<?php
$databs=mysqli_connect('localhost','root','','jobportal (4)');
if(isset($_POST['save']))
{
	$nam=$_POST['name'];
	$eml=$_POST['email'];
	$mesg=$_POST['msg'];

	
	mysqli_query($databs,"INSERT INTO `feedback`( `Name`, `Email`, `Message`) VALUES('$nam','$eml','$mesg')");
}
?>
			
	
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Get Intouch</span>Contact Us</h3>
				<!---728x90--->
				<div class="container">
						<div class="address row mb-5">
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-map"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Address</h6>
										<p> HazratGanj,Lucknow
		
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Email</h6>
										<p>Email :
											<a href="mailto:example@email.com"> example@gmail.com</a>
										</p>
									</div>
		
								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-3 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-9 address-right text-left">
										<h6 class="ad-info text-uppercase mb-2">Phone</h6>
										<p>+1 9336 000 032</p>
		
									</div>
								</div>
							</div>
						</div>
					</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.62806037337!2d80.95422081436753!3d26.8517798831539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd11b5075701%3A0xa34c1a5e4a7750f3!2sCosmo%20Info%20Solutions%20%7C%20Training%20%26%20Software%20Development%20Company!5e0!3m2!1sen!2sin!4v1574332499368!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

					</div>
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">SEND US FEEDBACK </h4>
							<form  method="post">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="name" placeholder="" required=""/>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" placeholder="" required=""/>
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" placeholder="Message" name="msg"></textarea>
								</div>
								<div class="input-group1">
									<button class="btn btn-primary btn-lg btn-block" name="save" onclick="feed()">SUBMIT</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
	<!---728x90--->
	<!--footer -->
	
<?php
include('footer.php');
?>


	<!-- //footer -->

	<!--model-forms-->
	<!--/Login-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<div class="form-check mb-2">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
							<p class="text-center pb-4">
								<a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
							</p>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--//Login-->
	<!--/Register-->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				</div>

			</div>
		</div>
	</div>
	<!--//Register-->

	<!--//model-form-->
	<!-- js -->
	<!--/slider-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--//slider-->
	<!--search jQuery-->
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->

	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js -->
	<script src="js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
</body>

</html>