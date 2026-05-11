<?php
// Template name: About
 get_header();
?>

  <section class="Banner-sec-about" 
style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-breadcumb-bkg.jpg'); 
background-size: cover; 
background-position: center; 
height: 400px;">
        <div class="container-fluid">
            <div class="row">

                <nav class="breadcrumb-about">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                    <h4>About Us</h4>
                </nav>

            </div>
        </div>
    </section>

    <!-- tab-sec-start -->
    <section class="tabsec sec-padding">
        <div class="container">
            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Development</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Qualified
                            team</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Strategy</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                            Latin
                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                            1.10.32
                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a
                            line in
                            section 1.10.32.

                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                            interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
                            reproduced
                            in their exact original form, accompanied by English versions from the 1914 translation by
                            H.
                            Rackham.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't
                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                            Internet tend to repeat predefined chunks as necessary, making this the first true generator
                            on
                            the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                            sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem
                            Ipsum
                            is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p>Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised
                            in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tab-sec-end -->

    <!-- grid-sec-start -->
    <section class="grid-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid-main">
                        <div class="grid-item one">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-01.jpg" alt="">
                            </a>

                        </div>
                        <div class="grid-item two">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-02.jpg" alt="" class="img-heg">
                            </a>

                        </div>
                        <div class="grid-item three">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-03.jpg" alt="">
                            </a>

                        </div>
                        <div class="grid-item four">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-04.jpg" alt="">
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grid-sec-end -->

    <!-- accordion-sec-start -->
    <section class="accordion-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordin-sec">
                        <div class="tab-contnet">
                            <div class="content">
                                <h4>Inspiration, Innovation,<br />
                                    And Opportunities.</h4>
                                <p>Many Desktop Publishing Packages And Web Page Editors Now Use Lorem Ipsum As Their
                                    Default Model Text.</p>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Business’s vision
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to
                                            style each element. These classes control the overall appearance, as well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Our mission
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><strong>This is the second item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to
                                            style each element. These classes control the overall appearance, as well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Our support
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to
                                            style each element. These classes control the overall appearance, as well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-banner-05.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- accordion-sec-end-->

    <!-- simple-card-sec-start -->
    <section class="simple-card sec-padding">
        <div class="container">
            <div class="row">
                <div class="card-group md">
                    <div class="card">
                        <div class="icons">
                            <i class="fa-regular fa-square-check"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Submit a task</a>
                            </h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icons">
                            <i class="fa-regular fa-comment"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Send message</a>
                            </h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icons">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Trusted experience</a>
                            </h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- simple-card-sec-end -->

    <!-- counter-sec-start -->
    <section class="counter-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="counter">
                        <h2>1000+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="counter">
                        <h2>500+</h2>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="counter">
                        <h2>200+</h2>
                        <p>Team Members</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter">
                        <h2>10+</h2>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-sec-end -->

    <!-- about-end-sec-start -->
    <section class="end-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="end-content">
                        <h3>Contact us </h3>
                        <h4>About us info</h4>
                        <p>It is a long-established fact that a reader will be distracted by the readable content of
                            a<br>
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less <br> normal distribution of letters, as opposed to using ‘Content here.</p>
                        <a href="#" class="btn ">Click Here to Contact us </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about-end-sec-end -->
    <!-- .contact-sec-start -->
    <section class="contact sec-padding">
        <div class="container">
            <div class="contact-box">
                <h3>Subscribe To Our Newsletter</h3>
                <p>Subscribe to our latest newsletter to get news about special discounts.</p>

                <div class="form-sec">
                    <input type="email" placeholder="Enter your email address">
                    <button class="btn-black btn-hover">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
 
<?php
get_footer();
?>