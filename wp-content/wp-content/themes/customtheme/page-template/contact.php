<?php
// Template name: Contact
get_header()
?>
<?php
$contact_banner_sec = get_field('contact_banner_sec');
?>
  <section class="Banner-sec-about sec-padding" style="background-image: url('<?php echo $contact_banner_sec['banner_bg_img']['url']; ?>');">
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
$contact_form_sec = get_field('contact_form_sec');
?>
    <section class="contact-map sec-padding">
    <div class="container">
        <div class="row">

            <!-- LEFT : MAP -->
            <div class="col-lg-6">
                <div class="map-box">
                  <?php 
                  $map_url = $contact_form_sec['map_iframe_url'] ?? '';
                  if($map_url): ?>
                    <iframe 
                        src="<?php echo esc_url($map_url); ?>" 
                        width="100%" 
                        height="450"    
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                  <?php endif; ?>
                </div>
            </div>

            <!-- RIGHT : CONTACT FORM -->
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3><?php echo $contact_form_sec['form_title']; ?></h3>
                    <p><?php echo $contact_form_sec['form_desc']; ?></p>

                    <?php echo do_shortcode($contact_form_sec['form_shortcode']); ?>
                </div>
            </div>

        </div>
    </div>
</section>
 <!-- .contact-sec-start -->
<?php
$newsletter_sec = get_field('newsletter_sec');
?>
    <section class="contact sec-padding">
        <div class="container  gx-0">
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

<?php
get_footer()
?>