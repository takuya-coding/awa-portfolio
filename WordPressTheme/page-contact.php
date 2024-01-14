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

</main>
<?php get_footer(); ?>