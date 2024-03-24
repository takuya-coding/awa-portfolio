<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="voice layout-voice">
        <div class="voice__inner inner">
            <div class="voice__category category">
                <!-- <a href="" class="category__button is-active">all</a>
                <a href="" class="category__button">ライセンス講習</a>
                <a href="" class="category__button">ファンダイビング</a>
                <a href="" class="category__button">体験ダイビング</a> -->
                <?php
                    $current_term_id = get_queried_object()->term_id;
                    $terms = get_terms(array(
                        // 表示するタクソノミースラッグを記述
                        'taxonomy' => 'voice_category',
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
                        esc_url(home_url('/voice')),
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

            <!-- ページネーションが上手く機能しなかったため一部コード追記 -->
            <?php
            // 現在のページ番号を取得
            $paged = get_query_var('paged') ? get_query_var('paged') : 1; //追記
            
            // タクソノミーのスラッグを指定
            $voice_category_slug = get_query_var('voice_category');
            $args = array(
                "post_type" => "voice", // カスタム投稿のスラッグを指定
                'posts_per_page' => 6, // 1ページあたりの表示数（追記）
                'paged' => $paged, // 現在のページ番号（追記）
                'tax_query' => array(
                    array(
                        // タクソノミーのスラッグを指定
                        'taxonomy' => 'voice_category',
                        'field'    => 'slug',
                        'terms'    => $voice_category_slug,
                    ),
                ),
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
                        <!-- 文字数制限を追加 -->
                        <p class="voice-card__text">
                            <?php echo wp_trim_words(get_the_content(), 169, '...'); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- wp_reset_postdataの前にページネーションのコード記述する必要あり -->
            <!-- これにより、カスタムクエリに基づいてページネーションが正確に生成される（記事数に合わせてページネーションが生成される） -->
            <div class="voice__pagination">
                <?php
                // ページネーションの表示
                if (function_exists('wp_pagenavi')) {
                    wp_pagenavi(array('query' => $the_query));
                }
                ?>
            </div>
            <!-- wp_reset_postdataは、ページネーションのコードの後ろに記述 -->
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>
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