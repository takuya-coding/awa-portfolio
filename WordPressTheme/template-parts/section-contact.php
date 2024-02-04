<section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
    <div class="common-contact__inner inner">
        <div class="common-contact__wrapper">
            <div class="common-contact__shop-info">
                <div class="common-contact__logo">
                    <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/logo.svg" )); ?>"
                        alt="CodeUps">
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
                        <!-- <p class="common-contact__address">沖縄県那覇市1&#045;1</p> -->
                        <!-- <a href="tel:+81-120-000-0000" class="common-contact__tel">tel&#058;0120&#045;000&#045;0000</a> -->
                        <!-- <p class="common-contact__business-hours">営業時間&#058;8&#058;30&#045;19&#058;00</p> -->
                        <!-- <p class="common-contact__regular-holiday">定休日&#058;毎週火曜日</p> -->
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
                            <!-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401127!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1692299234684!5m2!1sja!2sjp"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
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
                    <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button">contact&nbsp;us<span
                            class="button__arrow"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>