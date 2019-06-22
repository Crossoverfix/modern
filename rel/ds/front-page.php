<?php
get_header();

$tech = get_field('tech');
$prefooter_back = get_field('prefooter_back');
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main front">
            <?php if (have_rows('first_screen_slider')): ?>
                <section id="first_screen">
                        <div class="container">
                            <div class="row">
                            <div class="col-sm-12 col-md-7 col-lg-6">
                                <div class="swiper-container" id="frontTopSliderText">
                                    <div class="swiper-wrapper">
                                        <?php while (have_rows('first_screen_slider')): the_row();
                                            $slide_header = get_sub_field('first_screen_heading');
                                            $slide_text_content = get_sub_field('first_screen_text');

                                            ?>
                                            <div class="swiper-slide">
                                                <div class="slide-text">
                                                    <h1 class="slide-title"><?php echo $slide_header; ?></h1>
                                                    <p class="slide-text"><?php echo $slide_text_content; ?></p>
                                                    <a href="#" class="btn-custom" data-toggle="modal"
                                                       data-target="#contactModal">
                                                        <img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/svg/envelope.svg"
                                                            alt="" class="icon">
                                                        <span>Форма обратной связи</span>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-6 altImg">
                                <div class="imageSlider">
                                    <div class="swiper-container" id="frontTopSliderImg">
                                        <div class="swiper-wrapper">
                                            <?php while (have_rows('first_screen_slider')): the_row();
                                                $slide_image = get_sub_field('first_screen_img');

                                                ?>
                                                <div class="swiper-slide"
                                                     style="background-image: url(<?php echo $slide_image; ?>);">
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (have_rows('second_screen_advantages')): ?>
                <section id="advantages">
                    <div class="container">
                        <div class="row">
                            <?php while (have_rows('second_screen_advantages')): the_row();
                                $adv_icon = get_sub_field('second_screen_advantage_img');
                                $adv_text = get_sub_field('second_screen_advantage_text');
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-3" data-mh="adv-group">
                                    <div class="advantage d-flex flex-column align-items-center justify-content-around">
                                        <img src="<?php echo $adv_icon; ?>" alt="" class="icon">
                                        <p class="title" data-mh="adv">
                                            <?php echo $adv_text; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php
            $services_heading = get_field('services_heading');
            $services_text = get_field('services_text');
            if (have_rows('services')): $i = 1; ?>
                <section id="services">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="heading"><?php echo $services_heading; ?></h3>
                                <p class="text"><?php echo $services_text; ?></p>
                            </div>
                            <?php while (have_rows('services')): the_row();
                                $srv_heading = get_sub_field('service_heading');
                                $srv_text = get_sub_field('service_subheading');
                                $srv_img = get_sub_field('service_img');
                                if ($i % 2 != 0) { ?>
                                    <div class="service col-12 d-flex">
                                        <div class="service_img" style="margin-right: 31px;">
                                            <div class="img"
                                                 style="background-image: url(<?php echo $srv_img; ?>);">
                                            </div>
                                        </div>
                                        <div class="text" style="margin-left: 31px;">
                                            <p class="service_heading">
                                                <?php echo $srv_heading; ?>
                                            </p>
                                            <p class="service_text">
                                                <?php echo $srv_text; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="service col-12 d-flex">
                                        <div class="text" style="margin-right: 31px;">
                                            <p class="service_heading">
                                                <?php echo $srv_heading; ?>
                                            </p>
                                            <p class="service_text">
                                                <?php echo $srv_text; ?>
                                            </p>
                                        </div>
                                        <div class="service_img" style="margin-left: 31px;">
                                            <div class="img"
                                                 style="background-image: url(<?php echo $srv_img; ?>);">
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                $i++; ?>
                            <?php endwhile; ?>
                            <div class="col-12 d-flex align-items-center justify-content-center call_btn">
                                <a href="#" class="btn-custom d-none" data-toggle="modal" data-target="#contactModal">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/envelope.svg"
                                         alt="" class="icon">
                                    <span>Форма обратной связи</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (have_rows('tech')): ?>
                <section id="tech">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-5 d-lg-flex d-md-none d-sm-none text_slider"
                                 data-mh="tech">
                                <h3 class="heading">Используем самые современные технологии</h3>
                                <div class="swiper-container swiper-no-swiping" id="techSliderText">
                                    <div class="swiper-wrapper">
                                        <?php while (have_rows('tech')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="slide-text-div">
                                                    <h1 class="slide-title"><?php echo get_sub_field('tech_heading'); ?></h1>
                                                    <p class="slide-text"><?php echo get_sub_field('tech_text'); ?></p>
                                                    <?php if (have_rows('tech_icons')) { ?>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <?php while (have_rows('tech_icons')) {
                                                                the_row(); ?>
                                                                <div class="text_icon"
                                                                     style="background-image: url(<?php echo get_sub_field('tech_icons_under_text'); ?>);">
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rotary d-lg-flex d-md-none d-sm-none" data-mh="tech">
                        <div id="rotarySlider" class="slider">
                            <div class="circular-slider circular-slider-1">
                                <div class="wrapper">
                                    <div class="controls">
                                        <div class="controls__left">
                                        </div>
                                        <div class="controls__right">
                                        </div>
                                    </div>
                                    <div class="slides-holder">
                                        <?php while (have_rows('tech')):
                                            the_row();
                                            $tech_icon = get_sub_field('tech_icon');
                                            ?>
                                            <div class="slides-holder__item">
                                                <img src="<?php echo $tech_icon; ?>" alt="">
                                            </div>

                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="imageSlider">
                            <div class="swiper-container swiper-no-swiping" id="techSliderImg">
                                <div class="swiper-wrapper">
                                    <?php while (have_rows('tech')): the_row();
                                        $tech_img = get_sub_field('tech_img');
                                        ?>
                                        <div class="swiper-slide"
                                             style="background-image: url(<?php echo $tech_img; ?>);">
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-lg-none">
                                <h3 class="heading text-center">Используем самые современные технологии</h3>
                            </div>
                            <?php while (have_rows('tech')): the_row();
                                $tech_icon = get_sub_field('tech_icon');
                                $tech_img = get_sub_field('tech_img');
                                ?>
                                <div class="col-sm-12 col-md-6 d-lg-none technology" data-mh="tech_cards">
                                    <div class="tech_head d-flex">
                                        <div class="icon">
                                            <img src="<?php echo $tech_icon; ?>" alt="">
                                        </div>
                                        <div class="tech_heading">
                                            <h1 class="title"><?php echo get_sub_field('tech_heading'); ?></h1>
                                        </div>
                                    </div>
                                    <div class="tech_text">
                                        <p class="text"><?php echo get_sub_field('tech_text'); ?></p>
                                    </div>
                                    <?php if (have_rows('tech_icons')) { ?>
                                        <div class="d-flex align-items-center justify-content-center text_icons">
                                            <?php while (have_rows('tech_icons')) {
                                                the_row(); ?>
                                                <div class="text_icon"
                                                     style="background-image: url(<?php echo get_sub_field('tech_icons_under_text'); ?>);">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>

                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php
            $prefooter_img = get_field('prefooter_back');
            if ($prefooter_img): ?>
                <section id="prefooter"
                         style="background: linear-gradient(180deg, #fff 0%, transparent 100%), url(<?php echo $prefooter_img; ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center call_btn">
                                <a href="#" class="btn-custom" data-toggle="modal" data-target="#contactModal">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/envelope.svg"
                                         alt="" class="icon">
                                    <span>Форма обратной связи</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </main>
    </div>

<?php
get_footer();
