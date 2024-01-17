<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>


    <!-- blogページ（blog一覧ページ、blog詳細ページ）としてのレイアウトを共通化する -->
    <div class="blog layout-blog">
        <div class="blog__inner inner">
            <div class="blog__main">
                <?php if (have_posts()) : ?>
                <div class="blog__main-cards blog-cards blog-cards--column2">
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                        <div class="blog-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail( 'full', array( 'width' => 301, 'height' => 201, 'decoding' => 'async', 'class' => '' ) ); ?>
                            <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                                alt="NoImage画像" />
                            <?php endif ; ?>
                        </div>
                        <div class="blog-card__body">
                            <time class="blog-card__time"
                                datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            <h2 class="blog-card__title"><?php the_title(); ?></h2>
                            <p class="blog-card__text">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php else : ?>
                <p>記事が投稿されていません</p>
                <?php endif; ?>
                <div class="blog__main-pagination">
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
                        <a class="nextpostslink" rel="next" href="#"><img
                                src="./assets/images/common/pagenation-vector.svg" alt=""></a>
                    </div> -->
                    <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    } ?>
                </div>
            </div>
            <?php get_sidebar(); ?>

            <!-- サイドバーに人気記事を表示させるためのコード -->
            <?php
            // 記事のビュー数を更新(ログイン中・クローラーは除外)
            if (!is_user_logged_in() && !is_robots()) {
                setPostViews(get_the_ID());
            }
            ?>
        </div>
    </div>

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>