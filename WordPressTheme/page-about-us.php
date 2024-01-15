<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="about-us layout-about-us">
        <div class="about-us__inner inner">
            <div class="about-us__content about-us-content">
                <div class="about-us-content__img">
                    <div class="about-us-content__img-sub about-us-content__img-sub--about-us">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-us1.webp"
                            alt="青い空と屋根の上のシーサー" width="400" height="606" decoding="async">
                    </div>
                    <div class="about-us-content__img-main about-us-content__img-main--about-us">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-us2.webp"
                            alt="二匹のチョウチョウウオが海の中を泳いでいる" width="345" height="228" decoding="async">
                    </div>
                </div>
                <h3 class="about-us-content__title about-us-content__title--about-us">
                    <span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span>
                </h3>
                <p class="about-us-content__text about-us-content__text--about-us">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </p>
                <!-- <div class="about-us-content__body about-us-content__body-about--us">
                    <div class="about-us-content__unit about-us-content__unit--about-us">
                    </div>
                  </div> -->
            </div>
        </div>
    </div>

    <section class="gallery layout-gallery">
        <div class="gallery__inner inner">
            <div class="gallery__title section-title">
                <p class="section-title__en">gallery</p>
                <h2 class="section-title__ja">フォト</h2>
            </div>
            <?php if (CFS()->get('gallery_group')): ?>
            <div class="gallery__list">
                <?php
                $fields = CFS()->get('gallery_group');//画像のグループを取得
                foreach( $fields as $field ):
                    $url = esc_url($field['gallery_img']);//画像のURLを取得
                    $image_id = attachment_url_to_postid($url);//画像のURLからIDを取得
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);//IDからaltを取得
                    ?>
                <div class="gallery__item js-modal-open">
                    <img src="<?php echo $url; ?>" alt="<?php echo esc_attr($image_alt); ?>" decoding="async"
                        loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div>

        <div class="gallery__modal js-modal">
            <div class="gallery__modal-img js-modal-img">
            </div>
        </div>
    </section>

    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg"
                            alt="CodeUps">
                    </div>
                    <div class="common-contact__shop-info-wrapper">
                        <div class="common-contact__shop-info-text">
                            <p class="common-contact__address">沖縄県那覇市1&#045;1</p>
                            <a href="tel:+81-120-000-0000"
                                class="common-contact__tel">tel&#058;0120&#045;000&#045;0000</a>
                            <p class="common-contact__business-hours">営業時間&#058;8&#058;30&#045;19&#058;00</p>
                            <p class="common-contact__regular-holiday">定休日&#058;毎週火曜日</p>
                        </div>
                        <div class="common-contact__shop-info-map">
                            <div class="common-contact__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401127!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1692299234684!5m2!1sja!2sjp"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-contact__more">
                    <div class="common-contact__title section-title">
                        <p class="section-title__en section-title__en--size">contact</p>
                        <h2 class="section-title__ja section-title__ja--position">お問い合わせ</h2>
                    </div>
                    <p class="common-contact__text">ご予約・お問い合わせはコチラ</p>
                    <div class="common-contact__button">
                        <a href="#" class="button">contact&nbsp;us<span class="button__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>