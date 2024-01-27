<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="information layout-information">
        <div class="information__inner inner">
            <div class="information__tab information-tab">
                <button class="information-tab__button js-tab-button-information is-active" data-tab="tab-1">ライセンス<br
                        class="u-mobile">講習</button>
                <button class="information-tab__button js-tab-button-information" data-tab="tab-2">ファン<br
                        class="u-mobile">ダイビング</button>
                <button class="information-tab__button js-tab-button-information" data-tab="tab-3">体験<br
                        class="u-mobile">ダイビング</button>
            </div>

            <div class="information__content information-content">
                <div class="information-content__item js-information-content is-active" data-tab="tab-1">
                    <div class="information-content__item-wrap">
                        <div class="information-content__item-text">
                            <h3 class="information-content__title">ライセンス講習</h3>
                            <p class="information-content__text">
                                <?php echo CFS()->get('license_course_description'); ?>
                            </p>
                        </div>
                        <div class="information-content__item-img">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information-tab-content1.webp"
                                alt="きれいな海面に5人のダイバーが浮いている" width="297" height="189" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="information-content__item js-information-content" data-tab="tab-2">
                    <div class="information-content__item-wrap">
                        <div class="information-content__item-text">
                            <h3 class="information-content__title">ファンダイビング</h3>
                            <p class="information-content__text">
                                <?php echo CFS()->get('fun_diving_description'); ?>
                            </p>
                        </div>
                        <div class="information-content__item-img">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery5.webp"
                                alt="無数の魚がきれいな海の中を泳いでいる" width="297" height="189" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="information-content__item js-information-content" data-tab="tab-3">
                    <div class="information-content__item-wrap">
                        <div class="information-content__item-text">
                            <h3 class="information-content__title">体験ダイビング</h3>
                            <p class="information-content__text">
                                <?php echo CFS()->get('trial_diving_description'); ?>
                            </p>
                        </div>
                        <div class="information-content__item-img">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery3.webp"
                                alt="二匹のチョウチョウウオが海底付近を泳いでいる" width="297" height="189" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>