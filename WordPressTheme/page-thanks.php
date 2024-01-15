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
                <a href="page-contact.html" class="post-root post post-post">
                    <span>お問い合わせ</span>
                </a>
            </span>
            <span>&gt;</span>
            <span>
                <span class="post post-page current-item">送信完了</span>
            </span>
        </div>
    </div>

    <div class="thanks layout-thanks">
        <div class="thanks__inner inner">
            <p class="thanks__message">お問い合わせ内容を送信完了しました。</p>
            <p class="thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
                お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
                また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
    </div>
</main>
<?php get_footer(); ?>