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


<div class="main-view">
    <div class="main-view__inner">
        <h1 class="main-view__title">price</h1>
        <div class="main-view__img">
            <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-mv-pc.webp"
                    media="(min-width:768px)" type="image/webp" />
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-mv-sp.webp"
                    alt="水面から頭だけ出した一人のダイバー" width="375" height="460" decoding="async">
            </picture>
        </div>
    </div>
</div>


<div class="main-view">
    <div class="main-view__inner">
        <h1 class="main-view__title">
            <?php
            // 条件によって異なるタイトルを表示
            if (is_page('about-us')) {
                echo 'about&nbsp;us';
            } elseif (is_page('archive-campaign')) {
                echo 'campaign';
            } elseif (is_page('page-information')) {
                echo 'information';
            } elseif (is_page('home')) {
                echo 'blog';
            } elseif (is_page('single')) {
                echo 'blog';
            } elseif (is_page('archive-voice')) {
                echo 'voice';
            } elseif (is_page('page-price')) {
                echo 'price';
            } elseif (is_page('page-faq')) {
                echo 'faq';
            } elseif (is_page('page-contact')) {
                echo 'contact';
            } elseif (is_page('page-thanks')) {
                echo 'contact';
            } elseif (is_page('page-sitemap')) {
                echo 'sitemap';
            } elseif (is_page('page-privacy-policy')) {
                echo 'privacy&nbsp;policy';
            } elseif (is_page('page-terms-of-service')) {
                echo 'terms&nbsp;of&nbsp;service';
            } elseif (is_page('404')) {
                echo '404';
                
            } else {
                echo 'タイトルが設定されていません';
            }
            ?>
        </h1>
        <div class="main-view__img">
            <picture>
                <?php 
                // 条件によって異なる画像を表示
                if (is_page('page1')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/page1-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/page1-sp.webp" alt="画像の説明1" width="375" height="460" decoding="async">';
                } elseif (is_page('page2')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/page2-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/page2-sp.webp" alt="画像の説明2" width="375" height="460" decoding="async">';
                } else {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/default-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/default-sp.webp" alt="デフォルト画像の説明" width="375" height="460" decoding="async">';
                }
                ?>
            </picture>
        </div>
    </div>
</div>