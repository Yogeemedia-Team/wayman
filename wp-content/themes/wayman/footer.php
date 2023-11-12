<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wayman
 */

?>
    <!-- footer start -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12"></div>
                <div class="col-lg-3 col-md-6 col-sm-12"></div>
                <div class="col-lg-3 col-md-6 col-sm-12"></div>
                <div class="col-lg-3 col-md-6 col-sm-12"></div>
            </div>
        </div>
        <div class="container-fluid copyright-wrapper text-center pt-3">
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="footer-logo">
						<?php 
						$image = get_field('footer_logo','option');
						if( !empty( $image ) ){ ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php }else{ ?>
							<p style="color: #fff;">Note : Please upload footer logo</p>
						<?php } ?>
                        
                    </div>
                    <div class="col pt-5">
                        <p class="pt-3" style="color: #fff; font-size: 12px; line-height: 15px;">
                            &copy; Wayman's Ice Creams Ltd, Southend on sea, Essex <br>
                            Website by <a target="_blank" title="Click to visit" href="#" style="color: #fff;">
                                designfolk
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
    <!-- main js -->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/js/script.js"></script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    

    <!-- data aos js cdn -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
	



<?php wp_footer(); ?>

</body>
</html>


