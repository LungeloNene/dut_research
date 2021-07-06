<?php
/**
 * Template Name: Amendments
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
                                            data-appear-animation="maskUp" data-appear-animation-delay="100">Amendments
                                            to Research Protocol</h2>
                                    </div>
                                </div>

                                <div class="col-md-12 align-self-center order-1">

                                    <ul class="breadcrumb d-block text-center">
                                        <li><a href="/home">Home</a></li>
                                        <li class="active">Amendments
                                            to Research Protocol</li>
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
                                                        <img src="/wp-content/uploads/img/integrity/Amendments-to-Research-Protocol.jpg" class="img-fluid" alt="">
                                                        <a href="/wp-content/uploads/img/integrity/Amendments-to-Research-Protocol.jpg" class="lightbox-portfolio">
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
                                    data-appear-animation-delay="200">The IREC approves the study protocol ensuring that
                                    the research will be conducted using sound ethical principles. All amendments must
                                    be submitted to the IREC utilising the “Application for approval of amendment” form
                                    (Appendix D) prior to being implemented. The Chairperson will decide if the
                                    amendment has minor or major implications for the study and its participants. If the
                                    change is minor it may be seen through expedited review; if the change is major it
                                    will serve at a full committee meeting.
                                    <ul  class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="400">
                                        <li>Minor amendment – does not change the risk – benefit profile of the study,
                                            e.g. change of title1, administrative changes, adding an investigator,
                                            changes that do not affect study design and outcomes, small changes to
                                            letter of information and consent such as editorial changes.</li>
                                        <li>Major amendment – does change the risk-benefit profile of the study, e.g.
                                            change in study aims and objectives, alterations to study procedure,
                                            changing inclusion criteria to make study more accessible, changes to letter
                                            of information and consent</li>
                                    </ul>
                                </p>
                                <p  class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600">In the case of protocol deviations, defined as a “once off” instance where the
                                    research protocol is not followed either deliberately or by mistake, the deviation
                                    will fall into one of two categories: major or minor as outlined above. If minor,
                                    the deviation must be reported to the IREC in the annual progress report. If the
                                    deviation is major, it will need to be reported to the IREC within 15 days. The
                                    Chairperson will then decide the action to be taken.
                                    <br/>
                                    <a href="http://www.dut.ac.za/wp-content/uploads/2012/06/APPENDIX-D-Application-for-Approval-of-Amendment.docx"  class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="800" target="_blank">Application for Approval Amendment</a>
                                </p>

                                <hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="900">

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