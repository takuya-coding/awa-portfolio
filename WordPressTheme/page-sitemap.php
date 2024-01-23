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
                                <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                                <ul class="common-nav__lv2-items">
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/campaign_category/license-course")) ?>">ライセンス講習</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/campaign_category/fun-diving")) ?>">ファンダイビング</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/campaign_category/trial-diving")) ?>">体験ダイビング</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                            </div>
                        </div>
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                                <ul class="common-nav__lv2-items">
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(add_query_arg('active-tab', 'tab-1', home_url('/information'))); ?>">ライセンス講習</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(add_query_arg('active-tab', 'tab-2', home_url('/information'))); ?>">ファンダイビング</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(add_query_arg('active-tab', 'tab-3', home_url('/information'))); ?>">体験ダイビング</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                            </div>
                        </div>
                    </li>
                    <li class="common-nav__item-wrap common-nav__item-wrap--gap">
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
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
                                <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/privacy-policy")) ?>">プライバシー<br
                                        class="u-mobile">ポリシー</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                            </div>
                            <div class="common-nav__item common-nav__item--color">
                                <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
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