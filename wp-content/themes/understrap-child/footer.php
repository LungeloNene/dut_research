<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>



<!-- <div class=" footer" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-12 col-md-6">
				<span><span>copyright © <a href="mailto:lungeloneneh@gmail.com" target="blank" >Ayanda Nene</a> 2020</span>
			</div>
			<div class="col-12 col-md-6 text-right">
				<a href="https://www.instagram.com/farenddairy/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://twitter.com/madmaxmilkshake"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/farendmadmax/"><i class="fa fa-facebook" aria-hidden="true"></i></a>	
			</div>
			</div>

		</div>

	</div>

</div> -->



<footer id="footer">
			<!--<div class="container">
				<div class="row py-5 my-4">
					<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
						<h5 class="text-3 mb-3">NEWSLETTER</h5>
						<p class="pr-1">Keep up on our always evolving product features and technology. Enter your
							e-mail address and subscribe to our newsletter.</p>
						<div class="alert alert-success d-none" id="newsletterSuccess"> <strong>Success!</strong> You've
							been added to our email list. </div>
						<div class="alert alert-danger d-none" id="newsletterError"></div>
						<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"
							class="mr-4 mb-3 mb-md-0">
							<div class="input-group input-group-rounded"> <input
									class="form-control form-control-sm bg-light" placeholder="Email Address"
									name="newsletterEmail" id="newsletterEmail" type="text"> <span
									class="input-group-append"> <button class="btn btn-light text-color-dark"
										type="submit"><strong>GO!</strong></button> </span> </div>
						</form>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<h5 class="text-3 mb-3">LATEST TWEETS</h5>
						<div id="tweet" class="twitter" data-plugin-tweets
							data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
							<p>Please wait...</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<div class="contact-details">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i>
									<p class="m-0">234 Street Name, City Name</p>
								</li>
								<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
									<p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p>
								</li>
								<li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
									<p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<h5 class="text-3 mb-3">FOLLOW US</h5>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
									title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
									title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
									title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>-->
			<div class="footer-copyright">
				<div class="container py-2">
					<div class="row py-4">
						<!--<div
							class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3"> <img alt="Porto Website Template"
									src="img/logo-footer.png" class="opacity-5" height="33"> </a> </div>-->
						<div
							class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
							<p>© Copyright 2020. All Rights Reserved.</p>
						</div>
						<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
							<nav id="sub-menu">
								<ul>
									<li><i class="fas fa-angle-right"></i><a href="" class="ml-1 text-decoration-none">
											FAQ's</a></li>
									<li><i class="fas fa-angle-right"></i><a href="" class="ml-1 text-decoration-none">
											Sitemap</a></li>
									<li><i class="fas fa-angle-right"></i><a href="" class="ml-1 text-decoration-none">
											Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>



</div><!-- #page -->

<?php wp_footer(); ?>


	<!-- Vendor -->
	<script src="/wp-content/themes/understrap-child/vendor/jquery/jquery.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/popper/umd/popper.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/common/common.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/isotope/jquery.isotope.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/vide/jquery.vide.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/vivus/vivus.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="/wp-content/themes/understrap-child/js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="/wp-content/themes/understrap-child/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="/wp-content/themes/understrap-child/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
	<script src="/wp-content/themes/understrap-child/js/views/view.home.js"></script>


	<!-- Theme Initialization Files -->
	<script src="/wp-content/themes/understrap-child/js/theme.init.js"></script>

</body>

</html>

