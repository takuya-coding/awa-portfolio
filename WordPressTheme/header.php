<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 404ページ表示されたら、5秒後にトップページにリダイレクトさせる -->
    <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 5; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- 404ページの場合のみ、div開始タグ挿入（コンテンツ量が少なく短いページでもfooterを最下部に表示するため）→閉じタグはfooter.phpの方に記述 -->
    <?php if (is_404()) : ?>
    <div class="wrap wrap--404">
        <?php endif; ?>
        <header class="header layout-header js-header">
            <div class="header__inner">
                <!-- トップページの場合はh1タグ、それ以外はdivタグを出力 -->
                <?php if (is_front_page()) : ?>
                <h1 class="header__logo js-header-logo">
                    <a href="<?php echo esc_url(home_url("/")) ?>"><img
                            src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/PF-shop-logo-black.png"
                            alt="blue wave"></a>
                </h1>
                <?php else : ?>
                <div class="header__logo js-header-logo">
                    <a href="<?php echo esc_url(home_url("/")) ?>"><img
                            src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/PF-shop-logo-black.png"
                            alt="blue wave"></a>
                </div>
                <?php endif; ?>
                <button type="button" class="header__hamburger hamburger js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <nav class="header__sp-nav sp-nav js-drawer">
                    <div class="sp-nav__inner">
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item-wrap">
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                                    <ul class="sp-nav__lv2-items">
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/campaign_category/license-course")) ?>">ライセンス講習</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/campaign_category/fun-diving")) ?>">ファンダイビング</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/campaign_category/trial-diving")) ?>">体験ダイビング</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                                    <ul class="sp-nav__lv2-items">
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(add_query_arg('active-tab', 'tab-1', home_url('/information'))); ?>">ライセンス講習</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(add_query_arg('active-tab', 'tab-2', home_url('/information'))); ?>">ファンダイビング</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(add_query_arg('active-tab', 'tab-3', home_url('/information'))); ?>">体験ダイビング</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                                </div>
                            </li>
                            <li class="sp-nav__item-wrap">
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                                    <ul class="sp-nav__lv2-items">
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/price")) . '#license-course'; ?>">ライセンス講習</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/price")) . '#trial-diving'; ?>">体験ダイビング</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/price")) . '#fun-diving'; ?>">ファンダイビング</a>
                                        </li>
                                        <li class="sp-nav__lv2-item"><a
                                                href="<?php echo esc_url(home_url("/price")) . '#special-diving'; ?>">スペシャルダイビング</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br>ポリシー</a>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                                </div>
                                <div class="sp-nav__item">
                                    <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="header__pc-nav pc-nav">
                    <ul class="pc-nav__items">
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/about-us")) ?>">
                                <p>about&nbsp;us</p><span>私たちについて</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/campaign")) ?>">
                                <p>campaign</p><span>キャンペーン</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/information")) ?>">
                                <p>information</p><span>ダイビング情報</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/blog")) ?>">
                                <p>blog</p><span>ブログ</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/voice")) ?>">
                                <p>voice</p><span>お客様の声</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/price")) ?>">
                                <p>price</p><span>料金一覧</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/faq")) ?>">
                                <p>FAQ</p><span>よくある質問</span>
                            </a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url("/contact")) ?>">
                                <p>contact</p><span>お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>