<section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
    <div class="common-contact__inner inner">
        <div class="common-contact__wrapper">
            <div class="common-contact__shop-info">
                <div class="common-contact__logo">
                    <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/PF-shop-logo.webp" )); ?>" alt="blue wave">
                </div>
                <div class="common-contact__shop-info-wrapper">
                    <div class="common-contact__shop-info-text">
                        <?php
                        // get_query_varを使用して渡されたIDを取得（フロントページに設定したカスタムフィールドの情報を受け取る）
                        $contact_page_id = get_query_var('contact_page_id', false);

                        // カスタムフィールドの値を取得するためのIDを設定（フロントページに設定したカスタムフィールドの値を取得）
                        $id_to_use = $contact_page_id ? $contact_page_id : $post->ID;

                        // 住所の表示
                        $address = get_field('contact-address', $id_to_use);
                        if ($address) {
                            // esc_html関数を使用して安全なHTMLとして出力
                            echo '<p class="common-contact__address">' . esc_html($address) . '</p>';
                        }

                        // 電話番号の表示
                        $tel = get_field('contact-tel', $id_to_use);
                        if ($tel) {
                            echo '<a href="tel:' . esc_attr($tel) . '" class="common-contact__tel">tel&#058;' . esc_html($tel) . '</a>';
                        }

                        // 営業時間の表示
                        $business_hours = get_field('contact-business-hours', $id_to_use);
                        if ($business_hours) {
                            echo '<p class="common-contact__business-hours">営業時間&#058;' . esc_html($business_hours) . '</p>';
                        }

                        // 定休日の表示
                        $regular_holiday = get_field('contact-regular-holiday', $id_to_use);
                        if ($regular_holiday) {
                            echo '<p class="common-contact__regular-holiday">定休日&#058;' . esc_html($regular_holiday) . '</p>';
                        }
                        ?>
                    </div>
                    <div class="common-contact__shop-info-map">
                        <div class="common-contact__map">
                            <?php
                            global $post;
                            // Googleマップのiframeの表示
                            $map = get_field('contact-map', $id_to_use);
                            if ($map) {
                                // wp_kses_post関数は、投稿内容に許可されたHTMLタグのみを含めるようにフィルタリングする。→iframeタグはデフォルトで許可されていないため、カスタムフィルタリングルールを定義する必要がある。
                                echo wp_kses($map, array(
                                    'iframe' => array(
                                        'src' => true,
                                        'width' => true,
                                        'height' => true,
                                        'style' => true,
                                        'frameborder' => true,
                                        'allowfullscreen' => true
                                    )
                                ));
                            }
                            ?>
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
                    <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button button--common-contact">contact&nbsp;us<span class="button__arrow button__arrow--common-contact"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>