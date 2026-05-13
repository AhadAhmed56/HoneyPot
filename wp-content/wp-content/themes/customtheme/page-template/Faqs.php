<?php
// Template name: Faqs
get_header()
?>
<?php
$faq_page = get_field('faq_page');
$faq_banner = $faq_page['faq_banner_sec'] ?? [];
$faq_content = $faq_page['faq_content_sec'] ?? [];
?>
<section class="Banner-sec-about sec-padding">
    <div class="container-fluid">
        <div class="row">

            <nav class="breadcrumb-about">
                <h4><?php echo $faq_banner['banner_title']; ?></h4>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $faq_banner['banner_title']; ?></li>
                </ol>
            </nav>

        </div>
    </div>
</section>
<!-- faqs-sec-start -->

<section class="faqs-sec sec-padding mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-content">
                    <h5><?php echo $faq_content['faq_label']; ?></h5>
                    <h3><?php echo $faq_content['faq_title']; ?></h3>
                    <p><?php echo $faq_content['faq_desc']; ?></p>
                    <div class="image">
                        <?php if (!empty($faq_content['faq_image'])): ?>
                            <img src="<?php echo esc_url($faq_content['faq_image']['url']); ?>" alt="<?php echo esc_attr($faq_content['faq_image']['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faqs-content">
                    <?php foreach ($faq_content['faq_items'] ?? [] as $item): ?>
                        <h3><?php echo $item['question']; ?></h3>
                        <p><?php echo $item['answer']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- faqs-sec-end -->
  <!-- simple-card-sec-start -->
<section class="simple-card sec-padding">
    <div class="container">
        <div class="row">
            <div class="card-group">
                <?php 
                $simple_cards = $faq_page['simple_cards'] ?? [];
                if (!empty($simple_cards)): 
                    foreach ($simple_cards as $card): ?>
                    <div class="card">
                        <div class="icons">
                            <i class="<?php echo esc_attr($card['card_icon'] ?? 'fa-regular fa-square-check'); ?>"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php echo esc_url($card['card_link'] ?? '#'); ?>"><?php echo $card['card_title']; ?></a>
                            </h5>
                            <p class="card-text"><?php echo $card['card_desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; 
                endif; ?>
            </div>
        </div>
    </div>
</section>
    <!-- simple-card-sec-end -->
    <!-- .contact-sec-start -->
 <?php
$newsletter_sec = $faq_page['newsletter_sec'];
?>
<section class="contact sec-padding">
    <div class="container gx-0">
        <div class="contact-box" style="background-image: url('<?php echo $newsletter_sec['news_bg_img']['url']; ?>');">
            <h3><?php echo $newsletter_sec['news_title'] ?? 'Subscribe To Our Newsletter'; ?></h3>
            <p><?php echo $newsletter_sec['news_desc'] ?? ''; ?></p>

            <div class="form-sec">
                <input type="email" placeholder="<?php echo $newsletter_sec['news_placeholder']; ?>">
                <button class="btn-black btn-hover"><?php echo $newsletter_sec['news_btn_text']; ?></button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer()
?>