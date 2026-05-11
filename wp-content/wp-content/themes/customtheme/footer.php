<footer class="sec-padding">
            <div class=" container ">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="fo-2">
                            <div class="footer-logo">
                                <h3>About Our Store</h3>
                            </div>
                            <p> Welcome to our store, where we pride ourselves on providing exceptional products and
                                unparalleled customer service our store is a haven for those who appreciate quality,
                                style,
                                and innovation. </p>
                            <div class="footer-icons">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-img.png" alt="">
                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-links">
                            <h3>Quick Links</h3>
                          	<?php
							 wp_nav_menu( array(
									'theme_location' => 'footer_quick',
								) );
							?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-links">
                            <h3>Your Account </h3>
                           	<?php
							 wp_nav_menu( array(
									'theme_location' => 'footers_account',
								) );
							?>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="footer-contact  ">
                            <h3>Contact</h3>

                            <div class="contact-links">
                                <div class="icons">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <h4>60 29th Street San Francisco, 507-Union Trade Center, United States America - 94110
                                </h4>
                            </div>
                            <div class="contact-links">
                                <div class="icons">
                                    <i class="fa-solid fa-tty"></i>
                                </div>
                                <h4>(+91)-012-345-6789</h4>
                            </div>
                            <div class="contact-links">
                                <div class="icons">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                                <h4>(+91) 9876-543-210</h4>
                            </div>
                            <div class="contact-links">
                                <div class="icons">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <h4>support@demo.com</h4>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="end-icons">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                            <div class="footer-bottom-copy ">
                                <p>© 2026 Honeypot Demo - WordPress Theme by <span><a href="#">Avanam</a></span></p>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iamge-footer-end">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <div class="menu-overlay"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Swiper JS init -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });


        $('.responsives').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="slick-prev"><i class="fas fa-angle-left"></i></div>',
            nextArrow: '<div class="slick-next"><i class="fas fa-angle-right"></i></div>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }

            ]
        });

        $('.res-testimonials').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<div class="slick-prev"><i class="fas fa-angle-left"></i></div>',
            nextArrow: '<div class="slick-next"><i class="fas fa-angle-right"></i></div>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }

            ]
        });

        $('.logos-sec').slick({

            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 6,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });

        $('.mobile-toggle').on('click', function () {
            $('.navBar-container').addClass('active');
            $('.menu-overlay').addClass('active');
            $('.nav-item.dropdown').removeClass('active'); // Close all dropdowns when opening menu
        });

        $('.close-menu, .menu-overlay').on('click', function () {
            $('.navBar-container').removeClass('active');
            $('.menu-overlay').removeClass('active');
            $('.nav-item.dropdown').removeClass('active'); // fix
        });

        $('.nav-item.dropdown > a').on('click', function (e) {
            if ($(window).width() <= 1024) {
                e.preventDefault();
                e.stopPropagation();

                var parent = $(this).parent();

                $('.nav-item.dropdown').not(parent).removeClass('active');

                parent.toggleClass('active');
            }
        });


    </script>
</body>

</html>