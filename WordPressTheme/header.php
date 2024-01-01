<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header layout-header js-header">
        <div class="header__inner">
            <h1 class="header__logo js-header-logo">
                <a href="index.html"><img
                        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg"
                        alt="CodeUps"></a>
            </h1>
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
                                <a href="archive-campaign.html">キャンペーン</a>
                                <ul class="sp-nav__lv2-items">
                                    <li class="sp-nav__lv2-item"><a href="archive-campaign.html">ライセンス講習</a></li>
                                    <li class="sp-nav__lv2-item"><a href="archive-campaign.html">ファンダイビング</a></li>
                                    <li class="sp-nav__lv2-item"><a href="archive-campaign.html">体験ダイビング</a></li>
                                </ul>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-about.html">私たちについて</a>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-diving-info.html">ダイビング情報</a>
                                <ul class="sp-nav__lv2-items">
                                    <li class="sp-nav__lv2-item"><a
                                            href="page-diving-info.html?active-tab=tab-1">ライセンス講習</a></li>
                                    <li class="sp-nav__lv2-item"><a
                                            href="page-diving-info.html?active-tab=tab-2">ファンダイビング</a></li>
                                    <li class="sp-nav__lv2-item"><a
                                            href="page-diving-info.html?active-tab=tab-3">体験ダイビング</a></li>
                                </ul>
                            </div>
                            <div class="sp-nav__item">
                                <a href="home.html">ブログ</a>
                            </div>
                        </li>
                        <li class="sp-nav__item-wrap">
                            <div class="sp-nav__item">
                                <a href="archive-voices.html">お客様の声</a>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-price.html">料金一覧</a>
                                <ul class="sp-nav__lv2-items">
                                    <li class="sp-nav__lv2-item"><a href="page-price.html">ライセンス講習</a></li>
                                    <li class="sp-nav__lv2-item"><a href="page-price.html">体験ダイビング</a></li>
                                    <li class="sp-nav__lv2-item"><a href="page-price.html">ファンダイビング</a></li>
                                    <li class="sp-nav__lv2-item"><a href="page-price.html">スペシャルダイビング</a></li>
                                </ul>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-faq.html">よくある質問</a>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-sitemap.html">サイトマップ</a>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-privacy-policy.html">プライバシー<br>ポリシー</a>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-terms.html">利用規約</a>
                            </div>
                            <div class="sp-nav__item">
                                <a href="page-contact.html">お問い合わせ</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="header__pc-nav pc-nav">
                <ul class="pc-nav__items">
                    <li class="pc-nav__item">
                        <a href="archive-campaign.html">
                            <p>campaign</p><span>キャンペーン</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="page-about.html">
                            <p>about&nbsp;us</p><span>私たちについて</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="page-diving-info.html">
                            <p>information</p><span>ダイビング情報</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="home.html">
                            <p>blog</p><span>ブログ</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="archive-voices.html">
                            <p>voice</p><span>お客様の声</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="page-price.html">
                            <p>price</p><span>料金一覧</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="page-faq.html">
                            <p>FAQ</p><span>よくある質問</span>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="page-contact.html">
                            <p>contact</p><span>お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>