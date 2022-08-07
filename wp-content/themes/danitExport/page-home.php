<?php
/*
    Template Name: Главная
*/

get_header();

$page_id = get_the_ID();

$intro_img_id = carbon_get_post_meta($page_id, 'intro_img');
$intro_img_src = wp_get_attachment_image_url($intro_img_id, 'full');
?>

<section class="intro" style="background-image: url(<?php echo $intro_img_src; ?>)">
    <div class="site-container">
        <div class="intro__heading-container intro__grid-container">
            <div class="_block"></div>
            <div class="_block intro-heading-content">
                <?php echo carbon_get_post_meta($page_id, 'intro_text_top'); ?>
            </div>
        </div>
        <div class="intro__content-container intro__grid-container">
            <div class="_block">
                <div class="intro-content">
                    <?php echo carbon_get_post_meta($page_id, 'intro_text_bottom'); ?>
                </div>
            </div>
            <div class="_block">
                <a class="button intro__btn" href="#contactUs">Fill the request</a>
            </div>
        </div>
    </div>
</section>

<section class="about section" id="danit">
    <div class="about__mobile-content site-container">
        <?php echo carbon_get_post_meta($page_id, 'danit_about'); ?>
    </div>
    <div class="about__inner">
        <div class="about__container">
            <div class="about__container-block"></div>
            <div class="about__container-block lazyload" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-bg-lines.svg"></div>
        </div>
        <div class="site-container js-anim-fade-out" data-intersection-ratio="-1">
            <div class="about__content">
                <div class="_block">
                    <?php echo carbon_get_post_meta($page_id, 'danit_about'); ?>
                </div>
                <div class="_block"></div>
            </div>
            <div class="about__slider">
                <div class="_block">
                    <h2 class="about__slider-heading">What we do:</h2>
                    <div class="swiper about__slider-slider js-about-slider">
                        <div class="swiper-wrapper">
                            <?php
                            $danit_list = carbon_get_post_meta($page_id, 'danit_list');

                            foreach ($danit_list as $item) :

                                $item_img = wp_get_attachment_image_url($item["img"], 'full');
                            ?>
                                <div class="swiper-slide about__slider-item">
                                    <p><?php echo $item["title"]; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="slider-nav about__slider-nav">
                        <button class="slider-nav__btn _left js-about-btn-prev">
                            <svg class="icon icon-arrow-right slider-nav__btn-icon" width="32" height="16">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                            </svg>
                        </button>
                        <div class="js-about-slider-pagination slider-nav__pagination"></div>
                        <button class="slider-nav__btn _right js-about-btn-next">
                            <svg class="icon icon-arrow-right slider-nav__btn-icon" width="32" height="16">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="_block">
                    <div class="swiper about__slider-img js-about-slider2">
                        <div class="swiper-wrapper">
                            <?php
                            $danit_list = carbon_get_post_meta($page_id, 'danit_list');

                            foreach ($danit_list as $item) :

                                $item_img = wp_get_attachment_image_url($item["img"], 'full');
                            ?>
                                <div class="swiper-slide about__slider-img-wrapper lazyload" data-bg="<?php echo $item_img; ?>"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="positions js-anim-fade-out" id="import" data-intersection-ratio="0">
    <div class="site-container positions__container">
        <div class="site-heading _dark positions__heading">
            <h2>Import position</h2>
        </div>
        <div class="positions__list">
            <?php
            $import_list = carbon_get_post_meta($page_id, 'import_list');

            foreach ($import_list as $item) :

                $item_img = wp_get_attachment_image_url($item["img"], 'full');
            ?>
                <div class="positions__item" data-heading="Crop production">
                    <img class="lazyload" data-src="<?php echo $item_img; ?>" src="#" alt="<?php echo $item["text"]; ?>">
                    <div class="positions__item-content">
                        <h4><?php echo $item["text"]; ?></h4>
                        <div class="positions__item-content-text">
                            <?php echo $item["descr"]; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="positions__content">
            <div class="_block">
                <?php echo carbon_get_post_meta($page_id, 'import_text'); ?>
            </div>
            <div class="_block">
                <p><strong><span>We are ready to any request</span></strong>
                </p>
                <a class="button positions__btn" href="#contactUs">Fill the request</a>
            </div>
        </div>
    </div>
</section>

