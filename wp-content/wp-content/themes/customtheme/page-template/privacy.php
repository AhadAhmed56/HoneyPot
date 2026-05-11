<?php
// Template name: privacy
get_header();

$privacy_page = get_field('privacy_page');
$privacy_banner = $privacy_page['privacy_banner'] ?? [];
?>
<section class="Banner-sec-about">
    <div class="container-fluid">
        <div class="row">

            <nav class="breadcrumb-about">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $privacy_banner['banner_title'] ?? 'Privacy Policy'; ?></li>
                </ol>
                <h4><?php echo $privacy_banner['banner_title'] ?? 'Privacy Policy'; ?></h4>
            </nav>

        </div>
    </div>
</section>

<section class="middle-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="middle-box">
                    <?php 
                    $privacy_content = $privacy_page['privacy_content'] ?? [];
                    if (!empty($privacy_content)): 
                        foreach ($privacy_content as $sec): ?>
                            <h4><?php echo $sec['section_title']; ?></h4>
                            <?php echo $sec['section_body']; ?>
                        <?php endforeach; 
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- middle section end -->
<!-- .contact-sec-start -->
<?php
$newsletter_sec = $privacy_page['newsletter_sec'];
?>
<section class="contact sec-padding">
    <div class="container gx-0">
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