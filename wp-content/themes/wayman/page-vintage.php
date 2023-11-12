<?php
/*
Template Name: Vintage Van
*/
 get_header();  ?>

<!-- post content start -->
        <div class="post-content" style="max-width: 100%">
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
                            <div class="right-side">

                            </div>
                            <div class="left-side text-center">
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
                        </div>
                    </div>
                </div>

                <section class="home-post position-relative">
                    <div class="container home-post-below py-3 px-5">
                        <h1 class="home-title mx-4 mb-0 text-center"><?php the_field('main_title');?></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/ice.png"  class="ice_cream-image" alt="Image Description">
                    </div>
                </section>

                <div class="container">
                    <div class="webvintage-below-section px-5 my-5">
<?php if( have_rows('events') ):
    $i = 1;
    $margin; 
    ?>
    
    <?php while( have_rows('events') ): the_row(); 
        $image = get_sub_field('image');
        ?>
       <?php if($i % 2 == 1){ ?>
        <?php if($i == 1){ 
        $margin = '';
        }else{ 
        $margin = 'mt-5';
         } ?>
                        <div class="row <?php echo $margin;?>">
                            <div class="col-lg-6 webvintage-below-left-side">
                                <div class="image-item">
                                    <img src="<?php echo $image['url'];?>" alt="" class="w-100">
                                </div>
                            </div>
    
                            <div class="col-lg-6 webvintage-below-right-side">
                                <h2 class="lh2 fst-italic lh-sm text-center fs1 ls1"><?php the_sub_field('event_title'); ?></h2>
                                <div class="contact-line webvintage-line"></div>
                                <p class="vintage-image-des pt-4 px-5 text-center"><?php the_sub_field('event_description'); ?></p>
                                <div class="contact-send text-center pt-3">
                                      <a href="<?php the_sub_field('button_link'); ?>"
                                        class="btn btn-block mb-4 text-center px-5 py-3 mainactive fn-wg fs2"
                                        style="color: #fff;"><?php the_sub_field('button_text'); ?>
    </a>
                                </div>
                            </div>
                        </div>
       
    <?php }else{ ?>
        <div class="row <?php echo $margin;?>">
                            <div class="col-lg-6 webvintage-below-right-side">
                                <h2 class="lh2 fst-italic lh-sm text-center fs1 ls1"><?php the_sub_field('event_title'); ?></h2>
                                <div class="contact-line webvintage-line"></div>
                                <p class="vintage-image-des pt-4 px-5 text-center"><?php the_sub_field('event_description'); ?></p>
                                <div class="contact-send text-center pt-3">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                        class="btn btn-block mb-4 text-center px-5 py-3 mainactive fn-wg fs2"
                                        style="color: #fff;"><?php the_sub_field('button_text'); ?>
    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 webvintage-below-left-side">
                                <div class="image-item">
                                    <img src="<?php echo $image['url'];?>" alt="" class="w-100">
                                </div>
                            </div>
                        </div>
    <?php }    
$i++;
endwhile; ?>
    
<?php endif; ?>
                        
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- post content end -->

    </div>
    <!-- main wrapper end -->


<?php get_footer(); ?>