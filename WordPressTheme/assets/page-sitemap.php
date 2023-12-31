<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">site&nbsp;<span class="main-view__title-sitemap">map</span></h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/images/common/others-mv-pc.webp"
                        media="(min-width:768px)" type="image/webp" />
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/common/others-mv-sp-.webp"
                        alt="サンゴ礁の周りをたくさんの熱帯魚が泳いでいる" width="375" height="460" decoding="async">
                </picture>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumbs layout-breadcrumbs">
        <div class="breadcrumbs__inner inner">
            <!-- Breadcrumb NavXT -->
            <span>
                <a href="index.html" class="home">
                    <span>top</span>
                </a>
            </span>
            <span>&gt;</span>
            <span>
                <span class="post post-page current-item">サイトマップ</span>
            </span>
        </div>
    </div>

    <div class="sitemap layout-sitemap">
        <div class="sitemap__content common-nav common-nav--color">
            <div class="common-nav__inner inner">
                <ul class="common-nav__items common-nav__items--gap">
                    <li class="common-nav__item-wrap common-nav__item-wrap--gap">
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item common-nav__item--color">
                                <a href="archive-campaign.html">キャンペーン</a>
                                <ul class="common-nav__lv2-items">
                                    <li class="common-nav__lv2-item"><a href="archive-campaign.html">ライセンス講習</a></li>
                                    <li class="common-nav__lv2-item"><a href="archive-campaign.html">ファンダイビング</a></li>
                                    <li class="common-nav__lv2-item"><a href="archive-campaign.html">体験ダイビング</a></li>
                                </ul>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-about.html">私たちについて</a>
                            </div>
                        </div>
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-diving-info.html">ダイビング情報</a>
                                <ul class="common-nav__lv2-items">
                                    <li class="common-nav__lv2-item"><a
                                            href="page-diving-info.html?active-tab=tab-1">ライセンス講習</a></li>
                                    <li class="common-nav__lv2-item"><a
                                            href="page-diving-info.html?active-tab=tab-2">ファンダイビング</a></li>
                                    <li class="common-nav__lv2-item"><a
                                            href="page-diving-info.html?active-tab=tab-3">体験ダイビング</a></li>
                                </ul>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="home.html">ブログ</a>
                            </div>
                        </div>
                    </li>
                    <li class="common-nav__item-wrap common-nav__item-wrap--gap">
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item common-nav__item--color">
                                <a href="archive-voices.html">お客様の声</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-price.html">料金一覧</a>
                                <ul class="common-nav__lv2-items">
                                    <li class="common-nav__lv2-item"><a href="page-price.html">ライセンス講習</a></li>
                                    <li class="common-nav__lv2-item"><a href="page-price.html">体験ダイビング</a></li>
                                    <li class="common-nav__lv2-item"><a href="page-price.html">ファンダイビング</a></li>
                                    <li class="common-nav__lv2-item"><a href="page-price.html">スペシャルダイビング</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-faq.html">よくある質問</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-sitemap.html">サイトマップ</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-terms.html">利用規約</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="page-contact.html">お問い合わせ</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/common/logo.svg" alt="CodeUps">
                    </div>
                    <div class="common-contact__shop-info-wrapper">
                        <div class="common-contact__shop-info-text">
                            <p class="common-contact__address">沖縄県那覇市1&#045;1</p>
                            <a href="tel:+81-120-000-0000"
                                class="common-contact__tel">tel&#058;0120&#045;000&#045;0000</a>
                            <p class="common-contact__business-hours">営業時間&#058;8&#058;30&#045;19&#058;00</p>
                            <p class="common-contact__regular-holiday">定休日&#058;毎週火曜日</p>
                        </div>
                        <div class="common-contact__shop-info-map">
                            <div class="common-contact__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401127!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1692299234684!5m2!1sja!2sjp"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-contact__more">
                    <div class="common-contact__title section-title">
                        <p class="section-title__en section-title__en--size">contact</p>
                        <h2 class="section-title__ja section-title__ja--position">お問い合わせ</h2>
                    </div>
                    <p class="common-contact__text">ご予約・お問い合わせはコチラ</p>
                    <div class="common-contact__button">
                        <a href="#" class="button">contact&nbsp;us<span class="button__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>