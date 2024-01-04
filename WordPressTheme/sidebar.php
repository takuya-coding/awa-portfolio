<aside class="blog__sidebar blog-sidebar">
    <div class="blog-sidebar__item">
        <h2 class="blog-sidebar__item-title sidebar-title">人気記事</h2>
        <div class="blog-sidebar__item-cards sidebar-cards">
            <a href="#" class="sidebar-cards__item sidebar-card">
                <div class="sidebar-card__img">
                    <img src="./assets/images/common/gallery4.webp" alt="一匹の黄色い魚が泳いでいる" width="121" height="90"
                        decoding="async">
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
                    <img src="./assets/images/common/blog-card3.webp" alt="イソギンチャクの中から顔を出すカクレクマノミ" width="121"
                        height="90" decoding="async">
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
        <?php
        $args = array(
            "post_type" => "post",
            "posts_per_page" => 1,
            "orderby" => "date",
            "order" => "DESC",
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="blog-sidebar__item-voice sidebar-voice">
            <div class="sidebar-voice__img">
                <!-- <img src="./assets/images/common/voice-post5.webp" alt="2人の笑顔の男女が腕を組んで、仲良くソファに座っている" width="294"
                    height="218" decoding="async"> -->
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'full', array( 'width' => 294, 'height' => 218, 'decoding' => 'async', 'class' => '' ) ); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                    alt="NoImage画像" />
                <?php endif ; ?>
            </div>
            <div class="sidebar-voice__body">
                <div class="sidebar-voice__customer-info">30代&#040;カップル&#041;</div>
                <h3 class="sidebar-voice__title"><?php the_title(); ?></h3>
            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>記事が投稿されていません</p>
        <?php endif; ?>
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
                        <img src="./assets/images/common/campaign-panel1.webp" alt="カラフルな熱帯魚が無数に泳いでいる" width="294"
                            height="188" decoding="async" loading="lazy">
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
                        <img src="./assets/images/common/campaign-panel2.webp" alt="美しい海の浅瀬付近にボートが浮かんでいる" width="294"
                            height="188" decoding="async" loading="lazy">
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
        </div>
    </div>
</aside>