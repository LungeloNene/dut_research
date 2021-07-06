<?php
/**
 * Template Name: Research tools
 *
 * @package understrap
 */

// get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
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

                            <h1 class="text-dark font-weight-bold text-8">Research Tools</h1>
                        </div>
						<div class="col-md-12 align-self-center order-1">

							<ul class="breadcrumb d-block text-center">
								<li><a href="index.html">Home</a></li>
								<li class="active">Research Tools</li>
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

                            <article class="post post-large">

                                <div class="post-date">
                                    <span class="day"></span>
                                    <span class="month">&ensp;</span>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-6 line-height-3 mb-3" style="color: #752676">
                                        Research Outputs & Accreditation</h2>
                                    <p>Below are some research tools provided to assist the DUT staff and students in
                                        their research endeavour.
                                        <ol>
                                            <li><strong>QuestionPro Survey Tool:</strong> QuestionPro offers “Online
                                                Research Survey
                                                Software” to Durban University of Technology (Staff and Students). It offers
                                                unlimited number of surveys, responses, users under University umbrella and
                                                number of questions. With this system, users are able to export of data to
                                                Word/Excel/PowerPoint/SPSS. We provide technical support for DUT staff and
                                                students. The tool recognises only DUT email addresses. Please register to
                                                use this tool <a href="https://dut.questionpro.com/"
                                                    target="_blank">here</a></li><br>
                                            <li><strong>NVivo 11:</strong> This software is made available for researchers
                                                utilising
                                                qualitative analysis. We provide NVivo 11 licence key to staff members and
                                                students. To access the latest NVivo, please <a
                                                    href="https://www.qsrinternational.com/nvivo-qualitative-data-analysis-software/support-services/nvivo-downloads"
                                                    target="_blank">download the software</a> and you
                                                may request for a licence key from Mr Edzani Nevondo: <a
                                                    href="mailto:edzanin@dut.ac.za">edzanin@dut.ac.za</a>.</li><br>
                                            <li>Turnitin: this tool is available for DUT postgraduate students and staff
                                                members. To make use of the Turnitin system, please contact Mr. Edzani
                                                Nevondo: <a href="mailto:edzanin@dut.ac.za">edzanin@dut.ac.za</a>.</li>
                                        </ol>
                                    </p>

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