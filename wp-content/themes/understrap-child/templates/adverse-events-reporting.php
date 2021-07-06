<?php
/**
 * Template Name: Adverse events reporting
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
                                        <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Adverse
                                            Events Reporting</h2>
                                    </div>
                                </div>

                                <div class="col-md-12 align-self-center order-1">

                                    <ul class="breadcrumb d-block text-center">
                                        <li><a href="/home">Home</a></li>
                                        <li class="active">Adverse
                                            Events Reporting</li>
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

                                <div class="lightbox" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                    <div class="row portfolio-list">
                                        <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                            <div class="portfolio-item">
                                                <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="/wp-content/uploads/img/integrity/Adverse-Events-Reporting.jpg" class="img-fluid" alt="">
                                                        <a href="/wp-content/uploads/img/integrity/Adverse-Events-Reporting.jpg" class="lightbox-portfolio">
                                                            <span class="thumb-info-action">
                                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
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
                                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 appear-animation" data-appear-animation="maskUp"> <strong class="font-weight-extra-bold"></strong>
                                    </h2>
                                </div>

                                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">All adverse events (AE), serious adverse events
                                    (SAE), adverse drug reactions (ADR), serious adverse drug reactions (serious ADR)
                                    and serious adverse experiences (SAEx) which occur during a study must be reported
                                    to the IREC.

                                <ul class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <li>Adverse event (AE) is defined as ‘any untoward occurrence affecting
                                        participants in a research investigation or clinical investigation
                                        participant administered a pharmaceutical product or other intervention/
                                        investigation, which does not necessarily have a causal relationship with
                                        this treatment/Investigation.’ An AE can therefore be any unintended sign
                                        (including abnormal laboratory finding), symptom, or disease temporarily
                                        associated with the use of a medicinal (investigational) product, or other
                                        intervention/ investigation, whether or not related to the medicine or
                                        investigational product or intervention.</li>
                                    <li>Adverse drug reaction (ADR) is defined as ‘any noxious and unintended
                                        response associated with the use of a drug in humans or animals.</li>
                                    <li>Serious adverse event (SAE) or serious adverse drug reaction (serious ADR)
                                        is ‘any untoward medical occurrence that at any dose/ intervention: results
                                        in death, is life threatening, requires inpatient hospitalization or
                                        prolongation of existing hospitalization, results in persistent or
                                        significant disability/incapacity, or is a congenital anomaly/birth defect.’
                                    </li>
                                    <li>Serious adverse experience (SAEx) is ‘any experience that suggests a
                                        significant hazard, contraindication, side effect or precaution’.</li>
                                </ul>
                                <a href="http://www.dut.ac.za/wp-content/uploads/2012/06/APPENDIX-E-Adverse-Event-Reporting.docx" class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" target="_blank">Adverse Event Reporting</a>
                                </p>

                                <hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">

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