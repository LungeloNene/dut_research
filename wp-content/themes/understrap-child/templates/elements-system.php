<?php
/**
 * Template Name: Elements System
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

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 align-self-center p-static order-2 text-center">

                            <h1 class="text-dark font-weight-bold text-8">Elements System </h1>
                        </div>
						<div class="col-md-12 align-self-center order-1">

							<ul class="breadcrumb d-block text-center">
								<li><a href="/home">Home</a></li>
								<li class="active">Elements System</li>
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
                                    <p>Symplectic Elements is a leading research Information management system used by
                                        universities around the world. For DUT, ELEMENTS is the new institutional
                                        research outputs administration system that replaces RIMS which phased out in
                                        2016. DUT Elements is designed to be straightforward and effortless for
                                        researchers to use. Training will be provided for those who need to be assisted
                                        as they venture into the new system.
                                    </p>


                                    <h2 class="font-weight-semibold text-6 line-height-3 mb-3" style="color: #752676">
                                        ACCESSING ELEMENTS</h2>
                                    <p>Accessing Elements URL: <a
                                            href="https://dut.elemets.symplectic.org ">https://dut.elemets.symplectic.org</a>.
                                        You can access the
                                        link Via the Research & Postgraduate Support Page. To Login use your DUT Email
                                        address in full <a href="mailto:edzanin@dut.ac.za">(edzanin@dut.ac.za)</a> plus
                                        its password. If you have any
                                        difficulties accessing the system please contact the system administrator,<br>
                                        Edzani Nevondo<br>
                                        Email: <a href="mailto:Edzanin@dut.ac.za">Edzanin@dut.ac.za</a> <br>
                                        Tel: 031 373 2971<br>

                                    </p>
                                    <h2 class="font-weight-semibold text-6 line-height-3 mb-3" style="color: #752676">
                                        ELEMENTS QUICK GUIDES</h2>
                                        <ul>
                                            <li><a href="/wp-content/themes/understrap-child/pdf/1. Element-System-Guide-Adding ORCID ID.pdf" target="_blank">ORCID Connection</a></li>
                                            <li><a href="/wp-content/themes/understrap-child/pdf/2. Guide_Allowing Elements to read and write publication data to ORCID account.pdf" target="_blank">Allowing Elements to read and write publication data to ORCID account</a></li>
                                            <li><a href="/wp-content/themes/understrap-child/pdf/3. Guide_Adding & claiming publication.pdf" target="_blank">Adding & Claiming new publications</a></li>
                                            <li><a href="/wp-content/themes/understrap-child/pdf/4.Setting Auto claiming & Search Settings.pdf" target="_blank">Setting up auto claiming</a></li>
                                            <li><a href="/wp-content/themes/understrap-child/pdf/5. Guide_Deposit Publication into Institutional Repository (DSpace).pdf" target="_blank">Deposit publication to Institutional Repository (DSpace)</a></li>
                                            <li><a href="/wp-content/themes/understrap-child/pdf/6. Guide_Import, export Publications.pdf" target="_blank">Import, Export publications</a></li>
                                            <li><a href="https://www.youtube.com/watch?v=BDQeKq8_m2w" target="_blank">Setting up your profile</a></li>
                                            <li><a href="https://www.dut.ac.za/wp-content/uploads/2017/08/Presentation-Symplectic-Elements-DUT.pptx" target="_blank">Presentation of Elements at DUT</a></li>
                                        </ul>


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