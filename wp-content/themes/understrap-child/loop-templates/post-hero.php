<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<div class="wrapper post-hero hero hero--full d-flex align-items-center justify-content-center">
  <div class="container-fluid hero--image_full image--filter_brightness  d-flex align-items-center justify-content-center" style="background-image:url('<?php echo $featured_img_url; ?>')">
  <a href="/blog" class="back"><i class="fas fa-arrow-left"></i></a>
    <div class="container-fluid d-flex align-items-center justify-content-center hero--content">
      <div class="row ">
        <div class="col-md-12">
          <?php $date = get_the_date(); ?>
          <div class="hero--subtitle">
            <?php echo $date; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>