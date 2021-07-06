<?php
/**
 * Template Name: Grants
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

							<h1 class="text-dark font-weight-bold text-8">GRANTS MANAGEMENT</h1>
						</div>
						<div class="col-md-12 align-self-center order-1">

							<ul class="breadcrumb d-block text-center">
								<li><a href="/home">Home</a></li>
								<li class="active">GRANTS MANAGEMENT</li>
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
											<p class="mb-0">The Grants Management Division of the Research and
												Postgraduate Support Directorate oversees research grants and funding
												opportunities for the Durban University of Technology community. The
												division manages both internal and external grant opportunities for
												students and members of staff within the University.</p>
										</div>
									</div>
								</div>
							</article>

							<article class="post post-medium">
								<div class="row mb-3">
									<div class="col-lg-5">
										<div class="post-image">
											<a>
												<img src="/wp-content/uploads/img/bus/feature-image1.jpg"
													class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
													alt="">
											</a>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="post-content">
											<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
												External Funding</h2>
											<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
												Important Links</h2>
											<ul>
												<li><a href="https://eur03.safelinks.protection.outlook.com/?url=http%3A%2F%2Fdutstudent.dut.ac.za%2FStudent%2520Matters%2FForms%2FAllItems.aspx&data=02%7C01%7CKunleO%40dut.ac.za%7C4745270753eb48364f0608d86f610335%7C4b1930d112f440b5b48cbd86117429d8%7C0%7C0%7C637381809746474791&sdata=3NiiXZ0Nm0wRaYiRn7WZz3qItVVSvBJx0VoybGITW3s%3D&reserved=0"
														target="_blank">Bursaries and Scholarships</a></li>
												<li><a href="https://www.dut.ac.za/wp-content/uploads/2020/01/List-of-equipment_Biotech-updated_23-Jan-2020.pdf"
														target="_blank">DUT Equipment List</a></li>
												<li><a href="https://www.dut.ac.za/wp-content/uploads/2020/07/DUT-Rated-Researchers-3-july-2020.pdf"
														target="_blank">DUT Rated Researchers</a></li>
												<li><a href="https://www.dut.ac.za/research/scholarships-committee"
														target="_blank">Scholarships Committee</a></li>
												<li><a href="https://www.dut.ac.za/wp-content/uploads/2019/04/Research-Strategic-Plan-2014-2019.pdf"
														target="_blank">DUT Research Strategy</a></li>
												<li><a href="https://eur03.safelinks.protection.outlook.com/?url=https%3A%2F%2Fstaffportal.dut.ac.za%2FDUT%2520Research%2FForms%2FAllItems.aspx&data=02%7C01%7CKunleO%40dut.ac.za%7C4745270753eb48364f0608d86f610335%7C4b1930d112f440b5b48cbd86117429d8%7C0%7C0%7C637381809746484786&sdata=awsoL8Uk0%2BEOKVdhnOiCwmQuGq6MrSgH%2FYo15zPJk10%3D&reserved=0"
														target="_blank">Research Funding</a></li>
											</ul>
										</div>
									</div>
								</div>
							</article>
							<div class="col-12 col-sm-6 col-lg-4">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a>
											<img src="/wp-content/uploads/img/team/null.jpg" class="img-fluid" alt="">
										</a>
									</span>
									<span class="thumb-info-caption-text"><strong>Dr Bloodless Dzwairo</strong><br>
										<i style="font-size: 11px">Grants Management Division </i><br>
										Email: grantsadministrator@dut.ac.za<br>
										Tel: 031 373 2423
									</span>
								</span>
							</div>

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