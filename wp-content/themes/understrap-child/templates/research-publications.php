<?php
/**
 * Template Name: Research publications
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

                            <h1 class="text-dark font-weight-bold text-8">Research Publications</h1>
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
                                                Research Publications</h2>
                                            <ul>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2017/08/DHET-Accredited-journal-lists-for-publications-to-be-made-in-20201.xlsx"
                                                        target="_blank">DHET-Accredited-journal-lists-for-publications-to-be-made-in-2020</a>
                                                </li>
                                                <li><a href="https://www.dut.ac.za/wp-content/uploads/2017/08/2019-DUT-RO-DHET-Full-Report-Finale-Validated-on-ROSS.xlsx"
                                                        target="_blank">
                                                        2019 DUT RO DHET Full Report Finale – Validated on ROSS</a></li>
                                                <li>
                                                    <a
                                                        href="https://www.dut.ac.za/wp-content/uploads/2017/08/DHET-Accredited-journal-lists-for-publications-made-in-2019.xlsx">
                                                        DHET-Accredited-journal-lists-for-publications-made-in-2019</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.dut.ac.za/wp-content/uploads/2017/08/DHET-Accredited-journal-lists-for-publications-made-in-20181.xlsx"> 
                                                        DHET-Accredited-journal-lists-for-publications-made-in-2018</a>
                                                </li>
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