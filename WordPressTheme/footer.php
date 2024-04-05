<footer class="footer layout-footer">
    <div class="footer__inner inner">
        <div class="footer__head">
            <div class="footer__logo">
                <a href="<?php echo esc_url(home_url("/")) ?>"><img
                        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/PF-shop-logo-black.png"
                        alt="blue wave"></a>
            </div>
            <div class="footer__icon">
                <a href="https://www.facebook.com/login" target="_blank" class="footer__icon-facebook"><img
                        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/facebook.svg"
                        alt="facebookアイコン"></a>
                <a href="https://www.instagram.com/accounts/login/" target="_blank" class="footer__icon-instagram"><img
                        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/instagram.svg"
                        alt="instagramアイコン"></a>
            </div>
        </div>
        <div class="footer__nav common-nav">
            <div class="common-nav__inner">
                <ul class="common-nav__items">
                    <li class="common-nav__item-wrap">
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item">
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
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                            </div>
                        </div>
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item">
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
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                            </div>
                        </div>
                    </li>
                    <li class="common-nav__item-wrap">
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                            </div>
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                                <ul class="common-nav__lv2-items">
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/price")) . '#license-course'; ?>">ライセンス講習</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/price")) . '#trial-diving'; ?>">体験ダイビング</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/price")) . '#fun-diving'; ?>">ファンダイビング</a>
                                    </li>
                                    <li class="common-nav__lv2-item"><a
                                            href="<?php echo esc_url(home_url("/price")) . '#special-diving'; ?>">スペシャルダイビング</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-nav__item-wrap-for-pc">
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                            </div>
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                            </div>
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br
                                        class="u-mobile">ポリシー</a>
                            </div>
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                            </div>
                            <div class="common-nav__item">
                                <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <small
            class="footer__copyright">copyright&nbsp;&copy;&nbsp;2021&nbsp;&#045;&nbsp;2024&nbsp;codeups&nbsp;LLC&#046;&nbsp;all&nbsp;rights&nbsp;reserved&#046;</small>
    </div>
</footer>

<button class="to-top js-to-top"></button>
<?php wp_footer(); ?>
<!-- 404ページの場合のみ、div閉じタグ挿入（コンテンツ量が少なく短いページでもfooterを最下部に表示するため）→開始タグはheader.phpの方に記述 -->
<?php if (is_404()) : ?>
</div>
<?php endif; ?>
</body>

</html>