<section class="howitworks section">
    <div class="howitworks__container">
        <div class="howitworks__container-block"></div>
        <?php
        $how_it_works = carbon_get_post_meta($page_id, 'howitworks_img');
        $how_it_works_img = wp_get_attachment_image_url($how_it_works, 'full');
        ?>
        <div class="howitworks__container-block lazyload" data-bg="<?php echo $how_it_works_img; ?>">
            <div class="_flag"></div>
        </div>
    </div>
    <div class="site-container howitworks__content js-anim-fade-out" data-intersection-ratio="0.1">
        <div class="howitworks__grid-content">
            <div class="_block">
                <div class="site-heading howitworks__heading">
                    <h2><?php echo carbon_get_post_meta($page_id, 'howitworks_heading'); ?></h2>
                </div>
                <?php echo carbon_get_post_meta($page_id, 'howitworks_text'); ?>
            </div>
            <div class="_block"></div>
        </div>
    </div>
</section>

<section class="careof js-anim-fade-out">
    <div class="site-container careof__container">
        <div class="site-heading _dark careof__heading">
            <h2>We take care of</h2>
        </div>
        <div class="careof__list">
            <?php
            $careof_list = carbon_get_post_meta($page_id, 'careof_list');

            foreach ($careof_list as $item) :

                $item_img = wp_get_attachment_image_url($item["img"], 'full');
            ?>
                <div class="careof__item">
                    <img class="lazyload" data-src="<?php echo $item_img; ?>" src="#" alt="">
                    <p><?php echo $item["text"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="contact-us" id="contactUs">
    <div class="site-container contact-us__container js-anim-fade-out" data-intersection-ratio="0">
        <div class="site-heading contact-us__heading">
            <h2>Contact Us</h2>
        </div>
        <div class="contact-us__grid-container">
            <div class="_block">
                <form class="contact-us__form form js-form" data-need-validation action="<?php echo get_template_directory_uri(); ?>/includes/send.php">
                    <div class="_success">
                        <h3 class="form__heading">Thanks for the request!</h3>
                        <p>
                            We will contact you as soon as possible
                        </p>
                    </div>
                    <div class="_initial">
                        <h3 class="form__heading">Feedback form</h3>
                        <div class="form__inpts-container">
                            <label class="form__inpt-container">
                                <input class="form__input" type="text" name="name" placeholder="Name" data-parsley-required>
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="text" name="company" placeholder="Company">
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="number" name="phone" placeholder="Phone" data-parsley-required>
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="email" name="e-mail" placeholder="E-mail" data-parsley-required>
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="mail" name="inquiry" placeholder="Inquiry">
                            </label>
                        </div>
                        <button class="button mod-white form__btn">Send</button>
                        <p class="form__argeement">By clicking the send request button you agree to<a href="/">our privacy</a>policy terms</p>
                    </div>
                </form>
                <a class="contact-us__know-more _mobile" href="/"><span class="contact-us__know-more-text">Know more about IT-&nbsp;solutions in agriculture</span><span class="contact-us__know-more-icon"></span>
                </a>
            </div>
            <div class="_block">
                <div class="contact-us__item"><span class="contact-us__legend">Want to know more about BI in agriculture?</span>
                    <a class="contact-us__link" href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
                </div>
                <div class="contact-us__item"><span class="contact-us__legend">Foreign Trade Manager</span><span class="contact-us__legend _green">Svetlana Zorina</span>
                    <a class="contact-us__link" href="tel:<?php echo carbon_get_theme_option('phone'); ?>"><?php echo carbon_get_theme_option('phone'); ?></a>
                    <a class="contact-us__link" href="mailto:<?php echo carbon_get_theme_option('email2'); ?>"><?php echo carbon_get_theme_option('email2'); ?></a>
                </div>
                <ul class="socials contact-us__socials">
                    <li class="socials__item">
                        <a class="socials__link" href="<?php echo carbon_get_theme_option('social_linked'); ?>" target="_blank">
                            <svg class="icon icon-in socials__link-icon" width="32" height="32">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#in"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a class="socials__link" href="<?php echo carbon_get_theme_option('social_wt'); ?>" target="_blank">
                            <svg class="icon icon-wa socials__link-icon" width="32" height="32">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#wa"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <a class="contact-us__know-more" href="<?php echo carbon_get_theme_option('file'); ?>" target="_blank"><span class="contact-us__know-more-text">Know more about IT-&nbsp;solutions in agriculture</span><span class="contact-us__know-more-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>