<?php 
// Template name: Home
get_header();
?>

<?php
$banner = get_field('banner');
$banner_slide = $banner['banner_slide'];
// echo '<pre>';
// print_r($banner);
// echo '</pre>';
?>
<?php 
$honeysale = get_field('honey_sale');
$bg_image = $honeysale['bg_image'];
?>

<?php
$honey_backg = get_field('honey_backg');
$hony_imgcon = $honey_backg['hony_imgcon'];
?>

<!-- end-header -->
        <section class="Banner-sec">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Swiper -->
                        <div class="swiper mySwiper Content-img">
                            <div class="swiper-wrapper">
								
								<?php
									foreach($banner_slide as $banner_item){
								?>
								
                                <!-- Slide 1 -->
                                <div class="swiper-slide ">
                                    <img src="<?php echo $banner_item['image']['url']; ?>" alt="<?php echo $banner_item['image']['alt']; ?>">
                                    <!-- Text overlay -->
                                    <div class="slide-content">
                                        <?php echo $banner_item['content']; ?>
                                        <a href="<?php echo $banner_item['button']['url']; ?>" class="btn-black mt-3 slide-fade btn-hover">
                                            <?php echo $banner_item['button']['title']; ?>
                                        </a>
                                    </div>
                                </div>
								
								<?php } ?>
                            </div>
                            <!-- Navigation buttons -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- Pagination bullets -->
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
$feature = get_field('feature_sec');
$feature_svg = $feature['content_box'];
// echo '<pre>';
// print_r($banner);
// echo '</pre>';
?>
        <!-- card-sec-start -->
        <section class="card-sec sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" text-center web-title">
 								<?php echo $feature['text']; ?>
                        </div>
                    </div>
                </div>
                <div class="row ">
								<?php
									foreach($feature_svg as $feature_item){
								?>
                    <div class=" col-lg-3 col-md-6  cards">
                        <div class=" money-card">
                            <div class="image-svg">
                                 <?php echo $feature_item['img-box']; ?>
                            </div>
                            <div class="card-body">
                                	<?php echo $feature_item['text-box']; ?>
                            </div>
                        </div>
							
                    </div>
					<?php } ?>
                </div>
            </div>
        </section>
        <!-- card-sec-end -->
        <!-- sales-sec-start -->
        <section class="sales sec-padding">
            <div class="container ">
                <div class="row">
								<?php
									foreach($bg_image as $bg_item){
								?>
                    <div class="col-md-6 col-lg-6 mb-2 mb-md-0">
                        <div class="content-image">
                            <div class="image">
                                <a href="javascripts:void(0)">
                                    <img src="<?php echo $bg_item['bg_img']['url']; ?> "alt="<?php echo $bg_item['bg_img'] ['alt']?>">
                                </a>
                            </div>
                            <div class="content">
                               <?php echo $bg_item['text_bg']; ?>
                                <a href="<?php echo $bg_item['bg_button'] ['url']?>" class="btn-black mt-3 btn-hover">
                                    <?php echo $bg_item['bg_button'] ['title']?>
                                </a>
                            </div>
                        </div>
                    </div>
							<?php } ?>
                </div>
            </div>
        </section>
        <!-- sales-sec-end -->
        <!-- product-sec-start -->
        <section class="product sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class=" web-title text-center">
                            <h4>New Arrivals</h4>
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row responsives">
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/04-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/04-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-sec-end -->

        <!-- our-product-start -->
        <section class="our-porduct sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" web-title text-center">
                            <?php echo $honey_backg['sub_text']; ?>
                        </div>
                    </div>
				</div>
                    <div class="row">
								<?php
									foreach($hony_imgcon as $hony_imgcontent){
								?>
                        <div class="col-lg-6">
                            <div class="our-product-content our-product-content-1">
                                <div class="svg">
                                  <?php echo $hony_imgcontent['text_bg']; ?>
                                </div>
                                <div class="content">
                                       <?php echo $hony_imgcontent['honey_con']; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
        </section>
        <!-- our-product-end -->
        <!-- about-start -->
			
<?php
$about = get_field('about_us'); 			
$about_box = $about['content_box'];			
?>			
			
        <section class="about sec-padding">
            <div class="container ">
                <div class="row gx-0">
                    <div class="col-lg-6 gx-0 mb-4 mb-lg-0">
                        <div class="image">
                            <img src="<?php echo $about['image']['url']; ?>" alt="<?php echo $about['image']['alt']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="about-content">
                            <div class="content web-title">
                                <?php echo $about['content']; ?>
                            </div>
                            <div class="l-r-content">
								
								<?php
									foreach($about_box as $about_item){
								?>
								
                                <div class="l-content">
                                    <?php echo $about_item['content']; ?>
                                </div>
								
								<?php } ?>
								
                            </div>
                            <a href="<?php echo $about['button']['url']; ?>" class="btn-black"><?php echo $about['button']['title']; ?></a>
                            <!-- <button class="btn-main">Read More</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-end -->
        <!-- product-sec-start -->
        <section class="product sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center web-title">
                            <h4>New Arrivals</h4>
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row responsives">
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/04-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/04-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    ADD TO CART
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-content">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03-1-460x460.jpg" class="img-main">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06-1-460x460.jpg" class="img-hover">
                            </div>

                            <div class="content">
                                <a href="#">
                                    <h4>A Glass Jar Of Honey With Dipper Resting On Top Surrounded</h4>
                                </a>
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <h5>$20</h5>
                                <button class="btn-main">
                                    <i class="fas fa-cart-plus"></i>
                                    Select Options
                                </button>
                            </div>
                            <div class="icons">
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"><i class="fas fa-heart"></i></a>
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-sec-end -->


<?php 
$testimonials = get_field('testimonials');
$testimonials_cont = $testimonials['testimonials_cont'];
?>

        <!-- Testimonials-sec-start -->
        <section class="Testimonials sec-padding">
            <div class="container">
                <div class="row">
                    <div class="text-center web-title ">
                        <?php echo $testimonials['tes_text'] ?>
                    </div>
                </div>
                <div class="row res-testimonials">
								<?php
									foreach($testimonials_cont as $testimonials_content){
								?>
                    <div class="col-lg-6">
								
                        <div class="testimonials-card">
                            <div class="image">
                                 <img src="<?php echo $testimonials_content['testimonials_img']['url']; ?>" alt="<?php echo $testimonials_content['testimonials_img']['alt'] ?>">
                            </div>
                            <div class="content">
                               <?php echo $testimonials_content['testimonials_texcon']?>
                                <a href="<?php echo $testimonials_content['testimonials_link']['url'] ?>" class="btn-black mt-3 btn-hover">
                                    <?php echo $testimonials_content['testimonials_link']['title'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
                </div>
            </div>
        </section>
        <!-- Testimonials-sec-end -->


<?php 
$blog_sec = get_field('blog_sec');
$blog_card = $blog_sec['blog_card'];
?>
        <!--blog-start  -->
        <section class="blog sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center web-title mb-4">
                           <?php echo $blog_sec['blog_text']?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($blog_card as $blog_cards) {
                        ?>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="blog-content-img">
                                <div class="image">
                                    <img src="<?php echo $blog_cards['blog_img']['url']; ?>"
                                        alt="<?php echo $blog_cards['blog_img']['alt'] ?>">
                                </div>
                                <div class="content">
                                    <span class="blog-meta"><?php echo $blog_cards['blog_contex']; ?></span>
                                    <h3 class="blog-title"><a href="<?php echo $blog_cards['blog_link']['url']; ?>"><?php echo $blog_cards['blog_link']['title']; ?></a></h3>
                                    <p class="blog-excerpt"><?php echo $blog_cards['blog_cotext']; ?></p>
                                    <a href="<?php echo $blog_cards['blog_button']['url']; ?>" class="btn-main mt-2">
                                        <?php echo $blog_cards['blog_button']['title']; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--blog-end  -->
<?php 
$logos_sec = get_field('logos_sec');
$logos_ = $logos_sec ['logos_'];
?>

<!--logos-sec-start -->
<section class="logos logos-sec" style="padding: 40px 0;">
    <div class="container gx-0">
        <div class="row justify-content-center align-items-center">
            <?php
            foreach ($logos_ as $logos_imgs) {
                ?>
                <div class="col-lg-2 col-md-4 col-6 text-center mb-4 logos-sec">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo $logos_imgs['logos_img']['url']; ?>"
                                alt="<?php echo $logos_imgs['logos_img']['alt'] ?>"
                                width="130">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--logos-sec-end-->

        <!-- .contact-sec-start -->
        <section class="contact sec-padding">
            <div class="container gx-0">
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