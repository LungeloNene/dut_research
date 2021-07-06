<?php
/**
 * Template Name: Incentives
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

                            <h1 class="text-dark font-weight-bold text-8">Incentives</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container py-4">

                <div class="row">

                    <?php include 'modules/quick-links.php'; ?>

                    <div class="col-lg-9 order-lg-1">
                        <div class="blog-posts">
                            <article class="post post-medium">
                                <div class="row mb-3">
                                    <div class="col-lg-7">
                                        <div class="post-content">
                                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                Incentives</h2>
                                            <ul>
                                                <li><a href=" https://www.dut.ac.za/wp-content/uploads/2020/03/MD-Supervisor-Incentives-Guidelines-IRC-Updated-2019.pdf"
                                                        target="_blank">Supervision</a>
                                                </li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2020/03/MD-Supervisor-Incentives-Guidelines-IRC-Updated-2019.pdf"
                                                        target="_blank">Advances</a></li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2020/03/Debt-Acknowledgement-Form2020-Final.pdf" target="_blank">Research Rewards Expenditure</a></li>
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
        <?php include 'modules/footer.php'; ?>
    </div>

    <?php include 'modules/footer-script.php'; ?>

</body>

</html>