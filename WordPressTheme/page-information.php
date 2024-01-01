<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">information</h1>
            <div class="main-view__img">
                <picture>
                    <source
                        srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information-mv-pc.webp"
                        media="(min-width:768px)" type="image/webp" />
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information-mv-sp.webp"
                        alt="岸壁付近を泳ぐダイバーと無数の黄色い熱帯魚" width="375" height="460" decoding="async">
                </picture>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>


    <div class="information layout-information">
        <div class="information__inner inner">
            <div class="information__tab information-tab">
                <button class="information-tab__button js-tab-button-information is-active" data-tab="tab-1">ライセンス<br
                        class="u-mobile">講習</button>
                <button class="information-tab__button js-tab-button-information" data-tab="tab-2">ファン<br
                        class="u-mobile">ダイビング</button>
                <button class="information-tab__button js-tab-button-information" data-tab="tab-3">体験<br
                        class="u-mobile">ダイビング</button>
            </div>

            <div class="information__content information-content">
                <div class="information-content__item js-information-content is-active" data-tab="tab-1">
                    <div class="information-content__item-wrap">
                        <div class="information-content__item-text">
                            <h3 class="information-content__title">ライセンス講習</h3>
                            <p class="information-content__text">
                                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                            </p>
                        </div>
                        <div class="information-content__item-img">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information-tab-content1.webp"
                                alt="きれいな海面に5人のダイバーが浮いている" width="297" height="189" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="information-content__item js-information-content" data-tab="tab-2">
                    <div class="information-content__item-wrap">
                        <div class="information-content__item-text">
                            <h3 class="information-content__title">ファンダイビング</h3>
                            <p class="information-content__text">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <div class="information-content__item-img">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery5.webp"
                                alt="無数の魚がきれいな海の中を泳いでいる" width="297" height="189" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="information-content__item js-information-content" data-tab="tab-3">
                    <div class="information-content__item-wrap">
                        <div class="information-content__item-text">
                            <h3 class="information-content__title">体験ダイビング</h3>
                            <p class="information-content__text">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <div class="information-content__item-img">
                            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery3.webp"
                                alt="二匹のチョウチョウウオが海底付近を泳いでいる" width="297" height="189" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
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