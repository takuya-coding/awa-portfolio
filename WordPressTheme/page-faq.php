<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>

    <section class="faq-accordion js-faq-accordion layout-faq-accordion">
        <div class="faq-accordion__inner inner">
            <div class="faq-accordion__container">
                <?php if(CFS()->get('faq_group')): // FAQグループが存在する場合 ?>
                <?php
                $fields = CFS()->get('faq_group'); // FAQグループを取得
                foreach($fields as $field): // ループ処理
                ?>
                <div class="faq-accordion__item js-faq-accordion-item">
                    <h2 class="faq-accordion__title js-faq-accordion-title"><?php echo $field['question_text']; ?></h2>
                    <div class="faq-accordion__content js-faq-accordion-content">
                        <p class="faq-accordion__text">
                            <?php echo $field['answer_text']; ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- contact-section -->
    <?php get_template_part('template-parts/section-contact'); ?>

</main>
<?php get_footer(); ?>