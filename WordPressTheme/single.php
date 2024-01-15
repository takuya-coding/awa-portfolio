<?php get_header(); ?>
<main>
    <!-- <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">blog</h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="./assets/images/common/blog-mv-pc.webp" media="(min-width:768px)"
                        type="image/webp" />
                    <img src="./assets/images/common/blog-mv-sp.webp" alt="魚のトルネード" width="375" height="460"
                        decoding="async">
                </picture>
            </div>
        </div>
    </div> -->
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>

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
                <a href="home.html" class="post-root post post-post">
                    <span>ブログ一覧</span>
                </a>
            </span>
            <span>&gt;</span>
            <span>
                <span class="post post-post current-item">ブログ詳細</span>
            </span>
        </div>
    </div>


    <div class="blog layout-blog">
        <div class="blog__inner inner blog__inner--padding">
            <div class="blog__main">
                <section class="blog-detail">
                    <div class="blog-detail__article-area">
                        <time class="blog-detail__time"
                            datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <h2 class="blog-detail__title"><?php the_title(); ?></h2>
                        <div class="blog-detail__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <ul class="blog-detail__button-area">
                        <!-- ここはWordPress化を意識したクラス名でなくて良い -->
                        <!-- <li class="blog-detail__button-prev">
                            <a href="#"><img src="./assets/images/common/pagenation-vector.svg" alt=""></a>
                        </li>
                        <li class="blog-detail__button-next">
                            <a href="#"><img src="./assets/images/common/pagenation-vector.svg" alt=""></a>
                        </li> -->
                        <li class="blog-detail__button-prev">
                            <?php
                            // 前の記事へのリンク
                            $prev_link = get_previous_post_link('%link', '＜');
                            if (!empty($prev_link)) {
                                echo str_replace('<a href=', '<a class="detail__prev" href=', $prev_link);
                            }
                            ?>
                        </li>
                        <li class="blog-detail__button-next">
                            <?php
                            // 次の記事へのリンク
                            $next_link = get_next_post_link('%link', '＞');
                            if (!empty($next_link)) {
                                echo str_replace('<a href=', '<a class="detail__next" href=', $next_link);
                            }
                            ?>
                        </li>
                    </ul>
                </section>
            </div>
            <aside class="blog__sidebar blog-sidebar blog__sidebar--width">
                <div class="blog-sidebar__item">
                    <h2 class="blog-sidebar__item-title sidebar-title">人気記事</h2>
                    <div class="blog-sidebar__item-cards sidebar-cards">
                        <a href="#" class="sidebar-cards__item sidebar-card">
                            <div class="sidebar-card__img">
                                <img src="./assets/images/common/gallery4.webp" alt="一匹の黄色い魚が泳いでいる" width="121"
                                    height="90" decoding="async">
                            </div>
                            <div class="sidebar-card__body">
                                <time class="sidebar-card__time" datetime="2023-11-17">2023&#046;11&#046;17</time>
                                <h3 class="sidebar-card__title">ライセンス取得</h3>
                            </div>
                        </a>
                        <a href="#" class="sidebar-cards__item sidebar-card">
                            <div class="sidebar-card__img">
                                <img src="./assets/images/common/blog-card2.webp" alt="ウミガメ" width="121" height="90"
                                    decoding="async">
                            </div>
                            <div class="sidebar-card__body">
                                <time class="sidebar-card__time" datetime="2023-11-17">2023&#046;11&#046;17</time>
                                <h3 class="sidebar-card__title">ウミガメと泳ぐ</h3>
                            </div>
                        </a>
                        <a href="#" class="sidebar-cards__item sidebar-card">
                            <div class="sidebar-card__img">
                                <img src="./assets/images/common/blog-card3.webp" alt="イソギンチャクの中から顔を出すカクレクマノミ"
                                    width="121" height="90" decoding="async">
                            </div>
                            <div class="sidebar-card__body">
                                <time class="sidebar-card__time" datetime="2023-11-17">2023&#046;11&#046;17</time>
                                <h3 class="sidebar-card__title">カクレクマノミ</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="blog-sidebar__item">
                    <h2 class="blog-sidebar__item-title sidebar-title">口コミ</h2>
                    <div class="blog-sidebar__item-voice sidebar-voice">
                        <div class="sidebar-voice__img">
                            <img src="./assets/images/common/voice-post5.webp" alt="2人の笑顔の男女が腕を組んで、仲良くソファに座っている"
                                width="294" height="218" decoding="async">
                        </div>
                        <div class="sidebar-voice__body">
                            <div class="sidebar-voice__customer-info">30代&#040;カップル&#041;</div>
                            <h3 class="sidebar-voice__title">ここにタイトルが入ります。ここにタイトル</h3>
                        </div>
                    </div>
                    <div class="blog-sidebar__item-button">
                        <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
                    </div>
                </div>

                <div class="blog-sidebar__item">
                    <h2 class="blog-sidebar__item-title sidebar-title">キャンペーン</h2>
                    <div class="blog-sidebar__item-campaign-cards sidebar-campaign-cards">
                        <div class="sidebar-campaign-cards__item">
                            <div class="campaign-card">
                                <div class="campaign-card__img campaign-card__img--sidebar">
                                    <img src="./assets/images/common/campaign-panel1.webp" alt="カラフルな熱帯魚が無数に泳いでいる"
                                        width="294" height="188" decoding="async" loading="lazy">
                                </div>
                                <div class="campaign-card__body campaign-card__body--sidebar">
                                    <h3 class="campaign-card__title campaign-card__title--sidebar">ライセンス取得</h3>
                                    <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ&#040;お一人様&#041;
                                    </p>
                                    <div class="campaign-card__price campaign-card__price--sidebar">
                                        <p class="campaign-card__price-before campaign-card__price-before--sidebar">
                                            <del>&#165;56&#044;000</del>
                                        </p>
                                        <p class="campaign-card__price-after campaign-card__price-after--sidebar">
                                            &#165;46&#044;000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-campaign-cards__item">
                            <div class="campaign-card">
                                <div class="campaign-card__img campaign-card__img--sidebar">
                                    <img src="./assets/images/common/campaign-panel2.webp" alt="美しい海の浅瀬付近にボートが浮かんでいる"
                                        width="294" height="188" decoding="async" loading="lazy">
                                </div>
                                <div class="campaign-card__body campaign-card__body--sidebar">
                                    <h3 class="campaign-card__title campaign-card__title--sidebar">貸切体験ダイビング</h3>
                                    <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ&#040;お一人様&#041;
                                    </p>
                                    <div class="campaign-card__price campaign-card__price--sidebar">
                                        <p class="campaign-card__price-before campaign-card__price-before--sidebar">
                                            <del>&#165;24&#044;000</del>
                                        </p>
                                        <p class="campaign-card__price-after campaign-card__price-after--sidebar">
                                            &#165;18&#044;000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-sidebar__item-button">
                        <a href="#" class="button">view&nbsp;more<span class="button__arrow"></span></a>
                    </div>
                </div>

                <div class="blog-sidebar__item">
                    <h2 class="blog-sidebar__item-title sidebar-title">アーカイブ</h2>
                    <div class="blog-sidebar__item-archive sidebar-archive">

                        <div class="sidebar-archive__accordion js-accordion-item">
                            <p class="sidebar-archive__year js-accordion-year">2023</p>
                            <ul class="sidebar-archive__list js-accordion-list">
                                <li class="sidebar-archive__month"><a href="#">3月</a></li>
                                <li class="sidebar-archive__month"><a href="#">2月</a></li>
                                <li class="sidebar-archive__month"><a href="#">1月</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-archive__accordion js-accordion-item">
                            <p class="sidebar-archive__year js-accordion-year">2022</p>
                            <ul class="sidebar-archive__list">
                                <li class="sidebar-archive__month"><a href="#">3月</a></li>
                                <li class="sidebar-archive__month"><a href="#">2月</a></li>
                                <li class="sidebar-archive__month"><a href="#">1月</a></li>
                            </ul>
                        </div>

                        <!-- details,summaryタグ使用した場合 -->
                        <!-- <details class="sidebar-archive__details js-sidebar-accordion is-opened" open>
                      <summary class="sidebar-archive__summary js-sidebar-accordion-title">2023</summary>
                      <ul class="sidebar-archive__list">
                        <li class="sidebar-archive__item"><a href="#">3月</a></li>
                        <li class="sidebar-archive__item"><a href="#">2月</a></li>
                        <li class="sidebar-archive__item"><a href="#">1月</a></li>
                      </ul>
                    </details>

                    <details class="sidebar-archive__details">
                      <summary class="sidebar-archive__summary">2022</summary>
                      <ul class="sidebar-archive__list">
                        <li class="sidebar-archive__item"><a href="#">3月</a></li>
                        <li class="sidebar-archive__item"><a href="#">2月</a></li>
                        <li class="sidebar-archive__item"><a href="#">1月</a></li>
                      </ul>
                    </details> -->
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="./assets/images/common/logo.svg" alt="CodeUps">
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