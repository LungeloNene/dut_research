<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

// get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<?php include 'modules/header.php'; ?>

<div class="home" id="page-wrapper">

			<main class="site-main" id="main">
				<!-- Inject the hero module -->
				<?php include 'modules/menu.html'; ?>
					<?php include 'modules/index.php'; ?>
			</main><!-- #main -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
