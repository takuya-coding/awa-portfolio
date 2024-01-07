<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">campaign</h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="./assets/images/common/campaign-mv-pc.webp" media="(min-width:768px)"
                        type="image/webp" />
                    <img src="./assets/images/common/campaign-mv-sp.webp" alt="二匹のチョウチョウウオが海の中を泳いでいる" width="375"
                        height="460" decoding="async">
                </picture>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>

    <section class="campaign layout-campaign">
        <div class="campaign__inner inner">
            <div class="campaign__category category">
                <!-- <a href="" class="category__button is-active">all</a>
                <a href="" class="category__button">ライセンス講習</a>
                <a href="" class="category__button">ファンダイビング</a>
                <a href="" class="category__button">体験ダイビング</a> -->
                <?php
                    $current_term_id = get_queried_object()->term_id;
                    $terms = get_terms(array(
                        // 表示するタクソノミースラッグを記述
                        'taxonomy' => 'campaign_category',
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        // 表示するタームの数を指定
                        'number'  => 5
                    ));
                    
                    // カスタム投稿一覧ページへのURL
                    $home_class = (is_post_type_archive()) ? 'is-active' : '';
                    $home_link = sprintf(
                        //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                        '<a class="category__button %s" href="%s" alt="%s">all</a>',
                        $home_class,
                        // カスタム投稿一覧ページのスラッグを指定
                        esc_url(home_url('/campaign')),
                        esc_attr(__('View all posts', 'textdomain'))
                    );
                    echo sprintf(esc_html__('%s', 'textdomain'), $home_link);
                    
                    // タームのリンク
                    if ($terms) {
                        foreach ($terms as $term) {
                            // カレントクラスに付与するクラスを指定できる
                            $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                            $term_link = sprintf(
                                // 各タームに付与するクラスを指定できる
                                '<a class="category__button %s" href="%s" alt="%s">%s</a>',
                                $term_class,
                                esc_url(get_term_link($term->term_id)),
                                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                                esc_html($term->name)
                            );
                            echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                        }
                    }
                    ?>
            </div>

            <?php
            // タクソノミーのスラッグを指定
            $campaign_category_slug = get_query_var('campaign_category');
            $args = array(
                // カスタム投稿のスラッグを指定
                "post_type" => "campaign",
                'tax_query' => array(
                    array(
                        // タクソノミーのスラッグを指定
                        'taxonomy' => 'campaign_category',
                        'field'    => 'slug',
                        'terms'    => $campaign_category_slug,
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="campaign__content campaign-content">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="campaign-content__item">
                    <div class="campaign-card">
                        <div class="campaign-card__img">
                            <!-- <img src="./assets/images/common/campaign-panel1.webp" alt="カラフルな熱帯魚が無数に泳いでいる" width="280"
                                height="188" decoding="async"> -->
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail( 'full', array( 'width' => 280, 'height' => 188, 'decoding' => 'async', 'class' => '' ) ); ?>
                            <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                                alt="NoImage画像" />
                            <?php endif ; ?>
                        </div>
                        <div class="campaign-card__body campaign-card__body--campaign">
                            <div class="campaign-card__category-wrap">
                                <!-- <span class="campaign-card__category">ライセンス講習</span> -->
                                <?php
                                $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                                if (!empty($taxonomy_terms)) {
                                    $limit = 4;
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
                            <?php if( get_field('campaign_title')): ?>
                            <h3 class="campaign-card__title campaign-card__title--campaign">
                                <?php the_field('campaign_title'); ?></h3>
                            <?php endif; ?>
                            <p class="campaign-card__text campaign-card__text--campaign">全部コミコミ&#040;お一人様&#041;</p>
                            <div class="campaign-card__price campaign-card__price--campaign">
                                <!-- <p class="campaign-card__price-before"><del>&#165;56&#044;000</del></p> -->
                                <?php if( get_field('campaign_regular-price')): ?>
                                <p class="campaign-card__price-before">
                                    <del><?php the_field('campaign_regular-price'); ?></del>
                                </p>
                                <?php endif; ?>
                                <!-- <p class="campaign-card__price-after">&#165;46&#044;000</p> -->
                                <?php if( get_field('campaign_campaign-price')): ?>
                                <p class="campaign-card__price-after"><?php the_field('campaign_campaign-price'); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="campaign-card__campaign-body">
                                <?php if( get_field('campaign_text')): ?>
                                <p class="campaign-card__campaign-text">
                                    <?php the_field('campaign_text'); ?>
                                </p>
                                <?php endif; ?>
                                <div class="campaign-card__campaign-list">
                                    <!-- <time class="campaign-card__campaign-time"
                                        datetime="P122D">2023&#047;6&#047;1&#045;9&#047;30</time> -->
                                    <?php
                                    $campaign_period = get_field('campaign_period');
                                    ?>
                                    <?php if($campaign_period): ?>
                                    <time class="campaign-card__campaign-time"
                                        datetime="P122D"><?php echo $campaign_period['campaign_period_start']; ?>&#045;<?php echo $campaign_period['campaign_period_end']; ?></time>
                                    <?php else: ?>
                                    <p>期間未定</p>
                                    <?php endif; ?>
                                    <p class="campaign-card__campaign-message">ご予約&#0183;お問い合わせはコチラ</p>
                                    <div class="campaign-card__campaign-button">
                                        <a href="#" class="button">contact&nbsp;us<span
                                                class="button__arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>

            <div class="campaign__pagination">
                <!-- pagenavi -->
                <!-- <div class="wp-pagenavi">
                    <a class="previouspostslink" rel="prev" href="#"><img
                            src="./assets/images/common/pagenation-vector.svg" alt=""></a>
                    <span class='current'>1</span>
                    <a class="page larger" href="#">2</a>
                    <a class="page larger" href="#">3</a>
                    <a class="page larger" href="#">4</a>
                    <a class="page larger" href="#">5</a>
                    <a class="page larger" href="#">6</a>
                    <a class="nextpostslink" rel="next" href="#"><img src="./assets/images/common/pagenation-vector.svg"
                            alt=""></a>
                </div> -->
                <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                        } ?>
            </div>
        </div>
    </section>

    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="./assets/images/common/logo.svg" alt="CodeUps">
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