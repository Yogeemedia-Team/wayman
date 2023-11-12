<?php
/*
Template Name: Contact us
*/
 get_header();  ?>

<!-- post content start -->
        <div class="post-content">
            <div class="container-fluid contact-page">
                <div class="row">
                    <div class="left-side">
                        <div class="left-side-contact pe-2 text-center">

                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" class="" alt="">
                            <h3 class="mt-3 fst-italic lh-sm text-center fs-4 px-3">WE'D LOVE TO HEAR FROM YOU ABOUT YOUR EVENT</h3>
                            <div class="contact-line"></div>
                            <div class="contact-information">
                                <p class="contact-email pt-4" style="color: #2177bc;"><?php the_field('company_email','option');?></p>
                                <p class="contact-number"><span>or call </span><?php the_field('company_telephone_number','option');?></p>
                                <div class="socialmedia-icon pt-2">
                                <?php if( have_rows('social_media','option') ): ?>
                                    <?php while( have_rows('social_media','option') ): the_row(); 
                                       
                                        ?>
                                         <span><a href="<?php the_sub_field('social_link'); ?>"><img src="<?php the_sub_field('social_image');?>"></a></span>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-side">
                        <div class="right-side-contact">
                            <div class="contact-form rounded">
                                <?php echo do_shortcode('[contact-form-7 id="36953df" title="Contact Form"]');?>
                                <!-- <form class="contact-info-form">

                                    <div class="form-group py-1">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" id="inputName" aria-describedby=""
                                            placeholder="">
                                    </div>

                                    <div class="form-group py-1">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="">
                                    </div>

                                    <div class="form-group py-1">
                                        <label for="inputPhoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" id="inputPhoneNumber" placeholder="">
                                    </div>

                                    <div class="form-group py-1">
                                        <label for="inputEvent">Type of Event</label>
                                        <input type="text" class="form-control" id="inputEvent" placeholder="">
                                    </div>

                                    <div class="form-group py-1">
                                        <label for="inputLogin">Location</label>
                                        <input type="text" class="form-control" id="inputLogin" placeholder="">
                                    </div>

                                    <div class="form-group py-1">
                                        <label for="inputDate">Date</label>
                                        <input type="text" class="form-control" id="inputDate" placeholder="">
                                    </div>

                                    <div class="form-group py-1">
                                        <label for="inputNoPeople">Number of People / Guests</label>
                                        <input type="text" class="form-control" id="inputNoPeople" placeholder="">
                                    </div>

                                    <div class="form-group py-1 d-flex">
                                        <div class="check-left">
                                            <label class="form-check-label" for="form1check1"> Ice Cream Van Hire: </label>
                                            <input class="form-check-input" type="checkbox" value="" id="form1check1"
                                                checked />
                                        </div>

                                        <div class="check-right px-5">
                                            <label class="form-check-label" for="form1check2"> Garden Games Hire: </label>
                                            <input class="form-check-input" type="checkbox" value="" id="form1check2"
                                                checked />
                                        </div>
                                    </div>

                                    <div class="form-group py-3">
                                        <label class="form-label" for="form4Example3">Message</label>
                                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                    </div>

                                    <div class="contact-send text-center pt-3">
                                        <button type="submit" class="send-submit btn btn-block mb-4 text-center px-5 py-2 mainactive fn-wg fs-6" style="color: #fff;">SEND</button>
                                    </div>
                                    

                                </form> -->
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