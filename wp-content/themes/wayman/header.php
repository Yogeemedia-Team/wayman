<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wayman
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/inc/img/home/favicon.png" type="image/x-icon">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gentium+Plus:wght@400;700&family=Inter:wght@200;400;600&display=swap"
        rel="stylesheet">

    <!-- data aos css cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- main css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- jQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- main wrapper start -->
    <div class="main-wrapper">

        <div class="flag-img d-flex justify-content-between position-absolute w-100" style="z-index: 2;">
            <div class="left-flag">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/flag-left.png" alt="left-flag">
            </div>
            <div class="right-flag">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/flag-right.png" alt="right-flag">
            </div>
        </div>

        <!-- header start -->
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
                <div class="container">
                    <!-- <a class="navbar-brand" href="#"><img src="https://picsum.photos/300/100" alt="logo"></a> -->
                    <button onclick="toggleBtn()" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars" onclick="changeIcon(this)"></span>
                    </button>
                    <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
						<?php
							// Inside your theme's template file, for example, header.php

							// The arguments for wp_nav_menu
							$args = array(
								'theme_location'  => 'primary',
								'depth'           => 2, // Adjust based on your needs
								'container'       => false,
								'menu_class'      => 'navbar-nav m-auto d-flex justify-content-evenly px-4',
								'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
								'walker'          => new wp_bootstrap_navwalker()
							);

							// Display the menu
							wp_nav_menu($args);


							?>




                        <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    </div>
                </div>
            </nav>
        </header>
        <!-- header end -->