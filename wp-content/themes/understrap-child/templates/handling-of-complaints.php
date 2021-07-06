<?php
/**
 * Template Name: Handling of complaints
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
                                            data-appear-animation="maskUp" data-appear-animation-delay="100">Handling of
                                            Complaints</h2>
                                    </div>
                                </div>
                                <div class="col-md-12 align-self-center order-1">
        
                                    <ul class="breadcrumb d-block text-center">
                                        <li><a href="/home">Home</a></li>
                                        <li class="active">Handling of
                                            Complaints</li>
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
                                                        <img src="/wp-content/uploads/img/integrity/Handling-of-Complaints.jpg" class="img-fluid" alt="">
                                                        <a href="/wp-content/uploads/img/integrity/Handling-of-Complaints.jpg" class="lightbox-portfolio">
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
                                    data-appear-animation-delay="200">The IREC may receive complaints about researchers,
                                    the conduct of research, or about the conduct of the IREC. Complaints may be made by
                                    participants, researchers, staff of the institution, or others. All complaints
                                    should be handled promptly and sensitively.
                                </p>

                                <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="400">Possible complaints cover a broad spectrum from
                                    ‘inadvertent technical deviations’ from established protocols to allegations of
                                    scientific misconduct or fraud. The primary concern in response to any complaint is
                                    the extent to which research participants are endangered. There may also be concerns
                                    about the degree to which researchers are fulfilling their responsibilities,
                                    questions around culpability for misconduct and misleading reports being published
                                    by a researcher accused of misconduct or fraud. Often the IREC will be the most
                                    appropriate body to consider complaints in the first instance, although ultimately,
                                    the responsibility lies with DUT.
                                </p>

                                <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600">The Chairperson of the IREC will receive the
                                    complaints; he/she may delegate this responsibility to a member of the IREC. All
                                    complaints will be dealt with and may require the assistance of other persons (not
                                    necessarily members of the IREC). The letter of information and consent (appendix B)
                                    provided to study participants will provide the contact details of IREC
                                    Administrator should participants wish to lodge a complaint. The IREC Administrator
                                    will forward the complaint on to the Chairperson/complaints officer.
                                </p>

                                <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600"><strong>Procedure for complaints</strong><br>
                                    <ul class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600">
                                        <li>Complaint referred to the Chairperson of the IREC.</li>
                                        <li>The Chairperson would consider the complaint – including, where necessary, reference to original protocol, contact with researchers, contact with complainant.</li>
                                        <li>Action would be taken including, if warranted, implementing an investigation with the complainant being advised accordingly.</li>
                                        <li>A report will appear at the next IREC meeting.</li>
                                        <li>Where the complainant is not satisfied with the actions taken, the complaint would be referred to the relevant DVC.</li>
                                    </ul>
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