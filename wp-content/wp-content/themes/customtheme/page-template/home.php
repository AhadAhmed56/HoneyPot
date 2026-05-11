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
                    <div class=" cards">
                        <div class=" money-card">
								
								<?php
									foreach($feature_svg as $feature_item){
								?>
                            <div class="image-svg">
                                 <?php echo $feature_item['img-box']; ?>
                            </div>
                            <div class="card-body">
                                	<?php echo $feature_item['text-box']; ?>
                            </div>
							<?php } ?>
                        </div>
						 <div class=" money-card">
								
								<?php
									foreach($feature_svg as $feature_item){
								?>
                            <div class="image-svg">
                                 <?php echo $feature_item['img-box']; ?>
                            </div>
                            <div class="card-body">
                                	<?php echo $feature_item['text-box']; ?>
                            </div>
							<?php } ?>
                        </div>
						 <div class=" money-card">
								
								<?php
									foreach($feature_svg as $feature_item){
								?>
                            <div class="image-svg">
                                 <?php echo $feature_item['img-box']; ?>
                            </div>
                            <div class="card-body">
                                	<?php echo $feature_item['text-box']; ?>
                            </div>
							<?php } ?>
                        </div>
						 <div class=" money-card">
								
								<?php
									foreach($feature_svg as $feature_item){
								?>
                            <div class="image-svg">
                                 <?php echo $feature_item['img-box']; ?>
                            </div>
                            <div class="card-body">
                                	<?php echo $feature_item['text-box']; ?>
                            </div>
							<?php } ?>
                        </div>
                      
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- card-sec-end -->
        <!-- sales-sec-start -->
        <section class="sales sec-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-2 mb-md-0">
                        <div class="cotent-image">
								<?php
									foreach($bg_image as $bg_item){
								?>
                            <div class="image">
                                <a href="javascripts:void(0)">
                                    <img src="<?php echo $bg_item['bg_img']['url']; ?> "alt="<?php echo $bg_item['bg_img'] ['url']?>">
                                </a>
                            </div>
                            <div class="content">
                               <?php echo $bg_item['text_bg']; ?>
                                <a href="<?php echo $bg_item['bg_button'] ['url']?>" class="btn-black mt-3 btn-hover">
                                    <?php echo $bg_item['bg_button'] ['title']?>
                                </a>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                    
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
                            <h4>Why Choose Us</h4>
                            <h2>Why Choose Our Products</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="our-product-content our-product-content-1">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 310.09 279.96">
                                        <path
                                            d="M211.75,195.72c-2.17,10.51-3.79,20.74-6.44,30.69-3.82,14.38-10,27.71-20.23,38.84-6.84,7.46-14.88,12.91-25.2,14.35-11.6,1.62-21.42-2.39-30-9.84-11.79-10.25-19-23.58-23.27-38.23-3.18-10.84-4.75-22.16-7-33.26-.16-.8-.28-1.6-.58-3.33-1.59,2.65-2.71,4.54-3.86,6.42-11.24,18.44-31.8,28.16-52,24.58C21.37,222.09,5.48,206.67,1,185a50.49,50.49,0,0,1,30.27-56.43c22.07-9,44.39-17.38,66.6-26,1.61-.63,3.22-1.28,5-2-7.45-26.14-.63-47.6,21.45-65-2.94-3.71-5.34-8.18-9-11-6.08-4.67-13-8.24-19.5-12.37-1.73-1.1-4-2.3-4.59-4s-.23-4.81,1-6S96.79-.13,98.49.53c14.55,5.57,27.18,13.74,35,27.88.36.64.77,1.26,1.22,2a56,56,0,0,1,40.72-.12c2.38-3.43,4.47-7,7.07-10.1C190.17,10.94,200.25,5,211.26.54a5.94,5.94,0,0,1,8.1,3.21c1.24,3.15-.24,6.08-3.71,7.94-5.6,3-11.35,5.81-16.62,9.31a32.8,32.8,0,0,0-12.45,15c21.28,16.69,28.35,38.21,20.82,64.6l36,14c11.28,4.39,22.58,8.75,33.83,13.21,22.7,9,35.17,30,32.51,54.56C307.38,204,289.57,222.18,266.9,226c-19.47,3.28-39.85-5.93-50.7-22.94C214.67,200.66,213.24,198.19,211.75,195.72ZM169,98.57l13.2,22.65c14.3,24.47,28.53,49,42.91,73.42,9.49,16.13,27.25,23.34,44.65,18.39,16.31-4.64,27.5-18.83,28.44-36.07.88-16-9.11-31.58-24.58-37.7-21.24-8.4-42.56-16.57-63.84-24.84ZM141,98.78c-7.55,2.91-14.38,5.54-21.19,8.19-28.13,11-56.43,21.47-84.31,33-27.33,11.29-31.57,48.61-8,66.49,18.84,14.33,45.22,9.29,57.43-11.34,18.37-31,36.43-62.25,54.62-93.39C139.87,101,140.2,100.26,141,98.78Zm-26.2-2.86c1.22-.43,2.49-.85,3.74-1.33C129.3,90.4,140.14,86.27,150.91,82a10.34,10.34,0,0,1,8.27-.11c8.91,3.59,17.89,7,26.84,10.46,3.22,1.24,6.45,2.44,9.65,3.65,7-16.22.5-37.44-14.58-48.78a43.26,43.26,0,0,0-53.15,1C113.71,59.76,107.66,81.29,114.75,95.92Zm85.49,94.36H110.08c2.07,10.73,4,21,6.13,31.2a3.61,3.61,0,0,0,2.76,2.08q36.17.18,72.32,0a3.7,3.7,0,0,0,2.81-2C196.24,211.32,198.16,201.05,200.24,190.28Zm-89.8-12.68H200a28.84,28.84,0,0,0-1.67-4.94c-5-8.66-10.07-17.23-15-25.89a4.09,4.09,0,0,0-4.08-2.44c-16,.09-32,0-48,.15a5.57,5.57,0,0,0-4,2.24c-5.27,8.62-10.33,17.36-15.36,26.13C111.14,174.15,111,175.79,110.44,177.6Zm10.63,58.29c3.89,9.19,8.57,17.33,15.64,23.88,12,11.09,25.51,10.93,37.34-.39,6.23-6,10.58-13.22,14.12-21a17.48,17.48,0,0,0,.71-2.49Zm53.69-103.68c-6.68-11.42-13-22.22-19.62-33.51l-19.55,33.51Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h3>Honey Production</h3>
                                    <p>Lorem Ipsum is simply dummy <br> the printin industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="our-product-content our-product-content-2">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 310.09 279.96">
                                        <path
                                            d="M211.75,195.72c-2.17,10.51-3.79,20.74-6.44,30.69-3.82,14.38-10,27.71-20.23,38.84-6.84,7.46-14.88,12.91-25.2,14.35-11.6,1.62-21.42-2.39-30-9.84-11.79-10.25-19-23.58-23.27-38.23-3.18-10.84-4.75-22.16-7-33.26-.16-.8-.28-1.6-.58-3.33-1.59,2.65-2.71,4.54-3.86,6.42-11.24,18.44-31.8,28.16-52,24.58C21.37,222.09,5.48,206.67,1,185a50.49,50.49,0,0,1,30.27-56.43c22.07-9,44.39-17.38,66.6-26,1.61-.63,3.22-1.28,5-2-7.45-26.14-.63-47.6,21.45-65-2.94-3.71-5.34-8.18-9-11-6.08-4.67-13-8.24-19.5-12.37-1.73-1.1-4-2.3-4.59-4s-.23-4.81,1-6S96.79-.13,98.49.53c14.55,5.57,27.18,13.74,35,27.88.36.64.77,1.26,1.22,2a56,56,0,0,1,40.72-.12c2.38-3.43,4.47-7,7.07-10.1C190.17,10.94,200.25,5,211.26.54a5.94,5.94,0,0,1,8.1,3.21c1.24,3.15-.24,6.08-3.71,7.94-5.6,3-11.35,5.81-16.62,9.31a32.8,32.8,0,0,0-12.45,15c21.28,16.69,28.35,38.21,20.82,64.6l36,14c11.28,4.39,22.58,8.75,33.83,13.21,22.7,9,35.17,30,32.51,54.56C307.38,204,289.57,222.18,266.9,226c-19.47,3.28-39.85-5.93-50.7-22.94C214.67,200.66,213.24,198.19,211.75,195.72ZM169,98.57l13.2,22.65c14.3,24.47,28.53,49,42.91,73.42,9.49,16.13,27.25,23.34,44.65,18.39,16.31-4.64,27.5-18.83,28.44-36.07.88-16-9.11-31.58-24.58-37.7-21.24-8.4-42.56-16.57-63.84-24.84ZM141,98.78c-7.55,2.91-14.38,5.54-21.19,8.19-28.13,11-56.43,21.47-84.31,33-27.33,11.29-31.57,48.61-8,66.49,18.84,14.33,45.22,9.29,57.43-11.34,18.37-31,36.43-62.25,54.62-93.39C139.87,101,140.2,100.26,141,98.78Zm-26.2-2.86c1.22-.43,2.49-.85,3.74-1.33C129.3,90.4,140.14,86.27,150.91,82a10.34,10.34,0,0,1,8.27-.11c8.91,3.59,17.89,7,26.84,10.46,3.22,1.24,6.45,2.44,9.65,3.65,7-16.22.5-37.44-14.58-48.78a43.26,43.26,0,0,0-53.15,1C113.71,59.76,107.66,81.29,114.75,95.92Zm85.49,94.36H110.08c2.07,10.73,4,21,6.13,31.2a3.61,3.61,0,0,0,2.76,2.08q36.17.18,72.32,0a3.7,3.7,0,0,0,2.81-2C196.24,211.32,198.16,201.05,200.24,190.28Zm-89.8-12.68H200a28.84,28.84,0,0,0-1.67-4.94c-5-8.66-10.07-17.23-15-25.89a4.09,4.09,0,0,0-4.08-2.44c-16,.09-32,0-48,.15a5.57,5.57,0,0,0-4,2.24c-5.27,8.62-10.33,17.36-15.36,26.13C111.14,174.15,111,175.79,110.44,177.6Zm10.63,58.29c3.89,9.19,8.57,17.33,15.64,23.88,12,11.09,25.51,10.93,37.34-.39,6.23-6,10.58-13.22,14.12-21a17.48,17.48,0,0,0,.71-2.49Zm53.69-103.68c-6.68-11.42-13-22.22-19.62-33.51l-19.55,33.51Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h3>Honey Production</h3>
                                    <p>Lorem Ipsum is simply dummy <br> the printin industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="our-product-content our-product-content-3">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 310.09 279.96">
                                        <path
                                            d="M211.75,195.72c-2.17,10.51-3.79,20.74-6.44,30.69-3.82,14.38-10,27.71-20.23,38.84-6.84,7.46-14.88,12.91-25.2,14.35-11.6,1.62-21.42-2.39-30-9.84-11.79-10.25-19-23.58-23.27-38.23-3.18-10.84-4.75-22.16-7-33.26-.16-.8-.28-1.6-.58-3.33-1.59,2.65-2.71,4.54-3.86,6.42-11.24,18.44-31.8,28.16-52,24.58C21.37,222.09,5.48,206.67,1,185a50.49,50.49,0,0,1,30.27-56.43c22.07-9,44.39-17.38,66.6-26,1.61-.63,3.22-1.28,5-2-7.45-26.14-.63-47.6,21.45-65-2.94-3.71-5.34-8.18-9-11-6.08-4.67-13-8.24-19.5-12.37-1.73-1.1-4-2.3-4.59-4s-.23-4.81,1-6S96.79-.13,98.49.53c14.55,5.57,27.18,13.74,35,27.88.36.64.77,1.26,1.22,2a56,56,0,0,1,40.72-.12c2.38-3.43,4.47-7,7.07-10.1C190.17,10.94,200.25,5,211.26.54a5.94,5.94,0,0,1,8.1,3.21c1.24,3.15-.24,6.08-3.71,7.94-5.6,3-11.35,5.81-16.62,9.31a32.8,32.8,0,0,0-12.45,15c21.28,16.69,28.35,38.21,20.82,64.6l36,14c11.28,4.39,22.58,8.75,33.83,13.21,22.7,9,35.17,30,32.51,54.56C307.38,204,289.57,222.18,266.9,226c-19.47,3.28-39.85-5.93-50.7-22.94C214.67,200.66,213.24,198.19,211.75,195.72ZM169,98.57l13.2,22.65c14.3,24.47,28.53,49,42.91,73.42,9.49,16.13,27.25,23.34,44.65,18.39,16.31-4.64,27.5-18.83,28.44-36.07.88-16-9.11-31.58-24.58-37.7-21.24-8.4-42.56-16.57-63.84-24.84ZM141,98.78c-7.55,2.91-14.38,5.54-21.19,8.19-28.13,11-56.43,21.47-84.31,33-27.33,11.29-31.57,48.61-8,66.49,18.84,14.33,45.22,9.29,57.43-11.34,18.37-31,36.43-62.25,54.62-93.39C139.87,101,140.2,100.26,141,98.78Zm-26.2-2.86c1.22-.43,2.49-.85,3.74-1.33C129.3,90.4,140.14,86.27,150.91,82a10.34,10.34,0,0,1,8.27-.11c8.91,3.59,17.89,7,26.84,10.46,3.22,1.24,6.45,2.44,9.65,3.65,7-16.22.5-37.44-14.58-48.78a43.26,43.26,0,0,0-53.15,1C113.71,59.76,107.66,81.29,114.75,95.92Zm85.49,94.36H110.08c2.07,10.73,4,21,6.13,31.2a3.61,3.61,0,0,0,2.76,2.08q36.17.18,72.32,0a3.7,3.7,0,0,0,2.81-2C196.24,211.32,198.16,201.05,200.24,190.28Zm-89.8-12.68H200a28.84,28.84,0,0,0-1.67-4.94c-5-8.66-10.07-17.23-15-25.89a4.09,4.09,0,0,0-4.08-2.44c-16,.09-32,0-48,.15a5.57,5.57,0,0,0-4,2.24c-5.27,8.62-10.33,17.36-15.36,26.13C111.14,174.15,111,175.79,110.44,177.6Zm10.63,58.29c3.89,9.19,8.57,17.33,15.64,23.88,12,11.09,25.51,10.93,37.34-.39,6.23-6,10.58-13.22,14.12-21a17.48,17.48,0,0,0,.71-2.49Zm53.69-103.68c-6.68-11.42-13-22.22-19.62-33.51l-19.55,33.51Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h3>Honey Production</h3>
                                    <p>Lorem Ipsum is simply dummy <br> the printin industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="our-product-content our-product-content-4">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 310.09 279.96">
                                        <path
                                            d="M211.75,195.72c-2.17,10.51-3.79,20.74-6.44,30.69-3.82,14.38-10,27.71-20.23,38.84-6.84,7.46-14.88,12.91-25.2,14.35-11.6,1.62-21.42-2.39-30-9.84-11.79-10.25-19-23.58-23.27-38.23-3.18-10.84-4.75-22.16-7-33.26-.16-.8-.28-1.6-.58-3.33-1.59,2.65-2.71,4.54-3.86,6.42-11.24,18.44-31.8,28.16-52,24.58C21.37,222.09,5.48,206.67,1,185a50.49,50.49,0,0,1,30.27-56.43c22.07-9,44.39-17.38,66.6-26,1.61-.63,3.22-1.28,5-2-7.45-26.14-.63-47.6,21.45-65-2.94-3.71-5.34-8.18-9-11-6.08-4.67-13-8.24-19.5-12.37-1.73-1.1-4-2.3-4.59-4s-.23-4.81,1-6S96.79-.13,98.49.53c14.55,5.57,27.18,13.74,35,27.88.36.64.77,1.26,1.22,2a56,56,0,0,1,40.72-.12c2.38-3.43,4.47-7,7.07-10.1C190.17,10.94,200.25,5,211.26.54a5.94,5.94,0,0,1,8.1,3.21c1.24,3.15-.24,6.08-3.71,7.94-5.6,3-11.35,5.81-16.62,9.31a32.8,32.8,0,0,0-12.45,15c21.28,16.69,28.35,38.21,20.82,64.6l36,14c11.28,4.39,22.58,8.75,33.83,13.21,22.7,9,35.17,30,32.51,54.56C307.38,204,289.57,222.18,266.9,226c-19.47,3.28-39.85-5.93-50.7-22.94C214.67,200.66,213.24,198.19,211.75,195.72ZM169,98.57l13.2,22.65c14.3,24.47,28.53,49,42.91,73.42,9.49,16.13,27.25,23.34,44.65,18.39,16.31-4.64,27.5-18.83,28.44-36.07.88-16-9.11-31.58-24.58-37.7-21.24-8.4-42.56-16.57-63.84-24.84ZM141,98.78c-7.55,2.91-14.38,5.54-21.19,8.19-28.13,11-56.43,21.47-84.31,33-27.33,11.29-31.57,48.61-8,66.49,18.84,14.33,45.22,9.29,57.43-11.34,18.37-31,36.43-62.25,54.62-93.39C139.87,101,140.2,100.26,141,98.78Zm-26.2-2.86c1.22-.43,2.49-.85,3.74-1.33C129.3,90.4,140.14,86.27,150.91,82a10.34,10.34,0,0,1,8.27-.11c8.91,3.59,17.89,7,26.84,10.46,3.22,1.24,6.45,2.44,9.65,3.65,7-16.22.5-37.44-14.58-48.78a43.26,43.26,0,0,0-53.15,1C113.71,59.76,107.66,81.29,114.75,95.92Zm85.49,94.36H110.08c2.07,10.73,4,21,6.13,31.2a3.61,3.61,0,0,0,2.76,2.08q36.17.18,72.32,0a3.7,3.7,0,0,0,2.81-2C196.24,211.32,198.16,201.05,200.24,190.28Zm-89.8-12.68H200a28.84,28.84,0,0,0-1.67-4.94c-5-8.66-10.07-17.23-15-25.89a4.09,4.09,0,0,0-4.08-2.44c-16,.09-32,0-48,.15a5.57,5.57,0,0,0-4,2.24c-5.27,8.62-10.33,17.36-15.36,26.13C111.14,174.15,111,175.79,110.44,177.6Zm10.63,58.29c3.89,9.19,8.57,17.33,15.64,23.88,12,11.09,25.51,10.93,37.34-.39,6.23-6,10.58-13.22,14.12-21a17.48,17.48,0,0,0,.71-2.49Zm53.69-103.68c-6.68-11.42-13-22.22-19.62-33.51l-19.55,33.51Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h3>Honey Production</h3>
                                    <p>Lorem Ipsum is simply dummy <br> the printin industry.</p>
                                </div>
                            </div>
                        </div>
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

        <!-- Testimonials-sec-start -->
        <section class="Testimonials sec-padding">
            <div class="container">
                <div class="row">
                    <div class="text-center web-title ">
                        <h4>Our Testimonials</h4>
                        <h2>Our Client's Feedback</h2>
                    </div>
                </div>
                <div class="row res-testimonials">
                    <div class="col-lg-6">
                        <div class="testimonials-card">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>“Excellent product, A+ customer service.” </h3>
                                <p> It is a long established fact To the treader will readable content of a to page when
                                    looking a its layout the point desktop publishing readable english.</p>
                                <a href="#">Augusta Wind</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-card">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-2.png" alt="">
                            </div>
                            <div class="content">
                                <h3>“Excellent product, A+ customer service.” </h3>
                                <p> It is a long established fact To the treader will readable content of a to page when
                                    looking a its layout the point desktop publishing readable english.</p>
                                <a href="#">Augusta Wind</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-card">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-3.png" alt="">
                            </div>
                            <div class="content">
                                <h3>“Excellent product, A+ customer service.” </h3>
                                <p> It is a long established fact To the treader will readable content of a to page when
                                    looking a its layout the point desktop publishing readable english.</p>
                                <a href="#">Augusta Wind</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-card">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author-4.png" alt="">
                            </div>
                            <div class="content">
                                <h3>“Excellent product, A+ customer service.” </h3>
                                <p> It is a long established fact To the treader will readable content of a to page when
                                    looking a its layout the point desktop publishing readable english.</p>
                                <a href="#">Augusta Wind</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-sec-end -->

        <!--blog-start  -->
        <section class="blog sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center web-title mb-4">
                            <h4 class="text-center">From The Blog</h4>
                            <h2 class="text-center">Our Latest Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="blog-content-img">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="#">FEBRUARY 9, 2025 . BY EDITOR</a>
                                <h3> <a href="#">How to Write a Blog Post Your Readers Will Love in 5 Steps</a></h3>
                                <p>Why the world would end without travel coupons. The 16 worst songs about spa deals.….
                                </p>
                                <button class="btn-main">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="blog-content-img">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="#">FEBRUARY 9, 2025 . BY EDITOR</a>
                                <h3> <a href="#">How to Write a Blog Post Your Readers Will Love in 5 Steps</a></h3>
                                <p>Why the world would end without travel coupons. The 16 worst songs about spa deals.….
                                </p>
                                <button class="btn-main">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="blog-content-img">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="#">FEBRUARY 9, 2025 . BY EDITOR</a>
                                <h3> <a href="#">How to Write a Blog Post Your Readers Will Love in 5 Steps</a></h3>
                                <p>Why the world would end without travel coupons. The 16 worst songs about spa deals.….
                                </p>
                                <button class="btn-main">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog-end  -->

        <!--logos-sec-start -->
        <section class="logos">
            <div class="container gx-0">
                <div class="row">
                    <div class="logos-sec">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-1.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-2.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-3.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-4.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-1.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-3.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-1.png" alt="">
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-2.png" alt="">
                        </div>
                    </div>
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