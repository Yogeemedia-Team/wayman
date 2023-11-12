<?php
/*
Template Name: FAQ
*/
 get_header();  ?>
<!-- post content start -->
        <div class="post-content">
            <div class="container-fluid contact-page">
                <div class="row">
                    <div class="left-side">
                        <div class="left-side-faq pe-2 text-center">

                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" class="w-100" alt="">
                            <h3 class="mt-3 fst-italic lh-sm text-center fs-4 px-3">HERE ARE OUR MOST FREQUENTLY ASKED QUESTIONS.</h3>
                            <div class="contact-line faq-line pt-4"></div>
                            <div class="contact-information pt-4">
                                <p class="faq-des">Still got questions? Email or give us a call on <?php the_field('company_telephone_number','option');?> and we’ll be happy to help!</p>
                                <div class="contact-send text-center pt-3">
                                    <a href="<?php echo get_home_url(); ?>/contact" class="contact-submit send-submit btn btn-block mb-4 text-center px-5 py-3 mainactive fn-wg fs2" style="color: #fff;">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-side">
                        <div class="right-side-faq">
                            <div class="faq-section pe-4">
                                <?php if( have_rows('faqs') ): ?>
                                   
                                    <?php while( have_rows('faqs') ): the_row(); ?>
                                          <div class="faq-section-items">
                                                <p class="question fw-bold mb-0"><?php the_sub_field('question'); ?></p>
                                                <p class="answer"><?php the_sub_field('answer'); ?></p>
                                          </div>
                                       
                                    <?php endwhile; ?>
                                   
                                <?php endif; ?>
                              

                                
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