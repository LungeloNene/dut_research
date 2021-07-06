<?php
/**
 * Template Name: Honorary
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

                            <h1 class="text-dark font-weight-bold text-8">Honorary/Adjunct Professors</h1>
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
                                                Honorary/Adjunct Professors</h2>
                                            <ul>
                                                <li><a href="/wp-content/themes/understrap-child/pdf/Brochure Publication Expectations.pdf"
                                                        target="_blank">Brochure Publication Expectations</a>
                                                </li>
                                                <li><a href="/wp-content/themes/understrap-child/pdf/Letter to Adjunct Profs Publishing Expectations-signed.pdf"
                                                        target="_blank">Letter to Adjunct Professors</a></li>
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