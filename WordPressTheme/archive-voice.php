<?php get_header(); ?>
<main>
    <!-- <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">voice</h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="./assets/images/common/voice-mv-pc.webp" media="(min-width:768px)"
                        type="image/webp" />
                    <img src="./assets/images/common/voice-mv-sp.webp" alt="きれいな海面に5人のダイバーが浮いている" width="375"
                        height="460" decoding="async">
                </picture>
            </div>
        </div>
    </div> -->
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="voice layout-voice">
        <div class="voice__inner inner">
            <div class="voice__category category">
                <a href="" class="category__button is-active">all</a>
                <a href="" class="category__button">ライセンス講習</a>
                <a href="" class="category__button">ファンダイビング</a>
                <a href="" class="category__button">体験ダイビング</a>
            </div>

            <?php
            $args = array(
                "post_type" => "voice",
                "posts_per_page" => 6
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="voice__cards voice-cards">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="voice-cards__item">
                    <div class="voice-card">
                        <div class="voice-card__head">
                            <div class="voice-card__info">
                                <div class="voice-card__meta">
                                    <span class="voice-card__customer-info">20代(女性)</span>
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
                                <h3 class="voice-card__title"><?php the_title(); ?></h3>
                            </div>
                            <div class="voice-card__img">
                                <!-- <img src="./assets/images/common/voice-post1.webp" alt="帽子を被った笑顔の女性" width="151"
                                    height="117" decoding="async"> -->
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'full', array( 'width' => 151, 'height' => 117, 'decoding' => 'async', 'class' => '' ) ); ?>
                                <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                                    alt="NoImage画像" />
                                <?php endif ; ?>
                            </div>
                        </div>
                        <p class="voice-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>

            <div class="voice__pagination">
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

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>