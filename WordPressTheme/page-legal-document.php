<?php
/*
Template Name: Legal Pages
*/
?>



<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>


    <!-- プライバシーポリシーページと利用規約ページのパーツ共通化 -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="legal-document layout-legal-document">
        <div class="legal-document__inner inner">
            <?php the_content(); // ここでWordPressエディターからのコンテンツが表示される ?>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>