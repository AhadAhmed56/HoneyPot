<?php
// Template name: Contact
get_header();

$contact_page = get_field('contact_page') ?: [];
$contact_banner_sec = $contact_page['contact_banner_sec'] ?? [];
?>
<section class="Banner-sec-about sec-padding"
    style="background-image: url('<?php echo $contact_banner_sec['banner_bg_img']['url']; ?>');">
    <div class="container-fluid">
        <div class="row">

            <nav class="breadcrumb-about">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $contact_banner_sec['banner_title']; ?></li>
                </ol>
                <h4><?php echo $contact_banner_sec['banner_title']; ?></h4>
            </nav>

        </div>
    </div>
</section>
<?php
$contact_form_sec = get_field('contact_form_sec') ?: [];
$contact_page = get
?>
<section class="contact-map sec-padding">
    <div class="container">
        <div class="row">

            <!-- LEFT : MAP -->
            <div class="col-lg-6">
                <div class="map-box">
                    <iframe src="<?php echo $contact_form_sec['map_iframe_url']['url']; ?>" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- RIGHT : CONTACT FORM -->
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3><?php echo $contact_form_sec['form_title']; ?></h3>
                    <p><?php echo $contact_form_sec['form_desc']; ?></p>

                    <form>
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Your Message"></textarea>
                        <button type="submit"><?php echo $contact_form_sec['form_shortcode'] ?? 'Submit'; ?></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- .contact-sec-start -->
<?php
$newsletter_sec = get_field('newsletter_sec') ?: [];
?>
<section class="contact sec-padding">
    <div class="container  gx-0">
        <div class="contact-box"
            style="background-image: url('<?php echo $newsletter_sec['news_bg_img']['url'] ?? ''; ?>');">
            <h3><?php echo $newsletter_sec['news_title'] ?? ''; ?></h3>
            <p><?php echo $newsletter_sec['news_desc'] ?? ''; ?></p>

            <div class="form-sec">
                <input type="email" placeholder="<?php echo $newsletter_sec['news_placeholder'] ?? ''; ?>">
                <button class="btn-black btn-hover"><?php echo $newsletter_sec['news_btn_text'] ?? ''; ?></button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer()
    ?>