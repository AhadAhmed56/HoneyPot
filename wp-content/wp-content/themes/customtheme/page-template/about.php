<?php
// Template name: About
get_header();
?>

<?php
// Fetching Fields
$about_page = get_field('about_page');

?>

<!-- Banner Section -->
<section class="Banner-sec-about" style="background-image: url('<?php echo $about_page['banner_bg_image']['url'] ?: get_template_directory_uri() . '/assets/images/about-breadcumb-bkg.jpg'; ?>'); 
    background-size: cover; 
    background-position: center; 
    height: 400px;">
    <div class="container-fluid">
        <div class="row">
            <nav class="breadcrumb-about">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
                <h4><?php echo $about_page['banner_text_about'] ?></h4>
            </nav>
        </div>
    </div>
</section>

<!-- tab-sec-start -->
<section class="tabsec sec-padding">
    <div class="container">
        <div class="row">
            <?php
            // Direct top-level repeater fetch
            $about_tabs = get_field('about_tabs');
            if ($about_tabs):
                ?>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <?php
                        $i = 0;
                        foreach ($about_tabs as $tab):
                            ?>
                            <button class="nav-link <?php echo ($i == 0) ? 'active' : ''; ?>" id="nav-tab-<?php echo $i; ?>"
                                data-bs-toggle="tab" data-bs-target="#nav-pane-<?php echo $i; ?>" type="button" role="tab">
                                <?php echo $tab['tab_title']; ?>
                            </button>
                            <?php
                            $i++;
                        endforeach;
                        ?>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <?php
                    $i = 0;
                    foreach ($about_tabs as $tab):
                        ?>
                        <div class="tab-pane fade <?php echo ($i == 0) ? 'show active' : ''; ?>" id="nav-pane-<?php echo $i; ?>"
                            role="tabpanel">
                            <p><?php echo $tab['tab_content']; ?></p>
                        </div>
                        <?php
                        $i++;
                    endforeach;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- tab-sec-end -->
<?php
$about_image = get_field('about_image');

