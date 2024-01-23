<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>

    <!-- Contact Form 7のショートコードを記述 -->
    <?php echo do_shortcode('[contact-form-7 id="4c5752c" title="お問い合わせ"]'); ?>

</main>
<?php get_footer(); ?>