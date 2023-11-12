<?php
/*
Template Name: Ice Cream
*/
 get_header();  ?>
<!-- post content start -->
        <div class="post-content mb-5" style="max-width: 100%">
            <div class="container-fluid webvintage">
                <?php
                    // Check if the post has a featured image
                    if (has_post_thumbnail()) {
                        // Get the featured image HTML markup
                        $featured_image = get_the_post_thumbnail_url();
                     ?>   
                        <div class="banner-img webpage1" style="background-image: url(<?php echo  $featured_image;?>);">
                    <?php } else { ?>
                       
                        <div class="banner-img webpage1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/slider1.png);">
                    <?php }
                    ?>
                
                    <div class="banner-text">
                        <div class="row">
                            <div class="right-side-icecream text-center">
                                <div class="banner-info text-center m-auto">
                                    <div class="logo-info text-center m-auto">
                                           <?php 
                                                $image = get_field('image');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="" class="banner-logo w-100 text-center m-auto">
                                                <?php endif; ?>
                                            </div>

                                    <h3 class="vintage-title mt-4 pt-1 fs3 fst-italic lh-sm text-center px-2"><?php the_field('banner_title');?></h3>
                                    <div class="contact-information pt-4">
                                        <p class="vintage-des px-4"><?php the_field('banner_description');?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="left-side-icecream text-center">
                            </div>
                        </div>
                    </div>
                </div>

                <section class="home-post position-relative">
                    <div class="container home-post-below py-3 px-5">
                        <h1 class="home-title mx-4 mb-0 text-center"><?php the_field('main_title');?></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/ice.png"  class="ice_cream-image" alt="Image Description">
                    </div>
                </section>

                <div class="container ice-cream-flavours px-2 py-4">
                    <div class="row">
                        <?php if( have_rows('flavors') ): ?>
                            
                            <?php while( have_rows('flavors') ): the_row(); 
                                $image = get_sub_field('image');
                                ?>
                               
                                <div class="col-lg-4">
                                    <div class="flavours px-5">
                                        <img src="<?php echo $image['url'];?>" alt="" class="w-100">
                                        <h3 class="flavours-title mt-4 fs3 fst-italic lh-sm text-center px-2"><?php the_sub_field('flavor'); ?></h3>
                                        <div class="contact-line faq-line pt-3"></div>
                                        <p class="vintage-des text-center pt-4"><?php the_sub_field('description'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                           
                        <?php endif; ?>
                        

                        

                        
                    </div>
                </div>

                <div class="container waymans-special-section px-5 py-4">
                    <div class="row">
                        <div class="special-box d-flex p-4">
                            <div class="col-lg-6 col-md-12 col-sm-12 special-box-left">
                                <div class="special-left-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/ice-chocklet.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 special-box-right">
                                <div class="special-right-info pt-5">
                                    <div class="logo-info text-center m-auto">
                                        <?php 
                                        $image = get_field('waymans_specials_image');
                                        if( !empty( $image ) ): ?>
                                           
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="" class="banner-logo w-100 text-center m-auto">
                                        <?php endif; ?>
                                        
                                    </div>
                                    <h3 class="mt-4 pt-1 fs3 fst-italic lh-sm text-center special-title px-2">WAYMAN'S
                                        SPECIALS !</h3>
                                    <div class="contact-line webvintage-line"></div>
                                    <div class="contact-information pt-3">
                                        <p class="faq-des text-center"><?php the_field('waymans_specials'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- post content end -->

    </div>
    <!-- main wrapper end -->



<?php get_footer(); ?>