$bg_img_about = $about_image['bg-imgabout'];
?>
<!-- grid-sec-start -->
<section class="grid-sec sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="grid-main">
                    <?php
                    if ($bg_img_about) {
                        $i = 1;
                        $classes = array('one', 'two', 'three', 'four'); // In classes se hi design banega
                        foreach ($bg_img_about as $item) {
                            $current_class = $classes[$i - 1];
                            ?>
                            <div class="grid-item <?php echo $current_class; ?>">
                                <a href="#">
                                    <img src="<?php echo $item['image_about_img']['url']; ?>"
                                        alt="<?php echo $item['image_about_img']['alt'] ?>" </a>
                            </div>
                            <?php
                            ++$i;   
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- grid-sec-end -->


<!-- accordion-sec-start -->
<?php
$acc_sec = get_field('about_accordion_sec');
$acc_repeater = $acc_sec['acc_repeater'];
?>
<section class="accordion-sec sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="accordin-sec">
                    <div class="tab-contnet">
                        <div class="content">
                            <h4><?php echo $acc_sec['acc_title'] ?? ''; ?></h4>
                            <p><?php echo $acc_sec['acc_desc'] ?? ''; ?></p>
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <?php
                        if ($acc_repeater) {
                            $i = 1;
                            foreach ($acc_repeater as $item) {
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                        <button class="accordion-button <?php echo ($i == 1) ? '' : 'collapsed'; ?>"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"
                                            aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>">
                                            <?php echo $item['titletab'] ?? ''; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $i; ?>"
                                        class="accordion-collapse collapse <?php echo ($i == 1) ? 'show' : ''; ?>"
                                        aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><?php echo $item['contenttab'] ?? ''; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image">
                    <?php if (!empty($acc_sec['_acc_side_img'])): ?>
                        <img src="<?php echo $acc_sec['_acc_side_img']['url']; ?>"
                            alt="<?php echo $acc_sec['_acc_side_img']['alt'] ?? ''; ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- accordion-sec-end-->

<!-- simple-card-sec-start -->
<?php
$simple_card_sec = get_field('simple_card_sec');
$simple_cards = $simple_card_sec['simple_cards'];
?>
<section class="simple-card sec-padding">
    <div class="container">
        <div class="row">
            <div class="card-group md">
                <?php
                if ($simple_cards) {
                    foreach ($simple_cards as $card) {
                        ?>
                        <div class="card">
                            <div class="icons">
                                <?php echo $card['card_icon']; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $card['card_link']['url']; ?>"><?php echo $card['card_title']; ?></a>
                                </h5>
                                <p class="card-text"><?php echo $card['card_text']; ?></p>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- counter-sec-start -->
<!-- counter-sec-start -->
<?php
$counter_group = get_field('counter_sec');
$counters = $counter_group['counters'] ?? [];
?>
    <section class="counter-sec sec-padding">
        <div class="container">
            <div class="row">
                <?php
                foreach ($counters as $counter) {
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="counter">
                            <h2><?php echo $counter['counter_number']; ?></h2>
                            <p><?php echo $counter['counter_title']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<!-- counter-sec-end -->

<!-- counter-sec-end -->
<!-- about-end-sec-start -->
<?php 
$about_end_sec = get_field('about_end_sec');
?>
<section class="end-sec sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="end-content">
                    <h3><?php echo $about_end_sec['end_title']; ?></h3>
                    <h4><?php echo $about_end_sec['end_subtitle']; ?></h4>
                    <p><?php echo $about_end_sec['end_desc']; ?></p>
                    <a href="<?php echo $about_end_sec['end_button']['url']; ?>" class="btn ">
                        <?php echo $about_end_sec['end_button']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about-end-sec-end -->

<!-- about-end-sec-end -->

<?php
$blog_sec = get_field('blog_sec');
if ($blog_sec):
    $blog_card = $blog_sec['blog_card'] ?? [];
    ?>
    <!--blog-start  -->
    <section class="blog sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center web-title mb-4">
                        <?php echo $blog_sec['blog_text'] ?? ''; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (!empty($blog_card)) {
                    foreach ($blog_card as $blog_cards) {
                        ?>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="blog-content-img">
                                <div class="image">
                                    <?php if (!empty($blog_cards['blog_img'])): ?>
                                        <img src="<?php echo $blog_cards['blog_img']['url']; ?>"
                                            alt="<?php echo $blog_cards['blog_img']['alt'] ?? ''; ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <span class="blog-meta"><?php echo $blog_cards['blog_contex'] ?? ''; ?></span>
                                    <h3 class="blog-title">
                                        <?php if (!empty($blog_cards['blog_link'])): ?>
                                            <a
                                                href="<?php echo $blog_cards['blog_link']['url']; ?>"><?php echo $blog_cards['blog_link']['title']; ?></a>
                                        <?php endif; ?>
                                    </h3>
                                    <p class="blog-excerpt"><?php echo $blog_cards['blog_cotext'] ?? ''; ?></p>
                                    <?php if (!empty($blog_cards['blog_button'])): ?>
                                        <a href="<?php echo $blog_cards['blog_button']['url']; ?>" class="btn-main mt-2">
                                            <?php echo $blog_cards['blog_button']['title']; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--blog-end  -->
<?php endif; ?>
<!-- .contact-sec-start -->
<!-- newsletter-sec-start -->
<?php 
$newsletter_sec = get_field('newsletter_sec');
?>
<section class="contact sec-padding">
    <div class="container">
        <div class="contact-box" style="background-image: url('<?php echo $newsletter_sec['news_bg_img']['url']; ?>');">
            <h3><?php echo $newsletter_sec['news_title']; ?></h3>
            <p><?php echo $newsletter_sec['news_desc']; ?></p>

            <div class="form-sec">
                <input type="email" placeholder="<?php echo $newsletter_sec['news_placeholder']; ?>">
                <button class="btn-black btn-hover"><?php echo $newsletter_sec['news_btn_text']; ?></button>
            </div>
        </div>
    </div>
</section>
<!-- newsletter-sec-end -->


<?php
get_footer();
?>