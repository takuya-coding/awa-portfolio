<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
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