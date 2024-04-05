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
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/shisa.webp"
                            alt="青い空と屋根の上のシーサー" width="400" height="606" decoding="async">
                    </div>
                    <div class="about-us-content__img-main about-us-content__img-main--about-us">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/PF-clownfish2.webp"
                            alt="イソギンチャクの中に顔を出すカクレクマノミ" width="345" height="228" decoding="async">
                    </div>
                </div>
                <h3 class="about-us-content__title about-us-content__title--about-us">
                    <span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span>
                </h3>
                <p class="about-us-content__text about-us-content__text--about-us">
                    <?php echo CFS()->get('about_us_text'); ?>
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

    <!-- contact-section -->
    <!-- 今回contactセクションにカスタムフィールドを設定（カスタムフィールドの値の入力欄自体はフロントページに設定）したため、下記のような手順で呼び出す -->
    <?php
    // フロントページのIDを取得（今回フロントページにcontactセクション用のカスタムフィールドを設定したため）
    $front_page_id = get_option('page_on_front');
    // section-contact.phpにフロントページのIDを渡す（共通パーツとしたsection-contact.phpにフロントページに設定したカスタムフィールドの値を渡す）
    set_query_var('contact_page_id', $front_page_id);
    // section-contact.phpにフロントページに設定したカスタムフィールドの値を渡した後、section-contact.phpを呼び出す
    get_template_part('template-parts/section-contact');
    ?>

</main>
<?php get_footer(); ?>