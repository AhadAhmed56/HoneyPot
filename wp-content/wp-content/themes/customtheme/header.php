<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/faqs.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/privacy.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">

    <title>HoneyPot</title>
</head>

<body>

    <div class="wrapper">
        <!-- header -->
        <header>
            <div class="container ">
                <div class="row">
                    <div class="header-top d-flex align-items-center justify-content-center position-relative">

                        <div class="mobile-toggle d-lg-none">
                            <span><i class="fa-solid fa-bars"></i></span>
                        </div>
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Honeypot">
                            </a>
                        </div>

                        <div class="header-icon d-none d-lg-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-icon.png" alt="Bee Icon">
                        </div>

                        <div class="header-icons-mobile d-lg-none">
                            <div class="icons d-flex align-items-center">
                                <a href="#"><i class="fas fa-search"></i></a>
                                <a href="#"><i class="far fa-user"></i></a>
                                <a href="#" class="cart-icon">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="cart-count">0</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="navBar-container">
                        <div class="close-menu d-lg-none">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                <nav class="navBar">
                                    <?php
										wp_nav_menu( array(
											'theme_location' => 'header_menu',
										) );
									?>
                                </nav>
                                <!-- Icons (Desktop Only) -->
                                <div class="header-icons-desktop d-none d-lg-block">
                                    <div class="icons d-flex align-items-center">
                                        <a href="#"><i class="fas fa-search"></i></a>
                                        <a href="#"><i class="far fa-user"></i></a>
                                        
                                        <a href="#" class="cart-icon">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span class="cart-count">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </header>