<?php
/*
Template Name: Garden Games
*/
 get_header();  ?>
<!-- post content start -->
        <div class="post-content">
            <div class="container-fluid contact-page">
                <div class="row">
                    <div class="left-side">
                        <div class="left-side-garden text-center">

                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo2.png" class="w-100" alt="">
                            
                            <h3 class="mt-4 pt-1 fs3 fst-italic lh-sm text-center gardern-main-title px-2"><?php the_field('main_title');?></h3>
                            <div class="contact-information pt-3">
                                <p class="faq-des"><?php the_field('description');?></p>
                                <div class="contact-send text-center pt-3">
                                    <a href="<?php the_field('button_link');?>" class="send-submit-garden btn btn-block mb-4 text-center px-5 py-3 fn-wg fs-6 bg3" style="color: #fff;"><?php the_field('button_text');?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-side">
                        <div class="right-side-garder ps-5 position-relative">
                            <div class="above-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/garden1.png" alt="">
                            </div>

                            <div class="below-image position-absolute end-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/garden2.png" alt="">
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