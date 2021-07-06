<div class="post post-content">
    <div class="container">
        <div class="row">
            <?php
                    $bgimage =''; $author_id = get_the_author_meta('ID'); $user_image = get_field('user-image', 'user_'.$author_id); 
                    if(get_field('author-image')){
                        $bgimage = get_field('author-image');
                    }
                    elseif(get_field('user-image', 'user_'.$author_id)){
                        $bgimage = $user_image;
                    }
                    else{
                        $bgimage = get_avatar_url($author_id);
                    }
                    ?>
            <div class="col-md-12 d-flex align-items-center justify-content-center  col-wrapper" >
                <div class="author-img" style="background-image:url('<?php echo $bgimage;?>')"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center col-wrapper post-title">
                <?php the_title() ?>
            </div>
            <div class="col-md-12 col-wrapper d-flex justify-content-center">
                <div class="row">
                    <div class="col-5 line"><hr></div>
                </div>
            </div>
            <div class="col-md-12 col-wrapper wysiwyg">
                <?php the_content(); ?>
            </div>
            <div class="col-md-12 text-center" >
               <h6 class="author-name">Written by <?php echo $author;?></div>
            </div>
            <div class="col-md-12 text-center col-wrapper contribute-color" >
                <h4>Would you like to contribute to our organization?</h4>
                <a class="btn btn_primary" href="/donate">Donate</a>
            </div>
        </div>
    </div>
</div>