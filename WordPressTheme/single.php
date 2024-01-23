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
            <?php get_sidebar(); ?>
        </div>
    </div>

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>