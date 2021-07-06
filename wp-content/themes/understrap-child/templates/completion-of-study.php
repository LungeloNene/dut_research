<?php
/**
 * Template Name: Completion of study
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
                                            data-appear-animation="maskUp" data-appear-animation-delay="100">Completion
                                            of Study</h2>
                                    </div>
                                </div>

                                <div class="col-md-12 align-self-center order-1">
        
                                    <ul class="breadcrumb d-block text-center">
                                        <li><a href="/home">Home</a></li>
                                        <li class="active">Completion
                                            of Study</li>
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
                                                        <img src="/wp-content/uploads/img/integrity/Completion-of-Study.jpg" class="img-fluid" alt="">
                                                        <a href="/wp-content/uploads/img/integrity/Completion-of-Study.jpg" class="lightbox-portfolio">
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
                                    data-appear-animation-delay="200">A study is considered active or on-going until all
                                    data is collected, follow up at all research sites is complete and participant
                                    participation is no longer needed. The principal investigator/researcher must submit
                                    a letter to the IREC informing them that the study is completed (appendix G) along
                                    with the final study report or a copy of the study abstract (in the case of student
                                    research). This should be done after the comments from the examiner’s report have
                                    been addressed successfully. If a study is not closed but is allowed to expire (a
                                    lapse in approval) an administrative suspension letter may be sent to the principal
                                    investigator.<br>
                                    <a href="https://www.dut.ac.za/wp-content/uploads/2012/06/APPENDIX-G-Completion-Termination-of-Study-1.docx"
                                        target="_blank">Completion - Termination of Study</a>
                                </p>

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