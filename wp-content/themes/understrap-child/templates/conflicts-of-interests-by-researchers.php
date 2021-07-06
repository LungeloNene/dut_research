<?php
/**
 * Template Name: Conflicts of interests by researchers
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
                                            data-appear-animation="maskUp" data-appear-animation-delay="100">Conflicts
                                            of Interests by Researchers</h2>
                                    </div>
                                </div>

                                <div class="col-md-12 align-self-center order-1">
        
                                    <ul class="breadcrumb d-block text-center">
                                        <li><a href="/home">Home</a></li>
                                        <li class="active">Conflicts
                                            of Interests by Researchers</li>
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
                                                        <img src="/wp-content/uploads/img/integrity/Conflicts-of-Interests.jpg" class="img-fluid" alt="">
                                                        <a href="/wp-content/uploads/img/integrity/Conflicts-of-Interests.jpg" class="lightbox-portfolio">
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
                                    data-appear-animation-delay="200">Conflict of interest arises when the individual’s
                                    private or personal interests and professional obligations are divergent to such an
                                    extent that an independent observer may have doubt as to whether or not the
                                    individual’s professional actions are influenced by personal considerations,
                                    financial or otherwise. Any conflict of interests should be avoided, and all
                                    researchers must make known any potential conflict of interests. Interference by
                                    clients or funders that could compromise the integrity of the research is
                                    unacceptable. Possible conflict of interests includes:
                                    <ul class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="400">
                                        <li>Financial relationships of any kind by the researcher e.g. equity, stock
                                        </li>
                                        <li>Proprietary interests e.g. patents, intellectual property</li>
                                        <li>Sponsorship/donations e.g. conferences, equipment</li>
                                        <li>Funding e.g. for additional staff or facilities, payments to departments
                                        </li>
                                        <li>Co-authorship of articles</li>
                                        <li>Positions on various boards e.g. Pharmaceutical Advisory board</li>
                                        <li>Grants and retainers</li>
                                    </ul>Conflict of interests that are not disclosed may have a negative impact on the
                                    well-being of the research participants; therefore, the IREC must be duly informed
                                    in order to protect the participants. All principal investigators are required to
                                    sign a conflict of interest form (appendix C).<br />
                                    <a href="http://www.dut.ac.za/wp-content/uploads/2012/06/APPENDIX-C-Conflict-of-Interest.docx" class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600"
                                        target="_blank">Conflict of Interest Form</a>
                                </p>

                                <hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="800">

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