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


    <!-- blogページ（blog一覧ページ、blog詳細ページ）としてのレイアウトを共通化する -->
    <div class="blog layout-blog">
        <div class="blog__inner inner">
            <div class="blog__main">
                <?php if (have_posts()) : ?>
                <div class="blog__main-cards blog-cards blog-cards--column2">
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                        <div class="blog-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail( 'full', array( 'width' => 301, 'height' => 201, 'decoding' => 'async', 'class' => '' ) ); ?>
                            <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/common/noimage.webp" )); ?>"
                                alt="NoImage画像" />
                            <?php endif ; ?>
                        </div>
                        <div class="blog-card__body">
                            <time class="blog-card__time"
                                datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            <h2 class="blog-card__title"><?php the_title(); ?></h2>
                            <p class="blog-card__text">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php else : ?>
                <p>記事が投稿されていません</p>
                <?php endif; ?>
                <div class="blog__main-pagination">
                    <!-- pagenavi -->
                    <!-- <div class="wp-pagenavi">
                        <a class="previouspostslink" rel="prev" href="#"><img
                                src="./assets/images/common/pagenation-vector.svg" alt=""></a>
                        <span class='current'>1</span>
                        <a class="page larger" href="#">2</a>
                        <a class="page larger" href="#">3</a>
                        <a class="page larger" href="#">4</a>
                        <a class="page larger" href="#">5</a>
                        <a class="page larger" href="#">6</a>
                        <a class="nextpostslink" rel="next" href="#"><img
                                src="./assets/images/common/pagenation-vector.svg" alt=""></a>
                    </div> -->
                    <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    } ?>
                </div>
            </div>
            <?php get_sidebar(); ?>

            <!-- サイドバーに人気記事を表示させるためのコード -->
            <?php
            // 記事のビュー数を更新(ログイン中・クローラーは除外)
            if (!is_user_logged_in() && !is_robots()) {
                setPostViews(get_the_ID());
            }
            ?>
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