<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); $author = get_the_author(); ?>">
<div class="">
<!DOCTYPE html>
<html>

    <?php include 'header.php'; ?>

<body>

    <div class="body">

        <?php include 'main-menu.php'; ?>
		<div role="main" class="main">

			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">

						<div class="col-md-12 align-self-center p-static order-2 text-center">

							<!-- <h1 class="text-dark font-weight-bold text-8"><?php the_title() ?></h1> -->
						</div>
						<div class="col-md-12 align-self-center order-1">

							<ul class="breadcrumb d-block text-center">
								<li><a href="/">Posts</a></li>
								<li class="active"><?php the_title() ?></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-4">

				<div class="row">
					<div class="col-lg-9 ">
						<div class="blog-posts">

							<article class="post post-medium">
								<div class="row mb-3">
									<div class="col-lg-7">
										<div class="post-content">
											<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                                                        <!-- <?php $author = get_the_author();?>
												<a> Written by <?php echo $author;?></a> -->
												<a> <?php the_title() ?></a> 
											</h2>
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							</article>

						</div>
					</div>

					<?php include 'quick-links.php'; ?>
					
				</div>

			</div>

		</div>
        <?php include 'footer.php'; ?>
    </div>

    <?php include 'footer-script.php'; ?>
</body>

</html>
</div>
</article><!-- #post-## -->

