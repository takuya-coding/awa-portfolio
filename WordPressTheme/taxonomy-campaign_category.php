<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
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

            <!-- ページネーションが上手く機能しなかったため一部コード追記 -->
            <?php
            // 現在のページ番号を取得
            $paged = get_query_var('paged') ? get_query_var('paged') : 1; //追記
            
            // タクソノミーのスラッグを指定
            $campaign_category_slug = get_query_var('campaign_category');
            $args = array(
                "post_type" => "campaign", // カスタム投稿のスラッグを指定
                'posts_per_page' => 4, // 1ページあたりの表示数（追記）
                'paged' => $paged, // 現在のページ番号（追記）
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
                            <?php
                            // 'campaign_title' の文字数制限を追加
                            $campaign_title = get_field('campaign_title');
                            if ($campaign_title) :
                                if (mb_strlen($campaign_title) > 30) {
                                    $campaign_title = mb_substr($campaign_title, 0, 30) . '...';
                                }
                                ?>
                            <h3 class="campaign-card__title campaign-card__title--campaign">
                                <?php echo esc_html($campaign_title); ?>
                            </h3>
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
                                <?php
                                // 'campaign_text' の文字数制限を追加
                                $campaign_text = get_field('campaign_text');
                                if ($campaign_text) :
                                    if (mb_strlen($campaign_text) > 200) {
                                        $campaign_text = mb_substr($campaign_text, 0, 200) . '...';
                                    }
                                    ?>
                                <p class="campaign-card__campaign-text">
                                    <?php echo esc_html($campaign_text); ?>
                                </p>
                                <?php endif; ?>
                                <div class="campaign-card__campaign-list">
                                    <!-- <time class="campaign-card__campaign-time"
                                        datetime="P122D">2023&#047;6&#047;1&#045;9&#047;30</time> -->
                                    <?php
                                    $campaign_period = get_field('campaign_period');
                                    ?>
                                    <!-- $campaign_period が存在するかどうかをチェックし、次に campaign_period_start と
                                    campaign_period_endの両方が空でないことを確認 -->
                                    <?php if ($campaign_period && !empty($campaign_period['campaign_period_start']) && !empty($campaign_period['campaign_period_end'])): ?>
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
            </div>
            <!-- wp_reset_postdataの前にページネーションのコード記述する必要あり -->
            <!-- これにより、カスタムクエリに基づいてページネーションが正確に生成される（記事数に合わせてページネーションが生成される） -->
            <div class="campaign__pagination">
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