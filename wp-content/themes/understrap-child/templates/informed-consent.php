<?php
/**
 * Template Name: Informed consent
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
                                            data-appear-animation="maskUp" data-appear-animation-delay="100">Informed
                                            Consent</h2>
                                    </div>
                                </div>
                                <div class="col-md-12 align-self-center order-1">
        
                                    <ul class="breadcrumb d-block text-center">
                                        <li><a href="/home">Home</a></li>
                                        <li class="active">Informed
                                            Consent</li>
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
                                                        <img src="/wp-content/uploads/img/integrity/Informed-Consent.jpg" class="img-fluid" alt="">
                                                        <a href="/wp-content/uploads/img/integrity/Informed-Consent.jpg" class="lightbox-portfolio">
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
                                    data-appear-animation-delay="200">All research approved by the IREC on human
                                    participants must have a letter of information and consent compiled according to the
                                    guidelines in Appendix B. Each participant or, where necessary, the participant’s
                                    legally authorised representative, must be given sufficient time to read the letter
                                    of information and consent and have the opportunity to ask questions. There should
                                    be no coercion or undue influence. The letter of information and consent should be
                                    in a language understandable to the participant or representative, allowing them to
                                    make an informed decision to participate in the research. Only then may the
                                    participant or representative sign the letter of information and consent. In the
                                    case where the participant is illiterate, verbal consent may be given in the
                                    presence of a literate witness who will verify and sign the letter of information
                                    and consent on behalf of the participant, indicating that informed verbal consent
                                    was given. The letter of information and consent must be written in simple language.
                                </p>

                                <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600">The letter of information and consent must include the following:
                                    <ol type="i"  class="appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="800">
                                        <li>The qualification/s and contact details of the researcher/s</li>
                                        <li>Participants’ responsibilities</li>
                                        <li>Purpose of the research</li>
                                        <li>Any risks and benefits to participants</li>
                                        <li>Outline study procedure e.g. placebo or control groups if necessary</li>
                                        <li>Duration of study</li>
                                        <li>Alternative procedures or treatments</li>
                                        <li>Confidentiality</li>
                                        <li>A statement that participation is voluntary and that non-participation will not result in any penalty</li>
                                        <li>A statement that ethical approval for the study was obtained</li>
                                        <li>A statement that sponsors or the ethics committee may inspect research records</li>
                                        <li>Compensation for research related injury</li>
                                        <li>Contact details of the IREC</li>
                                        <li>Contact details of the person to contact should there be research related injury</li>
                                        <li>See sample: Appendix B:<a href="https://www.dut.ac.za/wp-content/uploads/2012/06/Appendix-B-Letter-of-Information-and-Consent-11082020.doc" target="_blank"> Letter of Information and Consent</a></li>
                                    </ol>
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