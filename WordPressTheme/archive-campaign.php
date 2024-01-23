<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="campaign layout-campaign">
        <div class="campaign__inner inner">
            <div class="campaign__category category">
                <!-- <a href="" class="category__button is-active">all</a>
                <a href="" class="category__button">ライセンス講習</a>
                <a href="" class="category__button">ファンダイビング</a>
                <a href="" class="category__button">体験ダイビング</a> -->
                <?php
                $current_term_id = get_queried_object_id();
                $terms = get_terms(array(
                    'taxonomy' => 'campaign_category',
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'number'  => 5
                ));

                $home_class = is_post_type_archive('campaign') ? 'is-active' : '';
                $home_link = sprintf(
                    '<a class="category__button %s" href="%s" alt="%s">all</a>',
                    $home_class,
                    esc_url(home_url('/campaign')),
                    esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                if ($terms) {
                    foreach ($terms as $term) {
                        $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
                        $term_link = sprintf(
                            '<a class="category__button %s" href="%s" alt="%s">%s</a>',
                            $term_class,
                            esc_url(get_term_link($term)),
                            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                            esc_html($term->name)
                        );
                        echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                    }
                }
            ?>
            </div>

            <!-- ページネーションが上手く機能しなかったため一部コード修正 -->
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'campaign',
                'posts_per_page' => 4,
                'paged' => $paged
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
                                        <a href="<?php echo esc_url(home_url("/contact")) ?>"
                                            class="button">contact&nbsp;us<span class="button__arrow"></span></a>
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

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>