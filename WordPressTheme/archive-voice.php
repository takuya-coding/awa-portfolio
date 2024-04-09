<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="voice layout-voice">
        <div class="voice__inner inner">
            <div class="voice__category category">
                <?php
                $current_term_id = get_queried_object_id(); // 現在のタームIDを取得
                $terms = get_terms(array(
                    'taxonomy' => 'voice_category',
                    'orderby'  => 'name',
                    'order'    => 'ASC',
                    'number'   => 5
                ));

                $home_class = (is_post_type_archive('voice')) ? 'is-active' : ''; // 'voice' がカスタム投稿タイプの場合
                $home_link = sprintf(
                    '<a class="category__button %s" href="%s" alt="%s">all</a>',
                    $home_class,
                    esc_url(home_url('/voice')),
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

            <!-- ページネーション一部コード追記 -->
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //追記
            $args = array(
                'post_type' => 'voice', // カスタム投稿のスラッグを指定
                'posts_per_page' => 6, // 1ページあたりの表示数
                'paged' => $paged // 現在のページ番号（追記）
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
                                    <!-- メタ情報はカスタムフィールド導入 -->
                                    <span class="voice-card__customer-info">
                                        <?php echo CFS()->get('meta_info'); ?>
                                    </span>
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
                                <?php the_post_thumbnail( 'full', array( 'width' => 151, 'height' => 117, 'decoding' => 'async', 'class' => '' ) ); ?>
                                <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>" alt="NoImage画像" />
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
            <p class="voice__content-none content-none">記事が投稿されていません</p>
            <?php endif; ?>

            <div class="voice__pagination">
                <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                } ?>
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