<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">contact</h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/images/common/contact-mv-pc.webp"
                        media="(min-width:768px)" type="image/webp" />
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/common/contact-mv-sp.webp"
                        alt="真上から眺めた激しく波が打ち寄せるコバルトブルーの海岸" width="375" height="460" decoding="async">
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