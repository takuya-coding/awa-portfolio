<?php get_header(); ?>
<main>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="page-404">
        <div class="page-404__inner inner">
            <h1 class="page-404__title">404</h1>
            <p class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
            <div class="page-404__404-button">
                <a href="<?php echo esc_url(home_url("/")) ?>"
                    class="button button--404">page&nbsp;<span>top</span><span
                        class="button__arrow button__arrow--404"></span></a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>