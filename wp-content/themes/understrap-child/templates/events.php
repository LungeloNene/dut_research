<?php
/**
 * Template Name: Events
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

			<div class="container py-4">

				<div class="row">
					<div class="col">

						<img src="/wp-content/themes/understrap-child/img/events/events-1.jpg">
						<br><br>
						<h4 style="text-align: center;">6TH INTERDISCIPLINARY RESEARCH & INNOVATION CONFERENCE 2021</h4>
						<p style="text-align: center;"> THEME:
							Innovation and Disruption: Facilitating transition for the 4th Industrial Revolution (4IR)
						</p>
						<p style="text-align: center;">DATE AND PLACE:<br>
							14 – 17 September 2021<br>
							Durban, South Africa</p>

						<hr class="solid my-5">

						<div class="toggle toggle-primary" data-plugin-toggle>
							<section class="toggle active">
								<a class="toggle-title">CONFERENCE OVERVIEW</a>
								<div class="toggle-content">
									<p>It is with great pleasure that the Directorate for Research and Postgraduate
										Support announce the 6th Interdisciplinary Research and Innovation Conference
										2021 hosted by the Durban University of Technology.



										The conference invites national and international researchers, innovators,
										postgraduate students and academics to exchange ideas in the following
										disciplines: Accounting, Management Sciences, Humanities, Arts, Design,
										Sciences, Health Sciences, Engineering, and Information Technology.



										The conference is open to postgraduate students, academics, independent
										researchers, as well as Policy makers in the Research and Innovation ambience.
										To submit your abstract, please follow the links below.</p>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">KEYNOTE SPEAKERS</a>
								<div class="toggle-content">
									<p>To be announced</p>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">PUBLICATION OPPORTUNITY IN CONFERENCE ASSOCIATED JOURNALS</a>
								<div class="toggle-content">
									<p>Papers submitted to the conference stand a chance of publication in any of the
										following DHET accredited journals. We will update the journals as we get more
										partners.
									<ol>
										<li>Alternation: Interdisciplinary Journal for the Study of the Arts and
											Humanities in Southern Africa</li>
										<li>Interdisciplinary Journal of Economics and Business Law</li>
									</ol>

									The papers will be reviewed jointly by the conference review panel and reviewers
									from the respective journals. The following are the conditions attached to the
									publication of the full papers:
									<ol>
										<li>Publishing of full papers is optional.</li>
										<li>The publication process may be between 9-12 months depending on the queue on
											the side of the publisher.</li>
										<li>Full papers will only be considered for review after conference registration
											fee has been paid.</li>
										<li>The decision to accept or reject full papers is at the discretion of the
											journal.</li>
										<li>Email full paper to: abstracts@dut.ac.za on or by the 15th of October 2021.
										</li>
									</ol>
									</p>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">CONFERENCE REGISTRATION FEE</a>
								<div class="toggle-content">
									<div class=" col-12">
										<table style="width: 100%;">
											<tr>
												<td>Presenters</td>
												<td>R6000</td>
											</tr>
											<tr>
												<td>Listeners</td>
												<td>R3000</td>
											</tr>
										</table>
									</div>
									<p>*** Conference registration includes: Conference Package, 3X Lunch and
										Tea-breaks, Gala Dinner and Conference Tour.
									</p>
									<p>***Conference grant available for DUT delegates. Please apply directly via the
										Directorate of Research and Postgraduate Support.</p>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">REGISTRATION/ABSTRACT SUBMISSION FOR PRESENTERS</a>
								<div class="toggle-content">
									<div class="col-lg-9 order-1 order-lg-2">

										<div class="offset-anchor" id="contact-sent"></div>


										<div class="overflow-hidden mb-1">
											<h2 class="font-weight-normal text-7 mb-0"><strong
													class="font-weight-extra-bold">Section A - Presenting/Corresponding
													author</strong></h2>
										</div>

										<?php the_field('abstract_form_shortcode') ?>

									</div>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">REGISTRATION FOR LISTENERS</a>
								<div class="toggle-content">
									<div class="col-lg-9 order-1 order-lg-2">

										<div class="offset-anchor" id="contact-sent"></div>
										<?php the_field('form_shortcode') ?>

									</div>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">IMPORTANT DATES</a>
								<div class="toggle-content">
									<table style="width: 100%;">
										<tr>
											<td>Abstract submission opens</td>
											<td>01 January 2021</td>
										</tr>
										<tr>
											<td>Abstract submission deadline </td>
											<td>30 April 2021</td>
										</tr>
										<tr>
											<td>Notification of acceptance/rejection </td>
											<td>21 May 2021</td>
										</tr>
										<tr>
											<td>Deadline for listeners </td>
											<td>31 August 2021</td>
										</tr>
										<tr>
											<td>Submission of Full papers</td>
											<td>15 October 2021</td>
										</tr>
									</table>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">CONFERENCE PROGRAM</a>
								<div class="toggle-content">

									<p>Day 1: Pre-conference workshop and welcome cocktail<br>

										Day 2: Keynote address, panel discussion, and breakaway sessions<br>

										Day 3: Keynote address, panel discussion, and breakaway sessions<br>

										Day 4: Breakaway sessions, conference tour and farewell cocktail</p>
								</div>
							</section>

							<section class="toggle">
								<a class="toggle-title">ENQUIRIES AND PAYMENTS</a>
								<div class="toggle-content">
									<p>Please send your enquiries of proof of payments to: <a
											href="mailto:abstracts@dut.ac.za">abstracts@dut.ac.za</a>
									</p>
								</div>
							</section>
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