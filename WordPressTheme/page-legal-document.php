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
    <!-- 今回contactセクションにカスタムフィールドを設定（カスタムフィールドの値の入力欄自体はフロントページに設定）したため、下記のような手順で呼び出す -->
    <?php
    // フロントページのIDを取得（今回フロントページにcontactセクション用のカスタムフィールドを設定したため）
    $front_page_id = get_option('page_on_front');
    // section-contact.phpにフロントページのIDを渡す（共通パーツとしたsection-contact.phpにフロントページに設定したカスタムフィールドの値を渡す）
    set_query_var('contact_page_id', $front_page_id);
    // section-contact.phpにフロントページに設定したカスタムフィールドの値を渡した後、section-contact.phpを呼び出す
    get_template_part('template-parts/section-contact');
    ?>

</main>
<?php get_footer(); ?>