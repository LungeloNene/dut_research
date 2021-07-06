<?php
/**
 * Template Name: Postdoctoral
 *
 * @package understrap
 */

// get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<!DOCTYPE html>
<html>

    <?php include 'modules/header.php'; ?>

<body>

    <div class="body">

        <?php include 'modules/main-menu.php'; ?>


		<div role="main" class="main">

			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">

						<div class="col-md-12 align-self-center p-static order-2 text-center">

							<h1 class="text-dark font-weight-bold text-8">POSTDOCTORAL FELLOWSHIP</h1>
						</div>
						<div class="col-md-12 align-self-center order-1">

							<ul class="breadcrumb d-block text-center">
								<li><a href="/home">Home</a></li>
								<li class="active">POSTDOCTORAL FELLOWSHIP</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-4">

				<div class="row">

                    <?php include 'modules/quick-links.php'; ?>
					<div class="col-lg-9 order-lg-1">
						<div class="blog-posts">

							<article class="post post-medium">
								<div class="row mb-3">
									<div class="col-lg-7">
										<div class="post-content">
											<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
												<a>Overview</a>
											</h2>
											<p class="mb-0">Postdoctoral Fellowship at the Durban University of
												Technology is managed by the Grants Division. Important details on
												postdoctoral fellowship at the University are presented below</p>
										</div>
									</div>
								</div>
							</article>

							<article class="post post-medium">
								<div class="row mb-3">
									<div class="col-lg-5">
										<div class="post-image">
											<a>
												<img src="/wp-content/uploads/img/bus/feature-image2.jpg"
													class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
													alt="">
											</a>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="post-content">
											<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
												Important Links</h2>
											<ul>
												<li><a href="https://www.dut.ac.za/wp-content/uploads/2020/04/Policy-for-Postdoctoral-Fellows-17apr2020.pdf"
														target="_blank">Policy for Postdoctoral Fellows</a></li>
												<li><a href="https://www.dut.ac.za/research/application_form/"
														target="_blank">Application Form: Postdoctoral Fellowship</a></li>
												<li><a href="https://www.dut.ac.za/research/registration_form/"
														target="_blank">Registration Form: Postdoctoral Fellowship</a></li>
												<li><a href="https://www.dut.ac.za/research/report-for-pdfsrasrfs/"
														target="_blank">Progress Report Form: Postdoctoral Fellowship</a></li>
											</ul>
										</div>
									</div>
								</div>
							</article>

						</div>
					</div>
				</div>

			</div>

		</div>
        <?php include 'modules/footer.php'; ?>
    </div>

    <?php include 'modules/footer-script.php'; ?>
</body>

</html>