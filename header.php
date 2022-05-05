<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alt Valley Community Trust</title>
    <link rel="shortcut icon" href="assets/images/x-icon.png" type="image/x-icon">

    <?php
        wp_head();
    ?>
</head>
<body>

    <!-- preloader start here -->
    <div class="preloader d-none">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->

    <!-- header section start here -->
    <header class="header-section style-3">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <div class="header-top-contact">
                        <a href="<?php the_field('header_cta', 'option'); ?>" class="lab-btn"><span><?php the_field('header_cta_text', 'option'); ?></span></a>
                        <a href="tel:<?php the_field('avct_number', 'option'); ?>"><?php the_field('avct_number', 'option'); ?></a>
                        <a href="mailto:<?php the_field('avct_email', 'option'); ?>"><?php the_field('avct_email', 'option'); ?></a>
                    </div>
                    <div class="header-top-reglog">
                        <a href="<?php the_field('head_cta_one', 'option'); ?>" class="login"><?php the_field('head_link_one', 'option'); ?></a>
                        <a href="<?php the_field('head_cta_two', 'option'); ?>" class="signup"><?php the_field('head_link_two', 'option'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo-search-acte">
                        <div class="logo">
                        <?php  
                            $logo = get_field('site_logo', 'option');
                        ?>
                            <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>"><img src="<?php echo $logo; ?>"></a>
                        </div>
                    </div>
                    <div class="menu-area">
                        <div class="menu">
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'menu' => 'primary',
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul id="" class="lab-ul">%3$s</ul>'
                                    )
                                );
                            ?>
                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->