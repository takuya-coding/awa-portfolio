<?php get_header(); ?>
<main>
    <div class="top-main-view swiper js-top-main-view-swiper">
        <div class="top-main-view__inner">
            <h2 class="top-main-view__main-title">diving</h2>
            <p class="top-main-view__sub-title">into&nbsp;the&nbsp;ocean</p>
        </div>
        <div class="top-main-view__wrapper swiper-wrapper">
            <div class="top-main-view__slide swiper-slide">
                <div class="top-main-view__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv1-pc.webp"
                            media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv1-sp.webp"
                            alt="ウミガメがきれいな海の中を泳いでいる" width="375" height="667" decoding="async">
                    </picture>
                </div>
            </div>
            <div class="top-main-view__slide swiper-slide">
                <div class="top-main-view__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv2-pc.webp"
                            media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv2-sp.webp"
                            alt="2人のダイバーが海の中でウミガメに遭遇" width="375" height="667" decoding="async">
                    </picture>
                </div>
            </div>
            <div class="top-main-view__slide swiper-slide">
                <div class="top-main-view__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv3-pc.webp"
                            media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv3-sp.webp"
                            alt="の上からダイビングスポットを見た際の景色" width="375" height="667" decoding="async">
                    </picture>
                </div>
            </div>
            <div class="top-main-view__slide swiper-slide">
                <div class="top-main-view__img">
                    <picture>
                        <source
                            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv4-pc.webp"
                            media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/top-mv4-sp.webp"
                            alt="美しいビーチと青い空" width="375" height="667" decoding="async">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="top-campaign layout-top-campaign" id="campaign">
        <div class="top-campaign__inner inner">

            <div class="top-campaign__title section-title">
                <p class="section-title__en">campaign</p>
                <h2 class="section-title__ja">キャンペーン</h2>
            </div>

            <!-- campaign-cardsにoverflow: hiddenすると、ボタンも消えてしまうため、campaign-cardsクラスの外側に出す -->
            <div class="top-campaign__swiper-controller">
                <div class="top-campaign__swiper-button-prev swiper-button-prev"></div>
                <div class="top-campaign__swiper-button-next swiper-button-next"></div>
            </div>

            <div class="top-campaign__campaign-cards campaign-cards js-campaign-cards">
                <div class="campaign-cards__swiper swiper js-top-campaign-swiper">
                    <div class="campaign-cards__swiper-wrapper swiper-wrapper">
                        <div class="campaign-cards__item campaign-card swiper-slide">
                            <div class="campaign-card__img">
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign-panel1.webp"
                                    alt="カラフルな熱帯魚が無数に泳いでいる" width="280" height="188" decoding="async">
                            </div>
                            <div class="campaign-card__body">
                                <div class="campaign-card__category-wrap">
                                    <span class="campaign-card__category">ライセンス講習</span>
                                </div>
                                <h3 class="campaign-card__title">ライセンス取得</h3>
                                <p class="campaign-card__text">全部コミコミ&#040;お一人様&#041;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-before"><del>&#165;56&#044;000</del></p>
                                    <p class="campaign-card__price-after">&#165;46&#044;000</p>
                                </div>
                            </div>
                        </div>

                        <div class="campaign-cards__item campaign-card swiper-slide">
                            <div class="campaign-card__img">
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign-panel2.webp"
                                    alt="美しい海の浅瀬付近にボートが浮かんでいる" width="280" height="188" decoding="async">
                            </div>
                            <div class="campaign-card__body">
                                <div class="campaign-card__category-wrap">
                                    <span class="campaign-card__category">体験ダイビング</span>
                                </div>
                                <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                                <p class="campaign-card__text">全部コミコミ&#040;お一人様&#041;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-before"><del>&#165;24&#044;000</del></p>
                                    <p class="campaign-card__price-after">&#165;18&#044;000</p>
                                </div>
                            </div>
                        </div>

                        <div class="campaign-cards__item campaign-card swiper-slide">
                            <div class="campaign-card__img">
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign-panel3.webp"
                                    alt="暗い海の中でたくさんのクラゲが幻想的に漂っている" width="280" height="188" decoding="async">
                            </div>
                            <div class="campaign-card__body">
                                <div class="campaign-card__category-wrap">
                                    <span class="campaign-card__category">体験ダイビング</span>
                                </div>
                                <h3 class="campaign-card__title">ナイトダイビング</h3>
                                <p class="campaign-card__text">全部コミコミ&#040;お一人様&#041;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-before"><del>&#165;10&#044;000</del></p>
                                    <p class="campaign-card__price-after">&#165;8&#044;000</p>
                                </div>
                            </div>
                        </div>

                        <div class="campaign-cards__item campaign-card swiper-slide">
                            <div class="campaign-card__img">
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign-panel4.webp"
                                    alt="水面から顔を出した３人のダイバー" width="280" height="188" decoding="async">
                            </div>
                            <div class="campaign-card__body">
                                <div class="campaign-card__category-wrap">
                                    <span class="campaign-card__category">ファンダイビング</span>
                                </div>
                                <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                                <p class="campaign-card__text">全部コミコミ&#040;お一人様&#041;</p>
                                <div class="campaign-card__price">
                                    <p class="campaign-card__price-before"><del>&#165;20&#044;000</del></p>
                                    <p class="campaign-card__price-after">&#165;16&#044;000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-campaign__button">
                <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
            </div>

        </div>
    </section>

    <section class="top-about-us layout-top-about-us" id="about-us">
        <div class="top-about-us__inner inner">
            <div class="top-about-us__title section-title">
                <p class="section-title__en">about&nbsp;us</p>
                <h2 class="section-title__ja">私たちについて</h2>
            </div>

            <div class="top-about-us__content about-us-content">
                <div class="about-us-content__img">
                    <div class="about-us-content__img-sub">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-us1.webp"
                            alt="青い空と屋根の上のシーサー" width="128" height="194" decoding="async">
                    </div>
                    <div class="about-us-content__img-main">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-us2.webp"
                            alt="二匹のチョウチョウウオが海の中を泳いでいる" width="281" height="186" decoding="async">
                    </div>
                </div>
                <div class="about-us-content__body">
                    <h3 class="about-us-content__title"><span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span></h3>
                    <div class="about-us-content__unit">
                        <p class="about-us-content__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>

                        <div class="about-us-content__button">
                            <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-information layout-top-information" id="information">
        <div class="top-information__inner inner">
            <div class="top-information__title section-title">
                <p class="section-title__en">information</p>
                <h2 class="section-title__ja">ダイビング情報</h2>
            </div>
            <div class="top-information__flex">
                <div class="top-information__img">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information.webp"
                        alt="魚がサンゴ礁の周りを泳いでいる" width="345" height="227" decoding="async" loading="lazy">
                </div>
                <div class="top-information__body">
                    <h3 class="top-information__body-title">ライセンス講習</h3>
                    <p class="top-information__text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                    <div class="top-information__button">
                        <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-blog layout-top-blog" id="blog">
        <div class="top-blog__background-img"></div>
        <div class="top-blog__inner inner">
            <div class="top-blog__title section-title">
                <p class="section-title__en section-title__en--color">blog</p>
                <h2 class="section-title__ja section-title__ja--color">ブログ</h2>
            </div>

            <?php
            $args = array(
                "post_type" => "post",
                "posts_per_page" => 3
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
            <div class="top-blog__cards blog-cards">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                    <div class="blog-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail( 'full', array( 'width' => 301, 'height' => 201, 'decoding' => 'async', 'loading' => 'lazy', 'class' => '' ) ); ?>
                        <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                            alt="NoImage画像" />
                        <?php endif ; ?>
                    </div>
                    <div class="blog-card__body">
                        <time class="blog-card__time"
                            datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <h3 class="blog-card__title"><?php the_title(); ?></h3>
                        <p class="blog-card__text">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
            <p>記事が投稿されていません</p>
            <?php endif; ?>

            <div class="top-blog__button">
                <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
            </div>
        </div>
    </section>

    <section class="top-voice layout-top-voice" id="voice">
        <div class="top-voice__inner inner">
            <div class="top-voice__title section-title">
                <p class="section-title__en">voice</p>
                <h2 class="section-title__ja">お客様の声</h2>
            </div>
            <div class="top-voice__cards voice-cards">
                <div class="voice-cards__item">
                    <div class="voice-card">
                        <div class="voice-card__head">
                            <div class="voice-card__info">
                                <div class="voice-card__meta">
                                    <span class="voice-card__customer-info">20代(女性)</span>
                                    <span class="voice-card__category">ライセンス講習</span>
                                </div>
                                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                            </div>
                            <div class="voice-card__img">
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice-post1.webp"
                                    alt="帽子を被った笑顔の女性" width="151" height="117" decoding="async" loading="lazy">
                            </div>
                        </div>
                        <p class="voice-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </div>
                <div class="voice-cards__item">
                    <div class="voice-card">
                        <div class="voice-card__head">
                            <div class="voice-card__info">
                                <div class="voice-card__meta">
                                    <span class="voice-card__customer-info">20代(男性)</span>
                                    <span class="voice-card__category">ファンダイビング</span>
                                </div>
                                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                            </div>
                            <div class="voice-card__img">
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice-post2.webp"
                                    alt="グッドポーズをした男性" width="151" height="117" decoding="async" loading="lazy">
                            </div>
                        </div>
                        <p class="voice-card__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </div>
            </div>
            <div class="top-voice__button">
                <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
            </div>
        </div>
    </section>

    <section class="top-price layout-top-price" id="price">
        <div class="top-price__inner inner">
            <div class="top-price__title section-title">
                <p class="section-title__en">price</p>
                <h2 class="section-title__ja">料金一覧</h2>
            </div>
            <div class="top-price__wrapper">
                <div class="top-price__img">
                    <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-pc.webp"
                            media="(min-width:768px)" type="image/webp" />
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-sp.webp"
                            alt="悠然と泳ぐウミガメ" width="345" height="227" decoding="async" loading="lazy">
                    </picture>
                </div>
                <div class="top-price__lists top-price-lists">
                    <div class="top-price-lists__list top-price-list">
                        <h3 class="top-price-list__title">ライセンス講習</h3>
                        <dl class="top-price-list__content">
                            <dt class="top-price-list__course">オープンウォーターダイバーコース</dt>
                            <dd class="top-price-list__price">&#165;50&#044;000</dd>
                            <dt class="top-price-list__course">アドバンスドオープンウォーターコース</dt>
                            <dd class="top-price-list__price">&#165;60&#044;000</dd>
                            <dt class="top-price-list__course">レスキュー＋EFRコース</dt>
                            <dd class="top-price-list__price">&#165;70&#044;000</dd>
                        </dl>
                    </div>
                    <div class="top-price-lists__list top-price-list">
                        <h3 class="top-price-list__title">体験ダイビング</h3>
                        <dl class="top-price-list__content">
                            <dt class="top-price-list__course">ビーチ体験ダイビング&#040;半日&#041;</dt>
                            <dd class="top-price-list__price">&#165;7&#044;000</dd>
                            <dt class="top-price-list__course">ビーチ体験ダイビング&#040;1日&#041;</dt>
                            <dd class="top-price-list__price">&#165;14&#044;000</dd>
                            <dt class="top-price-list__course">ボート体験ダイビング&#040;半日&#041;</dt>
                            <dd class="top-price-list__price">&#165;10&#044;000</dd>
                            <dt class="top-price-list__course">ボート体験ダイビング&#040;1日&#041;</dt>
                            <dd class="top-price-list__price">&#165;18&#044;000</dd>
                        </dl>
                    </div>
                    <div class="top-price-lists__list top-price-list">
                        <h3 class="top-price-list__title">ファンダイビング</h3>
                        <dl class="top-price-list__content">
                            <dt class="top-price-list__course">ビーチダイビング&#040;2ダイブ&#041;</dt>
                            <dd class="top-price-list__price">&#165;14&#044;000</dd>
                            <dt class="top-price-list__course">ボートダイビング&#040;2ダイブ&#041;</dt>
                            <dd class="top-price-list__price">&#165;18&#044;000</dd>
                            <dt class="top-price-list__course">スペシャルダイビング&#040;2ダイブ&#041;</dt>
                            <dd class="top-price-list__price">&#165;24&#044;000</dd>
                            <dt class="top-price-list__course">ナイトダイビング&#040;1ダイブ&#041;</dt>
                            <dd class="top-price-list__price">&#165;10&#044;000</dd>
                        </dl>
                    </div>
                    <div class="top-price-lists__list top-price-list">
                        <h3 class="top-price-list__title">スペシャルダイビング</h3>
                        <dl class="top-price-list__content">
                            <dt class="top-price-list__course">貸切ダイビング&#040;2ダイブ&#041;</dt>
                            <dd class="top-price-list__price">&#165;24&#044;000</dd>
                            <dt class="top-price-list__course">1日ダイビング&#040;3ダイブ&#041;</dt>
                            <dd class="top-price-list__price">&#165;32&#044;000</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="top-price__button">
                <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
            </div>
        </div>
    </section>

    <section class="common-contact layout-common-contact" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg"
                            alt="CodeUps">
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