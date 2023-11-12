<?php
/*
Template Name: Home
*/
 get_header();  ?>

        <!-- hero section start -->
        <section class="hero-section" style="max-width: 100%">
            <div class="container-fluid slider-box">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/shadow-logo.png" alt="Your Logo" class="logo">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <?php if( have_rows('banner_slider') ): 
                            $i=0;    
                            $active;
                            ?>
                            
                            <?php while( have_rows('banner_slider') ): the_row(); 
                                $image = get_sub_field('image');
                                if($i== 0){
                                    $active = "active";
                                }else{
                                     $active = "";
                                }
                                ?>
                                 <div class="carousel-item <?php echo $active;?>" >
                                    <img src="<?php echo $image['url'];?>" class="d-block w-100" >
                                </div>
                                
                            <?php 
                        $i++;
                        endwhile; ?>
                           
                        <?php endif; ?>
                       
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- hero section start -->

        <!-- post content start -->
        <div class="post-content">
            <style>
 


             </style>   
            <!-- home post section start -->
            <section class="home-post position-relative">
                <div class="container py-3 px-5">
                    <h1 class="home-title mx-4 mb-0 text-center"><?php the_field('main_title');?></h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/ice.png"  class="ice_cream-image" alt="Image Description">
                </div>
            </section>
            <!-- home post section end -->

            <!-- home ice cream row start -->
            <section class="home-ice-cream">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-7 img-col">
                            <?php 
                                $image = get_field('image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            
                        </div>
                        <div class="col-12 col-md-12 col-lg-5 content-col text-center py-lg-5 py-3 pe-lg-5 pe-auto">
                            <div class="title-container me-lg-5 me-0 pe-lg-4 pe-0">
                                <h2 class="icecream-title py-lg-4 py-3"><?php the_field('sub_title');?>
                                </h2>
                                <p class="icecream-description py-3 mb-1">
                                    <?php the_field('description');?>
                                </p>
                                <a href="<?php the_field('button_link');?>" class="btn book-btn rounded fw-bold" ><?php the_field('button_text');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home ice cream row end -->
        </div>
        <!-- post content end -->

    </div>
    <!-- main wrapper end -->


<?php get_footer(); ?>