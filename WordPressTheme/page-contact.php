<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">contact</h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="./assets/images/common/contact-mv-pc.webp" media="(min-width:768px)"
                        type="image/webp" />
                    <img src="./assets/images/common/contact-mv-sp.webp" alt="真上から眺めた激しく波が打ち寄せるコバルトブルーの海岸" width="375"
                        height="460" decoding="async">
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
                <span class="post post-page current-item">お問い合わせ</span>
            </span>
        </div>
    </div>

    <!-- Contact Form 7のショートコードを記述 -->
    <?php echo do_shortcode('[contact-form-7 id="4c5752c" title="お問い合わせ"]'); ?>

    <div class="wpcf7 js" id="wpcf7-f106-o1" lang="ja" dir="ltr">
        <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
        </div>
        <form action="/contact/#wpcf7-f106-o1" method="post" class="wpcf7-form init" aria-label="コンタクトフォーム"
            novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="106">
                <input type="hidden" name="_wpcf7_version" value="5.8.6">
                <input type="hidden" name="_wpcf7_locale" value="ja">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f106-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="contact layout-contact">
                <div class="contact__inner inner">
                    <div class="contact__list">
                        <!-- お名前 -->
                        <div class="contact__item">
                            <label for="your-name" class="contact__item-title">お名前<span>必&nbsp;須</span></label>
                            <span class="contact__item-input">
                                <span class="wpcf7-form-control-wrap" data-name="name1"><input size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="your-name"
                                        aria-required="true" aria-invalid="false" placeholder="沖縄 太郎" value=""
                                        type="text" name="name1"></span>
                            </span>
                        </div>

                        <!-- メールアドレス -->
                        <div class="contact__item">
                            <label for="your-email" class="contact__item-title">メールアドレス<span>必&nbsp;須</span></label>
                            <span class="contact__item-input">
                                <span class="wpcf7-form-control-wrap" data-name="email"><input size="40"
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                        id="your-email" aria-required="true" aria-invalid="false"
                                        placeholder="aaa000@ggmail.com" value="" type="email" name="email"></span>
                            </span>
                        </div>

                        <!-- 電話番号 -->
                        <div class="contact__item">
                            <label for="your-tel" class="contact__item-title">電話番号<span>必&nbsp;須</span></label>
                            <span class="contact__item-input">
                                <span class="wpcf7-form-control-wrap" data-name="tel"><input size="40"
                                        class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                        id="your-tel" aria-required="true" aria-invalid="false"
                                        placeholder="000-0000-0000" value="" type="tel" name="tel"></span>
                            </span>
                        </div>

                        <!-- お問い合わせ項目 -->
                        <div class="contact__item">
                            <span class="contact__item-title">お問い合わせ項目<span>必&nbsp;須</span></span>
                            <span class="wpcf7-form-control-wrap" data-name="check"><span
                                    class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox"
                                    id="your-check"><span class="wpcf7-list-item first"><label><input type="checkbox"
                                                name="check" value="ダイビング講習について"><span
                                                class="wpcf7-list-item-label">ダイビング講習について</span></label></span><span
                                        class="wpcf7-list-item"><label><input type="checkbox" name="check"
                                                value="ファンダイビングについて"><span
                                                class="wpcf7-list-item-label">ファンダイビングについて</span></label></span><span
                                        class="wpcf7-list-item last"><label><input type="checkbox" name="check"
                                                value="体験ダイビングについて"><span
                                                class="wpcf7-list-item-label">体験ダイビングについて</span></label></span></span></span>
                        </div>

                        <!-- キャンペーン -->
                        <div class="contact__item">
                            <span class="contact__item-title">キャンペーン</span>
                            <span class="contact__item-select-container">
                                <span class="wpcf7-form-control-wrap" data-name="category"><select
                                        class="wpcf7-form-control wpcf7-select" id="your-category" aria-invalid="false"
                                        name="category">
                                        <option value="">—以下から選択してください—</option>
                                        <option value="キャンペーン1">キャンペーン1</option>
                                        <option value="キャンペーン2">キャンペーン2</option>
                                        <option value="キャンペーン3">キャンペーン3</option>
                                    </select></span>
                            </span>
                        </div>

                        <!-- お問い合わせ内容 -->
                        <div class="contact__item">
                            <label for="your-textarea" class="contact__item-title">お問い合わせ内容<span>必&nbsp;須</span></label>
                            <span class="contact__item-textarea">
                                <span class="wpcf7-form-control-wrap" data-name="textarea"><textarea cols="40" rows="10"
                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                        id="your-textarea" aria-required="true" aria-invalid="false"
                                        name="textarea"></textarea></span>
                            </span>
                        </div>

                        <!-- 同意確認 -->
                        <div class="contact__accept">
                            <span class="wpcf7-form-control-wrap" data-name="accept"><span
                                    class="wpcf7-form-control wpcf7-acceptance"><span
                                        class="wpcf7-list-item"><label><input type="checkbox" name="accept" value="1"
                                                id="your-accept" aria-invalid="false"><span
                                                class="wpcf7-list-item-label"><a
                                                    href="page-privacy-policy.html">個人情報の取り扱い</a>について同意のうえ送信します。</span></label></span></span></span>
                        </div>

                        <!-- 送信ボタン -->
                        <div class="contact__button">
                            <div class="contact__button-container">
                                <input type="submit" value="Send">
                                <span class="contact__button-arrow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
        </form>
    </div>
</main>
<?php get_footer(); ?>