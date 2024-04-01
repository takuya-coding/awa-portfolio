<?php get_header(); ?>
<main>
    <div class="top-main-view swiper js-top-main-view-swiper">
        <div class="top-main-view__inner">
            <h2 class="top-main-view__main-title">diving</h2>
            <p class="top-main-view__sub-title">into&nbsp;the&nbsp;ocean</p>
        </div>
        <div class="top-main-view__wrapper swiper-wrapper">
            <?php if (CFS()->get('mv_slider')): ?>
            <?php
                $fields = CFS()->get('mv_slider');//画像のグループを取得
                foreach( $fields as $field ):
                    $pc_url = esc_url($field['pc_img']);//画像のURLを取得
                    $pc_image_id = attachment_url_to_postid($pc_url);//画像のURLからIDを取得
                    $pc_image_alt = get_post_meta($pc_image_id, '_wp_attachment_image_alt', true);//IDからaltを取得
                    $sp_url = esc_url($field['sp_img']);//画像のURLを取得
                    $sp_image_id = attachment_url_to_postid($sp_url);//画像のURLからIDを取得
                    $sp_image_alt = get_post_meta($sp_image_id, '_wp_attachment_image_alt', true);//IDからaltを取得
                    ?>
            <div class="top-main-view__slide swiper-slide">
                <div class="top-main-view__img">
                    <picture>
                        <source srcset="<?php echo $pc_url; ?>" media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo $sp_url; ?>" alt="<?php echo esc_attr($pc_image_alt); ?>" width="375"
                            height="667" decoding="async">
                    </picture>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <section class="top-about-us layout-top-about-us" id="about-us">
        <div class="top-about-us__inner inner">
            <div class="top-about-us__title section-title">
                <p class="section-title__en">about&nbsp;us</p>
                <h2 class="section-title__ja">私たちについて</h2>
            </div>

            <div class="top-about-us__content about-us-content">
                <div class="about-us-content__img">
                    <div class="about-us-content__img-sub">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/PF-vertical-goldfishes.webp"
                            alt="青い空と屋根の上のシーサー" width="128" height="194" decoding="async">
                    </div>
                    <div class="about-us-content__img-main">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/PF-clownfish.webp"
                            alt="二匹のチョウチョウウオが海の中を泳いでいる" width="281" height="186" decoding="async">
                    </div>
                </div>
                <div class="about-us-content__body">
                    <h3 class="about-us-content__title"><span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span></h3>
                    <div class="about-us-content__unit">
                        <p class="about-us-content__text">
                            <!-- about-usページに設定したカスタムフィールドを呼び出す -->
                            <?php echo CFS()->get('about_us_text', 11); ?>
                        </p>

                        <div class="about-us-content__button">
                            <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button">view&nbsp;more<span
                                    class="button__arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-campaign layout-top-campaign" id="campaign">
        <div class="top-campaign__inner inner">

            <div class="top-campaign__title section-title">
                <p class="section-title__en">campaign</p>
                <h2 class="section-title__ja">キャンペーン</h2>
            </div>

            <!-- campaign-cardsにoverflow: hiddenすると、ボタンも消えてしまうため、campaign-cardsクラスの外側に出す -->
            <div class="top-campaign__swiper-controller">
                <div class="top-campaign__swiper-button-prev swiper-button-prev"></div>
                <div class="top-campaign__swiper-button-next swiper-button-next"></div>
            </div>
            <?php
            $args = array(
                "post_type" => "campaign",
                "posts_per_page" => 4
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="top-campaign__campaign-cards campaign-cards js-campaign-cards">
                <div class="campaign-cards__swiper swiper js-top-campaign-swiper">
                    <div class="campaign-cards__swiper-wrapper swiper-wrapper">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="campaign-cards__item campaign-card swiper-slide">
                            <div class="campaign-card__img">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'full', array( 'width' => 280, 'height' => 188, 'decoding' => 'async', 'class' => '' ) ); ?>
                                <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                                    alt="NoImage画像" />
                                <?php endif ; ?>
                            </div>
                            <div class="campaign-card__body">
                                <div class="campaign-card__category-wrap">
                                    <!-- <span class="campaign-card__category">ライセンス講習</span> -->
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                                    if (!empty($taxonomy_terms)) {
                                    $limit = 5;
                                    $count = 0;
                                    foreach ($taxonomy_terms as $taxonomy_term) {
                                        if ($count < $limit) {
                                            echo '<span class="campaign-card__category">' . esc_html($taxonomy_term->name) . '</span>';
                                            $count++;
                                        } else {
                                            break;
                                        }
                                    }
                                }
                                ?>
                                </div>
                                <!-- 文字数制限を追加 -->
                                <h3 class="campaign-card__title">
                                    <?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h3>
                                <p class="campaign-card__text">全部コミコミ&#040;お一人様&#041;</p>
                                <div class="campaign-card__price">
                                    <!-- <p class="campaign-card__price-before"><del>&#165;56&#044;000</del></p> -->
                                    <?php if( get_field('campaign_regular-price')): ?>
                                    <p class="campaign-card__price-before">
                                        <del><?php the_field('campaign_regular-price'); ?></del>
                                    </p>
                                    <?php endif; ?>
                                    <!-- <p class="campaign-card__price-after">&#165;46&#044;000</p> -->
                                    <?php if( get_field('campaign_campaign-price')): ?>
                                    <p class="campaign-card__price-after"><?php the_field('campaign_campaign-price'); ?>
                                    </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <p class="top-campaign__content-none content-none">記事が投稿されていません</p>
            <?php endif; ?>

            <div class=" top-campaign__button">
                <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button">view&nbsp;more<span
                        class="button__arrow"></span></a>
            </div>

        </div>
    </section>

    <section class="top-information layout-top-information" id="information">
        <div class="top-information__inner inner">
            <div class="top-information__title section-title">
                <p class="section-title__en">information</p>
                <h2 class="section-title__ja">ダイビング情報</h2>
            </div>
            <div class="top-information__flex">
                <div class="top-information__img">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information.webp"
                        alt="魚がサンゴ礁の周りを泳いでいる" width="345" height="227" decoding="async" loading="lazy">
                </div>
                <div class="top-information__body">
                    <h3 class="top-information__body-title">ライセンス講習</h3>
                    <p class="top-information__text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                    <div class="top-information__button">
                        <a href="<?php echo esc_url(home_url("/information")) ?>" class="button">view&nbsp;more<span
                                class="button__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-blog layout-top-blog" id="blog">
        <div class="top-blog__background-img"></div>
        <div class="top-blog__inner inner">
            <div class="top-blog__title section-title">
                <p class="section-title__en section-title__en--color">blog</p>
                <h2 class="section-title__ja section-title__ja--color">ブログ</h2>
            </div>

            <?php
            $args = array(
                "post_type" => "post",
                "posts_per_page" => 3
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="top-blog__cards blog-cards">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                    <div class="blog-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'full', array( 'width' => 301, 'height' => 201, 'decoding' => 'async', 'loading' => 'lazy', 'class' => '' ) ); ?>
                        <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                            alt="NoImage画像" />
                        <?php endif ; ?>
                    </div>
                    <div class="blog-card__body">
                        <time class="blog-card__time"
                            datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <!-- 文字数制限を追加 -->
                        <h3 class="blog-card__title"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h3>
                        <!-- 文字数制限を追加 -->
                        <p class="blog-card__text">
                            <?php echo wp_trim_words(get_the_content(), 85, '...'); ?>
                        </p>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
            <p class="top-campaign__content-none content-none content-none--color">記事が投稿されていません</p>
            <?php endif; ?>

            <div class="top-blog__button">
                <a href="<?php echo esc_url(home_url("/blog")) ?>" class="button">view&nbsp;more<span
                        class="button__arrow"></span></a>
            </div>
        </div>
    </section>

    <section class="top-voice layout-top-voice" id="voice">
        <div class="top-voice__inner inner">
            <div class="top-voice__title section-title">
                <p class="section-title__en">voice</p>
                <h2 class="section-title__ja">お客様の声</h2>
            </div>
            <?php
            $args = array(
                "post_type" => "voice",
                "posts_per_page" => 2
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="top-voice__cards voice-cards">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="voice-cards__item">
                    <div class="voice-card">
                        <div class="voice-card__head">
                            <div class="voice-card__info">
                                <div class="voice-card__meta">
                                    <!-- メタ情報はカスタムフィールド導入 -->
                                    <span
                                        class="voice-card__customer-info"><?php echo CFS()->get('meta_info'); ?></span>
                                    <!-- <span class="voice-card__category">ライセンス講習</span> -->
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                                    if (!empty($taxonomy_terms)) {
                                    $limit = 5;
                                    $count = 0;
                                    foreach ($taxonomy_terms as $taxonomy_term) {
                                        if ($count < $limit) {
                                            echo '<span class="voice-card__category">' . esc_html($taxonomy_term->name) . '</span>';
                                            $count++;
                                        } else {
                                            break;
                                        }
                                    }
                                }
                                ?>
                                </div>
                                <!-- 文字数制限を追加 -->
                                <h3 class="voice-card__title"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                                </h3>
                            </div>
                            <div class="voice-card__img">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'full', array( 'width' => 151, 'height' => 117, 'decoding' => 'async', 'loading' => 'lazy', 'class' => '' ) ); ?>
                                <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                                    alt="NoImage画像" />
                                <?php endif ; ?>
                            </div>
                        </div>
                        <!-- 文字数制限を追加 -->
                        <p class="voice-card__text">
                            <?php echo wp_trim_words(get_the_content(), 169, '...'); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
            <p class="top-voice__content-none content-none">記事が投稿されていません</p>
            <?php endif; ?>
            <div class="top-voice__button">
                <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button">view&nbsp;more<span
                        class="button__arrow"></span></a>
            </div>
        </div>
    </section>

    <section class="top-price layout-top-price" id="price">
        <div class="top-price__inner inner">
            <div class="top-price__title section-title">
                <p class="section-title__en section-title__en--color">price</p>
                <h2 class="section-title__ja section-title__ja--color">料金一覧</h2>
            </div>
            <div class="top-price__wrapper">
                <div class="top-price__img">
                    <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-pc.webp"
                            media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-sp.webp"
                            alt="悠然と泳ぐウミガメ" width="345" height="227" decoding="async" loading="lazy">
                    </picture>
                </div>
                <div class="top-price__lists top-price-lists">
                    <!-- 料金一覧ページのページIDを指定することで、カスタムフィールドの値をトップページにも出力 -->
                    <?php $fields = CFS()->get('price_group', 15); ?>
                    <?php if(is_array($fields)): ?>
                    <!-- 外側のループ -->
                    <?php foreach($fields as $field): ?>
                    <div class="top-price-lists__list top-price-list">
                        <h3 class="top-price-list__title"><?php echo $field['category_title']; ?></h3>
                        <dl class="top-price-list__content">
                            <?php $fields_child = $field['price_table']; ?>
                            <?php if(is_array($fields_child)): ?>
                            <!-- 内側のループ -->
                            <?php foreach($fields_child as $field_child):?>
                            <dt class="top-price-list__course"><?php echo $field_child['course_title']; ?></dt>
                            <dd class="top-price-list__price"><?php echo $field_child['course_price']; ?></dd>
                            <?php endforeach; ?>
                            <!-- 内側のループ -->
                            <?php endif; ?>
                        </dl>
                    </div>
                    <!-- 外側のループ -->
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="top-price__button">
                <a href="<?php echo esc_url(home_url("/price")) ?>" class="button button--top-price">view&nbsp;more<span
                        class="button__arrow button__arrow--top-price"></span></a>
            </div>
        </div>
    </section>

    <!-- contact-section -->
    <!-- フロントページについては、このページにカスタムフィールドの入力欄を設定しているため、パーツを呼び出すだけで表示される -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>