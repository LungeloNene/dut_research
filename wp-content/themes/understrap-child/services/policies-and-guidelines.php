<?php
/**
 * Template Name: onorary
 *
 * @package understrap
 */

// get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<!DOCTYPE html>
<html>

    <?php include '../modules/header.php'; ?>

<body>

    <div class="body">

        <?php include '../modules/main-menu.php'; ?>

        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 align-self-center p-static order-2 text-center">

                            <h1 class="text-dark font-weight-bold text-8">Incentives & Funding Opportunities</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container py-4">

                <div class="row">

                    <?php include '../modules/quick-links.php'; ?>

                    <div class="col-lg-9 order-lg-1">
                        <div class="blog-posts">
                            <article class="post post-medium">
                                <div class="row mb-3">
                                    <div class="col-lg-7">
                                        <div class="post-content">
                                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                Incentives & Funding Opportunities </h2>
                                            <ul>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2020/04/Policy-for-Postdoctoral-Fellows-17apr2020.pdf"
                                                        target="_blank">Policy for Postdoctoral Fellows</a></li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2016/04/Research-Outputs-policy-gazette.pdf"
                                                        target="_blank">Research Outputs Policy</a></li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2014/10/DHET-Policy-on-the-Evaluation-of-Creative-Outputs-2017.pdf"
                                                        target="_blank">Creative Outputs Policy</a></li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2016/04/SUMMARIZED-DHET-REQUIREMENTS-FOR-PUBLICATIONS-SUBMISSION.pdf"
                                                        target="_blank">Research Outputs Submission Guidelines</a></li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2014/10/Implementation_guidelines_April2019.pdf"
                                                        target="_blank">Creative Outputs Submissions Guidelines</a></li>
                                                <li><a href="../ethics.html"
                                                        target="_blank">Research Ethics</a></li>
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
        <?php include '../modules/footer.php'; ?>
    </div>

    <?php include '../modules/footer-script.php'; ?>

</body>

</html>