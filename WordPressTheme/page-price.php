<?php get_header(); ?>
<main>
    <!-- main-view -->
    <?php get_template_part('template-parts/main-view'); ?>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb') ?>

    <div class="price-table-list layout-price-table-list">
        <div class="price-table-list__inner inner">
            <?php $fields = CFS()->get('price_group'); ?>
            <?php if(is_array($fields)): ?>
            <!-- 外側のループ -->
            <?php foreach($fields as $field): ?>
            <div class="price-table-list__item price-table">
                <table class="price-table__table">
                    <?php $fields_child = $field['price_table']; ?>
                    <?php if(is_array($fields_child)): ?>
                    <!-- 内側のループ -->
                    <?php $rowCount = count($fields_child); // 内側のループの要素数をカウント ?>
                    <?php $index = 0; // カウンター変数を初期化 ?>
                    <?php foreach($fields_child as $field_child):?>
                    <tr class="price-table__tr">
                        <?php if($index == 0): // 配列の最初の要素のみthタグを挿入 ?>
                        <th rowspan="<?php echo $rowCount; ?>" class="price-table__th">
                            <!-- spanタグにページ内及び別ページからのスムーススクロールを実装するために、idとdata-id属性を追加 -->
                            <span data-id="<?php echo $field['category_data_id']; ?>" id="<?php echo $field['category_id']; ?>"><?php echo $field['category_title']; ?></span>
                        </th>
                        <?php endif; ?>
                        <td class="price-table__td-content"><?php echo $field_child['course_title']; ?></td>
                        <td class="price-table__td-price"><?php echo $field_child['course_price']; ?></td>
                    </tr>
                    <?php $index++; // カウンター変数をインクリメント ?>
                    <?php endforeach; ?>
                    <!-- 内側のループ -->
                    <?php endif; ?>
                </table>
            </div>
            <?php endforeach; ?>
            <!-- 外側のループ -->
            <?php endif; ?>
        </div>
    </div>

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