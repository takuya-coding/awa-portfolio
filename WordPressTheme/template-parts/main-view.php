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
    } elseif (is_page('privacypolicy')) {
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
            // 月別一覧ページかどうかのチェック
            } elseif (is_month()) {
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
            } elseif (is_page('privacypolicy')) {
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
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv2-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv2-sp.webp" alt="優雅に水面を飛び跳ねる2頭のイルカ" width="375" height="460" decoding="async">';
                // campaignページおよびサブカテゴリ（タクソノミー）のチェック
                } elseif (is_post_type_archive('campaign') || is_tax('campaign_category')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv5-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv5-sp.webp" alt="イソギンチャクの中から顔を出すカクレクマノミ" width="375" height="460" decoding="async">';
                } elseif (is_page('information')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv4-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv4-sp.webp" alt="たくさんのサンゴ礁と周辺を泳ぐ熱帯魚" width="375" height="460" decoding="async">';
                } elseif (is_home('blog')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv6-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv6-sp.webp" alt="海の中を優雅に泳ぐサメ" width="375" height="460" decoding="async">';
                } elseif (is_single()) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv6-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv6-sp.webp" alt="海の中を優雅に泳ぐサメ" width="375" height="460" decoding="async">';
                // 月別一覧ページかどうかのチェック
                } elseif (is_month()) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv6-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv6-sp.webp" alt="海の中を優雅に泳ぐサメ" width="375" height="460" decoding="async">';
                // voiceページおよびサブカテゴリ（タクソノミー）のチェック
                } elseif (is_post_type_archive('voice') || is_tax('voice_category')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv7-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv7-sp.webp" alt="2匹の黄色いチョウチョウオが優雅に泳いでいる" width="375" height="460" decoding="async">';
                } elseif (is_page('price')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv10-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv10-sp.webp" alt="きれいな海面に5人のダイバーが浮いている" width="375" height="460" decoding="async">';
                } elseif (is_page('faq')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv8-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv8-sp.webp" alt="シーサーと青い空" width="375" height="460" decoding="async">';
                } elseif (is_page('contact')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv12-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv12-sp.webp" alt="ギンガメアジの魚群サンゴ礁" width="375" height="460" decoding="async">';
                } elseif (is_page('thanks')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv12-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv12-sp.webp" alt="ギンガメアジの魚群サンゴ礁" width="375" height="460" decoding="async">';
                } elseif (is_page('sitemap')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/PF-mv9-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv9-sp.webp" alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">';
                } elseif (is_page('privacypolicy')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-sp-.webp" alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">';
                } elseif (is_page('terms-of-service')) {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-pc.webp" media="(min-width:768px)" type="image/webp" />';
                    echo '<img src="' . esc_url(get_theme_file_uri()) . '/assets/images/common/others-mv-sp-.webp" alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">';
                } else {
                    echo '<source srcset="' . esc_url(get_theme_file_uri()) . '/assets/images/common/noimage.webp" media="(min-width:768px)" type="image/webp" />';
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