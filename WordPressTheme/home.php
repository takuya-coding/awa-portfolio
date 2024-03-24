<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>


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
                            <!-- 文字数制限を追加 -->
                            <h2 class="blog-card__title"><?php echo wp_trim_words(get_the_title(), 35, '...'); ?></h2>
                            <!-- 文字数制限を追加 -->
                            <p class="blog-card__text">
                                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
                            </p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php else : ?>
                <p class="blog__content-none content-none">記事が投稿されていません</p>
                <?php endif; ?>
                <div class="blog__main-pagination">
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