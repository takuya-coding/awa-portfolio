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

    <div class="contact layout-contact">
        <div class="contact__inner inner">
            <div class="contact__list">
                <!-- お名前 -->
                <div class="contact__item">
                    <label for="your-name" class="contact__item-title">お名前<span>必&nbsp;須</span></label>
                    <span class="contact__item-input">
                        <input type="text" name="name" value="" id="your-name" required="required"
                            placeholder="沖縄&emsp;太郎">
                    </span>
                </div>

                <!-- メールアドレス -->
                <div class="contact__item">
                    <label for="your-email" class="contact__item-title">メールアドレス<span>必&nbsp;須</span></label>
                    <span class="contact__item-input">
                        <input type="email" name="email" value="" id="your-email" required="required"
                            placeholder="aaa000@ggmail.com">
                    </span>
                </div>

                <!-- 電話番号 -->
                <div class="contact__item">
                    <label for="your-tel" class="contact__item-title">電話番号<span>必&nbsp;須</span></label>
                    <span class="contact__item-input">
                        <input type="tel" name="tel" value="" id="your-tel" required="required"
                            placeholder="000-0000-0000">
                    </span>
                </div>

                <!-- お問い合わせ項目 -->
                <div class="contact__item">
                    <span class="contact__item-title">お問い合わせ項目<span>必&nbsp;須</span></span>
                    <span class="contact__item-check">
                        <span class="contact__item-checkbox">
                            <span class="contact__item-check-1">
                                <label class="contact__item-check-label">
                                    <input type="checkbox" name="check" value="ダイビング講習について" checked="checked">
                                    <span class="contact__item-check-text">ダイビング講習について</span>
                                </label>
                            </span>
                            <span class="contact__item-check-2">
                                <label class="contact__item-check-label">
                                    <input type="checkbox" name="check" value="ファンダイビングについて">
                                    <span class="contact__item-check-text">ファンダイビングについて</span>
                                </label>
                            </span>
                            <span class="contact__item-check-3">
                                <label class="contact__item-check-label">
                                    <input type="checkbox" name="check" value="体験ダイビングについて">
                                    <span class="contact__item-check-text">体験ダイビングについて</span>
                                </label>
                            </span>
                        </span>
                    </span>
                </div>

                <!-- キャンペーン -->
                <div class="contact__item">
                    <span class="contact__item-title">キャンペーン</span>
                    <span class="contact__item-select-container">
                        <select name="select" class="contact__item-select-box">
                            <option value="">キャンペーン内容を選択</option>
                            <option value="キャンペーン1">キャンペーン1</option>
                            <option value="キャンペーン2">キャンペーン2</option>
                            <option value="キャンペーン3">キャンペーン3</option>
                        </select>
                    </span>
                </div>

                <!-- お問い合わせ内容 -->
                <div class="contact__item">
                    <label for="your-textarea" class="contact__item-title">お問い合わせ内容<span>必&nbsp;須</span></label>
                    <span class="contact__item-textarea">
                        <textarea name="textarea" id="your-textarea" required="required"></textarea>
                    </span>
                </div>

                <!-- 同意確認 -->
                <div class="contact__accept">
                    <span class="contact__accept-check">
                        <span>
                            <span>
                                <label class="contact__accept-check-label">
                                    <input type="checkbox" name="accept" value="1">
                                    <span class="contact__accept-check-text"><a
                                            href="page-privacy-policy.html">個人情報の取り扱い</a>について同意のうえ送信します。</span>
                                </label>
                            </span>
                        </span>
                    </span>
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
</main>
<?php get_footer(); ?>