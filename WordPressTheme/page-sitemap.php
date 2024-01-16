<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>


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

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>