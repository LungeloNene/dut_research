<?php
/**
 * Template Name: Application procedure
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
										<h1 class="text-dark font-weight-bold text-9 appear-animation"
											data-appear-animation="maskUp" data-appear-animation-delay="100">Application
											Procedure</h2>
									</div>
								</div>

								<div class="col-md-12 align-self-center order-1">

									<ul class="breadcrumb d-block text-center">
										<li><a href="/home">Home</a></li>
										<li class="active">Application Procedure</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-4 mb-4">

				<div class="row">
					<div class="col-lg-9">

						<div class="row">
							<div class="col">

								<div class="lightbox"
									data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
									<div class="row portfolio-list">
										<div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter"
											data-appear-animation-delay="500">
											<div class="portfolio-item">
												<span
													class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="/wp-content/uploads/img/integrity/Application-Procedure.jpg"
															class="img-fluid" alt="">
														<a href="/wp-content/uploads/img/integrity/Application-Procedure.jpg"
															class="lightbox-portfolio">
															<span class="thumb-info-action">
																<span
																	class="thumb-info-action-icon thumb-info-action-icon-light"><i
																		class="fas fa-search text-dark"></i></span>
															</span>
														</a>
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row pt-4 mt-2 mb-5">
							<div class="col-md-12 mb-4 mb-md-0">

								<div class="overflow-hidden mb-2">
									<h2 class="text-color-dark font-weight-normal text-5 mb-0 appear-animation"
										data-appear-animation="maskUp"> <strong class="font-weight-extra-bold"></strong>
									</h2>
								</div>

								<p class="appear-animation" data-appear-animation="fadeInUpShorter"
									data-appear-animation-delay="200">All documentations for submission is available on
									the quick links or can be obtained from the IREC Administrator. The following will
									need to be submitted
								<ol class="appear-animation" data-appear-animation="fadeInUpShorter"
									data-appear-animation-delay="400">
									<li>Completed DUT approved format for proposal submission ensuring the following are
										addressed:
										<ul>
											<li>Participant recruitment procedures</li>
											<li>Safety information</li>
											<li>Any payment or compensation to participants</li>
											<li>Ethical checklist</li>
										</ul>
									</li>
									<li>Letter of information and consent (Appendix B)</li>
									<li>Conflict of interest form (appendix C)</li>
									<li>Other information being supplied to participants</li>
									<li>Other documentation necessary for the IREC to make an informed decision
										regarding the research.</li>
								</ol>
								</p>

								<p class="appear-animation" data-appear-animation="fadeInUpShorter"
									data-appear-animation-delay="600">The IREC Administrator will accept applications
									from the FRC’s/ FREC’s and principal investigators for ethical clearance on a
									rolling basis. The IREC Administrator in conjunction with the Chairperson will
									determine whether the application requires expedited or full review. The IREC
									Administrator will check the application ensuring that all relevant documentation
									has been submitted, should documentation be missing it will be requested.</p>

								<hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter"
									data-appear-animation-delay="500">

							</div>
						</div>

					</div>

                    <?php include 'modules/quick-links.php'; ?>

                </div>

            </div>

        </div>
        <?php include 'modules/footer.php'; ?>
    </div>

    <?php include 'modules/footer-script.php'; ?>


</body>

</html>