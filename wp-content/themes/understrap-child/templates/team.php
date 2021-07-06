<?php
/**
 * Template Name: Team
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

			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col">
							<div class="row">
								<div class="col-md-12 align-self-center p-static order-2 text-center">
									<div class="overflow-hidden pb-2">
										<h1  class="text-dark font-weight-bold text-8">Meet the Team</h1>
									</div>
								</div>
								<div class="col-md-12 align-self-center order-1">

									<ul class="breadcrumb d-block text-center">
										<li><a href="/home">Home</a></li>
										<li class="active">Meet the Team</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-4">

				<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
					<li class="nav-item" data-option-value="*"><a class="nav-link text-1 text-uppercase" href="/team"></a></li>
				</ul><br /><br />
				<!-- 1st -->
				<?php if( have_rows('research_&_postgraduate_support_directorate') ): ?>
				<div class="row">
					<div class="col-md-12 col-lg-12 mb-12 mb-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

						<div class="card text-center leadership">
							<div class="card-header text-1 text-uppercase" style="background-color: #88b3b7">
								<h3 style="color: black">RESEARCH & POSTGRADUATE SUPPORT DIRECTORATE</h3>
							</div>
							<div class="card-body">

								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row team-list sort-destination" data-sort-id="team">
										<?php  while( have_rows('research_&_postgraduate_support_directorate') ) : the_row(); 
											$image = get_sub_field('image');
											$name = get_sub_field('name');
											$position = get_sub_field('position');
											$email_address = get_sub_field('email_address');
											$telephone = get_sub_field('telephone');
											$default = '/wp-content/uploads/img/team/null.jpg'
										?>
										<div class="col-12 col-sm-6 col-lg-3 isotope-item rpsd">
											<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
												<span class="thumb-info-wrapper">
													<a>
														<img src="<?php echo ($image) ? $image : $default;?>" class="img-fluid" alt="">
													</a>
												</span>
												<span class="thumb-info-caption-text"><strong><?php echo $name ?></strong><br>
													<i style="font-size: 11px"><?php echo $position ?></i><br>
													<?php $label_email = 'Email:';
														$label_tel = 'Tel:';  ?>
														<?php echo ($email_address) ? $label_email : ''; ?>  <?php echo $email_address ?><br>
													<?php echo ($telephone) ? $label_tel : ''; ?> <?php echo $telephone ?>
												</span>
											</span>
										</div>
										<?php endwhile; ?>
									</div>

								</div>
							</div>
							<div class="card-footer text-1 text-uppercase" style="background-color: #88b3b7">
								<a href="#" class="btn btn-primary btn-modern">Back to top</a>
							</div>
						</div>
					</div>

				</div><br /><br />
				<!-- 2nd -->
				<?php endif; ?>

				<?php if( have_rows('research_capacity_development') ): ?>
				<div class="row">
					<div class="col-md-12 col-lg-12 mb-12 mb-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

						<div class="card text-center">
							<div class="card-header text-1 text-uppercase" style="background-color: #f0c244">
								<h3 style="color: black">Research Capacity Development</h3>
							</div>
							<div class="card-body">
								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row team-list sort-destination" data-sort-id="team">
										<?php  while( have_rows('research_capacity_development') ) : the_row(); 
										$image = get_sub_field('image');
										$name = get_sub_field('name');
										$position = get_sub_field('position');
										$email_address = get_sub_field('email_address');
										$telephone = get_sub_field('telephone');
										$default = '/wp-content/uploads/img/team/null.jpg'
										?>
										<div class="col-12 col-sm-6 col-lg-3 isotope-item rpsd">
											<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
												<span class="thumb-info-wrapper">
													<a>
														<img src="<?php echo ($image) ? $image : $default;?>" class="img-fluid" alt="">
													</a>
												</span>
												<span class="thumb-info-caption-text"><strong><?php echo $name ?></strong><br>
													<i style="font-size: 11px"><?php echo $position ?></i><br>
													<?php $label_email = 'Email:';
														$label_tel = 'Tel:';  ?>
														<?php echo ($email_address) ? $label_email : ''; ?>  <?php echo $email_address ?><br>
													<?php echo ($telephone) ? $label_tel : ''; ?> <?php echo $telephone ?>
												</span>
											</span>
										</div>
										<?php endwhile; ?>
									</div>

								</div>
							</div>
							<div class="card-footer text-1 text-uppercase" style="background-color: #f0c244">
								<a href="#" class="btn btn-primary btn-modern">Back to top</a>
							</div>
						</div>
					</div>

				</div><br /><br />
				<!-- 3rd -->
				<?php endif; ?>

				<?php if( have_rows('grants_management_division') ): ?>
				<div class="row">
					<div class="col-md-12 col-lg-12 mb-12 mb-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

						<div class="card text-center">
							<div class="card-header text-1 text-uppercase" style="background-color: #c23730">
								<h3 style="color: black">GRANTS MANAGEMENT DIVISION</h3>
							</div>
							<div class="card-body">
								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row team-list sort-destination" data-sort-id="team">
										<?php  while( have_rows('grants_management_division') ) : the_row(); 
										$image = get_sub_field('image');
										$name = get_sub_field('name');
										$position = get_sub_field('position');
										$email_address = get_sub_field('email_address');
										$telephone = get_sub_field('telephone');
										$default = '/wp-content/uploads/img/team/null.jpg'
										?>
										<div class="col-12 col-sm-6 col-lg-3 isotope-item rpsd">
											<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
												<span class="thumb-info-wrapper">
													<a>
														<img src="<?php echo ($image) ? $image : $default;?>" class="img-fluid" alt="">
													</a>
												</span>
												<span class="thumb-info-caption-text"><strong><?php echo $name ?></strong><br>
													<i style="font-size: 11px"><?php echo $position ?></i><br>
													<?php $label_email = 'Email:';
														$label_tel = 'Tel:';  ?>
														<?php echo ($email_address) ? $label_email : ''; ?>  <?php echo $email_address ?><br>
													<?php echo ($telephone) ? $label_tel : ''; ?> <?php echo $telephone ?>
												</span>
											</span>
										</div>
										<?php endwhile; ?>
									</div>

								</div>
							</div>
							<div class="card-footer text-1 text-uppercase" style="background-color: #c23730">
								<a href="#" class="btn btn-primary btn-modern">Back to top</a>
							</div>
						</div>
					</div>

				</div><br /><br />

				<!-- 4th row -->
				<?php endif; ?>

				<?php if( have_rows('institutional_research_ethics_committee_irec') ): ?>
				<div class="row">
					<div class="col-md-12 col-lg-12 mb-12 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

						<div class="card text-center">
							<div class="card-header text-1 text-uppercase" style="background-color: #327328">
								<h3 style="color: black">INSTITUTIONAL RESEARCH ETHICS COMMITTEE (IREC)</h3>
							</div>
							<div class="card-body">
								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row team-list sort-destination" data-sort-id="team">
										<?php  while( have_rows('institutional_research_ethics_committee_irec') ) : the_row(); 
										$image = get_sub_field('image');
										$name = get_sub_field('name');
										$position = get_sub_field('position');
										$email_address = get_sub_field('email_address');
										$telephone = get_sub_field('telephone');
										$default = '/wp-content/uploads/img/team/null.jpg'
										?>
										<div class="col-12 col-sm-6 col-lg-3 isotope-item rpsd">
											<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
												<span class="thumb-info-wrapper">
													<a>
														<img src="<?php echo ($image) ? $image : $default;?>" class="img-fluid" alt="">
													</a>
												</span>
												<span class="thumb-info-caption-text"><strong><?php echo $name ?></strong><br>
													<i style="font-size: 11px"><?php echo $position ?></i><br>
													<?php $label_email = 'Email:';
														$label_tel = 'Tel:';  ?>
														<?php echo ($email_address) ? $label_email : ''; ?>  <?php echo $email_address ?><br>
													<?php echo ($telephone) ? $label_tel : ''; ?> <?php echo $telephone ?>
												</span>
											</span>
										</div>
										<?php endwhile; ?>
									</div>

								</div>
							</div>
							<div class="card-footer text-1 text-uppercase" style="background-color: #327328">
								<a href="#" class="btn btn-primary btn-modern">Back to top</a>
							</div>
						</div>
					</div>

				</div><br /><br>

				<!-- 5th row -->
				<?php endif; ?>

				<?php if( have_rows('research_information_management') ): ?>

				<div class="row">
					<div class="col-md-12 col-lg-12 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

						<div class="card text-center">
							<div class="card-header text-1 text-uppercase" style="background-color: #5166A1">
								<h3 style="color: black">RESEARCH INFORMATION MANAGEMENT</h3>
							</div>
							<div class="card-body">
								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row team-list sort-destination" data-sort-id="team">
										<?php  while( have_rows('research_information_management') ) : the_row(); 
										$image = get_sub_field('image');
										$name = get_sub_field('name');
										$position = get_sub_field('position');
										$email_address = get_sub_field('email_address');
										$telephone = get_sub_field('telephone');
										$default = '/wp-content/uploads/img/team/null.jpg'
										?>
										<div class="col-12 col-sm-6 col-lg-3 isotope-item rpsd">
											<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
												<span class="thumb-info-wrapper">
													<a>
														<img src="<?php echo ($image) ? $image : $default;?>" class="img-fluid" alt="">
													</a>
												</span>
												<span class="thumb-info-caption-text"><strong><?php echo $name ?></strong><br>
													<i style="font-size: 11px"><?php echo $position ?></i><br>
													<?php $label_email = 'Email:';
														$label_tel = 'Tel:';  ?>
														<?php echo ($email_address) ? $label_email : ''; ?>  <?php echo $email_address ?><br>
													<?php echo ($telephone) ? $label_tel : ''; ?> <?php echo $telephone ?>
												</span>
											</span>
										</div>
										<?php endwhile; ?>
									</div>

								</div>
							</div>
							<div class="card-footer text-1 text-uppercase" style="background-color: #5166A1">
								<a href="#" class="btn btn-primary btn-modern">Back to top</a>
							</div>
						</div>
					</div>

				</div><br><br>

				<!-- 6th row -->
				<!-- 1st -->
				<?php endif; ?>

				<?php if( have_rows('post-doctoral_fellows') ): ?>
				<div class="row">
					<div class="col-md-12 col-lg-12 mb-12 mb-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

						<div class="card text-center leadership">
							<div class="card-header text-1 text-uppercase" style="background-color: #88b3b7">
								<h3 style="color: black">POST-DOCTORAL FELLOWS</h3>
							</div>
							<div class="card-body">

								<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
									<div class="row team-list sort-destination" data-sort-id="team">
										<?php  while( have_rows('post-doctoral_fellows') ) : the_row(); 
										$image = get_sub_field('image');
										$name = get_sub_field('name');
										$position = get_sub_field('position');
										$email_address = get_sub_field('email_address');
										$telephone = get_sub_field('telephone');
										$default = '/wp-content/uploads/img/team/null.jpg'
										?>
										<div class="col-12 col-sm-6 col-lg-3 isotope-item rpsd">
											<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
												<span class="thumb-info-wrapper">
													<a>
														<img src="<?php echo ($image) ? $image : $default;?>" class="img-fluid" alt="">
													</a>
												</span>
												<span class="thumb-info-caption-text"><strong><?php echo $name ?></strong><br>
													<i style="font-size: 11px"><?php echo $position ?></i><br>
													<?php $label_email = 'Email:';
														$label_tel = 'Tel:';  ?>
														<?php echo ($email_address) ? $label_email : ''; ?>  <?php echo $email_address ?><br>
													<?php echo ($telephone) ? $label_tel : ''; ?> <?php echo $telephone ?>
												</span>
											</span>
										</div>
										<?php endwhile; ?>
									</div>

								</div>
							</div>
							<div class="card-footer text-1 text-uppercase" style="background-color: #88b3b7">
								<a href="#" class="btn btn-primary btn-modern">Back to top</a>
							</div>
						</div>
					</div>

				</div><br /><br />
				<?php endif; ?>
			</div>

		</div>
		<?php include 'modules/footer.php'; ?>
	</div>

	<?php include 'modules/footer-script.php'; ?>

</body>

</html>