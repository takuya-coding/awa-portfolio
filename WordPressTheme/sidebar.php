<aside class="blog__sidebar blog-sidebar">
    <div class="blog-sidebar__item">
        <h2 class="blog-sidebar__item-title sidebar-title">人気記事</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 3,
            'order'=>'DESC',
        );
        $the_view_query = new WP_Query( $args );
        ?>
        <?php if ($the_view_query->have_posts()): ?>
        <div class="blog-sidebar__item-cards sidebar-cards">
            <?php while($the_view_query->have_posts()): $the_view_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="sidebar-cards__item sidebar-card">
                <div class="sidebar-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail( 'full', array( 'width' => 121, 'height' => 90, 'decoding' => 'async', 'class' => '' ) ); ?>
                    <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>" alt="NoImage画像" />
                    <?php endif ; ?>
                </div>
                <div class="sidebar-card__body">
                    <time class="sidebar-card__time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <!-- 文字数制限を追加 -->
                    <h3 class="sidebar-card__title"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></h3>
                </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <p class="blog-sidebar__content-none content-none">記事が投稿されていません</p>
        <?php endif; ?>
    </div>

    <div class="blog-sidebar__item">
        <h2 class="blog-sidebar__item-title sidebar-title">口コミ</h2>
        <?php
        $args = array(
            "post_type" => "voice",
            "posts_per_page" => 1,
            "orderby" => "date",
            "order" => "DESC",
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="blog-sidebar__item-voice sidebar-voice">
            <div class="sidebar-voice__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'full', array( 'width' => 294, 'height' => 218, 'decoding' => 'async', 'class' => '' ) ); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>" alt="NoImage画像" />
                <?php endif ; ?>
            </div>
            <div class="sidebar-voice__body">
                <!-- メタ情報はカスタムフィールド導入 -->
                <div class="sidebar-voice__customer-info"><?php echo CFS()->get('meta_info'); ?></div>
                <!-- 文字数制限を追加 -->
                <h3 class="sidebar-voice__title"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h3>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p class="blog-sidebar__content-none content-none">記事が投稿されていません</p>
        <?php endif; ?>
        <div class="blog-sidebar__item-button">
            <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button">view&nbsp;more<span class="button__arrow"></span></a>
        </div>
    </div>

    <div class="blog-sidebar__item">
        <h2 class="blog-sidebar__item-title sidebar-title">キャンペーン</h2>
        <?php
        $args = array(
            "post_type" => "campaign",
            "posts_per_page" => 2,
            "orderby" => "date",
            "order" => "DESC",
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="blog-sidebar__item-campaign-cards sidebar-campaign-cards">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="sidebar-campaign-cards__item">
                <div class="campaign-card">
                    <div class="campaign-card__img campaign-card__img--sidebar">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'full', array( 'width' => 294, 'height' => 188, 'decoding' => 'async', 'loading' => 'lazy', 'class' => '' ) ); ?>
                        <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>" alt="NoImage画像" />
                        <?php endif ; ?>
                    </div>
                    <div class="campaign-card__body campaign-card__body--sidebar">
                        <?php
                        // 'campaign_title' の文字数制限を追加
                        $campaign_title = get_field('campaign_title');
                        if ($campaign_title) :
                            if (mb_strlen($campaign_title) > 30) {
                            $campaign_title = mb_substr($campaign_title, 0, 30) . '...';
                        }
                        ?>
                        <h3 class="campaign-card__title campaign-card__title--sidebar">
                            <?php echo esc_html($campaign_title); ?></h3>
                        <?php endif; ?>
                        <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ&#040;お一人様&#041;
                        </p>
                        <div class="campaign-card__price campaign-card__price--sidebar">
                            <?php if( get_field('campaign_regular-price')): ?>
                            <p class="campaign-card__price-before campaign-card__price-before--sidebar">
                                <del><?php the_field('campaign_regular-price'); ?></del>
                            </p>
                            <?php endif; ?>
                            <?php if( get_field('campaign_campaign-price')): ?>
                            <p class="campaign-card__price-after campaign-card__price-after--sidebar">
                                <?php the_field('campaign_campaign-price'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <p class="blog-sidebar__content-none content-none">記事が投稿されていません</p>
        <?php endif; ?>
        <div class="blog-sidebar__item-button">
            <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button">view&nbsp;more<span class="button__arrow"></span></a>
        </div>
    </div>

    <div class="blog-sidebar__item">
        <h2 class="blog-sidebar__item-title sidebar-title">アーカイブ</h2>
        <div class="blog-sidebar__item-archive sidebar-archive">

            <!-- 年別に分けて月のアーカイブリストを表示するためのコード -->
            <?php
            $year_prev = null;
            $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month,
                YEAR( post_date ) AS year
                FROM $wpdb->posts
                WHERE post_status = 'publish' and post_date <= now()
                and post_type = 'post'
                GROUP BY month, year
                ORDER BY post_date DESC");

            foreach($months as $month) :
                $year_current = $month->year;
                if ($year_current != $year_prev){
                    if ($year_prev != null){ ?>
            </ul>
        </div> <!-- Closing tags for the list and accordion item -->
        <?php } ?>
        <div class="sidebar-archive__accordion js-accordion-item">
            <p class="sidebar-archive__year js-accordion-year"><?php echo $month->year; ?></p>
            <ul class="sidebar-archive__list js-accordion-list">
                <?php
            } ?>
                <li class="sidebar-archive__month">
                    <a href="<?php echo get_site_url(); ?>/<?php echo $month->year; ?>/<?php echo str_pad($month->month, 2, '0', STR_PAD_LEFT); ?>/">
                        <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $year_current)) ?>月
                    </a>
                </li>
                <?php $year_prev = $year_current;
            endforeach; ?>
            </ul>
        </div> <!-- Closing tags for the final list and accordion item -->

    </div>
    </div>
</aside>