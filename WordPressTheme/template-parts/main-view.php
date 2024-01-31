<?php
//まず is_page('404') の条件を確認し、404ページの場合は全体のコンテンツ出力をスキップします。
if (!is_page('404')) {
?>

<div class="main-view">
    <div class="main-view__inner">
        <h1 class="main-view__title <?php
        // 特定のページにmodifierクラスを追加
        if (is_page('faq')) {
        echo ' main-view__title--uppercase';
    } elseif (is_page('privacy-policy')) {
        echo ' main-view__title--capitalize';
    }
    ?>">
            <?php
            // 条件によって異なるタイトルを表示
            if (is_page('about-us')) {
                echo 'about&nbsp;us';
            // campaignページおよびサブカテゴリ（タクソノミー）のチェック
            } elseif (is_post_type_archive('campaign') || is_tax('campaign_category')) {
                echo 'campaign';
            } elseif (is_page('information')) {
                echo 'information';
            } elseif (is_home('blog')) {
                echo 'blog';
            } elseif (is_single()) {
                echo 'blog';
            // voiceページおよびサブカテゴリ（タクソノミー）のチェック
            } elseif (is_post_type_archive('voice') || is_tax('voice_category')) {
                echo 'voice';
            } elseif (is_page('price')) {
                echo 'price';
            } elseif (is_page('faq')) {
                echo 'faq';
            } elseif (is_page('contact')) {
                echo 'contact';
            } elseif (is_page('thanks')) {
                echo 'contact';
            } elseif (is_page('sitemap')) {
                echo 'site&nbsp;<span class="main-view__title-sitemap">map</span>';
            } elseif (is_page('privacy-policy')) {
                echo 'privacy&nbsp;policy';
            } elseif (is_page('terms-of-service')) {
                echo 'terms&nbsp;of&nbsp;<span class="main-view__title-terms">service</span>';
            } else {
                echo 'タイトルが設定されていません';
            }
            ?>
        </h1>
        <div class="main-view__img">
            <picture>
                <?php
                // 条件によって異なる画像を表示
                if (is_page('about-us')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/aboutus-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/aboutus-mv-sp.webp" alt="青空とシーサー" width="375" height="460" decoding="async">';
                // campaignページおよびサブカテゴリ（タクソノミー）のチェック
                } elseif (is_post_type_archive('campaign') || is_tax('campaign_category')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/campaign-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/campaign-mv-sp.webp" alt="二匹のチョウチョウウオが海の中を泳いでいる" width="375" height="460" decoding="async">';
                } elseif (is_page('information')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/information-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/information-mv-sp.webp" alt="岸壁付近を泳ぐダイバーと無数の黄色い熱帯魚" width="375" height="460" decoding="async">';
                } elseif (is_home('blog')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/blog-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/blog-mv-sp.webp" alt="魚のトルネード" width="375" height="460" decoding="async">';
                } elseif (is_single()) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/blog-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/blog-mv-sp.webp" alt="魚のトルネード" width="375" height="460" decoding="async">';
                // voiceページおよびサブカテゴリ（タクソノミー）のチェック
                } elseif (is_post_type_archive('voice') || is_tax('voice_category')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/voice-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/voice-mv-sp.webp" alt="きれいな海面に5人のダイバーが浮いている" width="375" height="460" decoding="async">';
                } elseif (is_page('price')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/price-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/price-mv-sp.webp" alt="水面から頭だけ出した一人のダイバー" width="375" height="460" decoding="async">';
                } elseif (is_page('faq')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/faq-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/faq-mv-sp.webp" alt="透き通るコバルトブルーの海と白い砂浜" width="375" height="460" decoding="async">';
                } elseif (is_page('contact')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/contact-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/contact-mv-sp.webp" alt="真上から眺めた激しく波が打ち寄せるコバルトブルーの海岸" width="375" height="460" decoding="async">';
                } elseif (is_page('thanks')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/contact-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/contact-mv-sp.webp" alt="真上から眺めた激しく波が打ち寄せるコバルトブルーの海岸" width="375" height="460" decoding="async">';
                } elseif (is_page('sitemap')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-sp-.webp" alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">';
                } elseif (is_page('privacy-policy')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-sp-.webp" alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">';
                } elseif (is_page('terms-of-service')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-sp-.webp" alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">';
                } else {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/noimage.webp.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/noimage.webp" alt="NoImage画像" width="375" height="460" decoding="async">';
                }
                ?>
            </picture>
        </div>
    </div>
</div>

<?php
}
?>