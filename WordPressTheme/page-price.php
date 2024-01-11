<?php get_header(); ?>
<main>
    <div class="main-view">
        <div class="main-view__inner">
            <h1 class="main-view__title">price</h1>
            <div class="main-view__img">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-mv-pc.webp"
                        media="(min-width:768px)" type="image/webp" />
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-mv-sp.webp"
                        alt="水面から頭だけ出した一人のダイバー" width="375" height="460" decoding="async">
                </picture>
            </div>
        </div>
    </div>

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
                    <?php foreach($fields_child as $field_child):?>
                    <tr class="price-table__tr">
                        <th rowspan="3" class="price-table__th">
                            <span><?php echo $field['category_title']; ?></span>
                        </th>
                        <td class="price-table__td-content"><?php echo $field_child['course_title']; ?></td>
                        <td class="price-table__td-price"><?php echo $field_child['course_price']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <!-- 内側のループ -->
                    <?php endif; ?>
                </table>
            </div>
            <!-- 外側のループ -->
            <?php endforeach; ?>
            <?php endif; ?>
            <!-- <div class="price-table-list__item price-table">
                <table class="price-table__table">
                    <tr class="price-table__tr">
                        <th rowspan="4" class="price-table__th"><span>体験ダイビング</span></th>
                        <td class="price-table__td-content">ビーチ体験ダイビング<br class="u-mobile">&#040;半日&#041;</td>
                        <td class="price-table__td-price">&#165;7&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">ビーチ体験ダイビング<br class="u-mobile">&#040;1日&#041;</td>
                        <td class="price-table__td-price">&#165;14&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">ボート体験ダイビング<br class="u-mobile">&#040;半日&#041;</td>
                        <td class="price-table__td-price">&#165;10&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">ボート体験ダイビング<br class="u-mobile">&#040;1日&#041;</td>
                        <td class="price-table__td-price">&#165;18&#044;000</td>
                    </tr>
                </table>
            </div> -->
            <!-- <div class="price-table-list__item price-table">
                <table class="price-table__table">
                    <tr class="price-table__tr">
                        <th rowspan="4" class="price-table__th"><span>ファンダイビング</span></th>
                        <td class="price-table__td-content">ビーチダイビング<br class="u-mobile">&#040;2ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;14&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">ボートダイビング<br class="u-mobile">&#040;2ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;18&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">スペシャルダイビング<br class="u-mobile">&#040;2ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;24&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">ナイトダイビング<br class="u-mobile">&#040;1ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;10&#044;000</td>
                    </tr>
                </table>
            </div> -->
            <!-- <div class="price-table-list__item price-table">
                <table class="price-table__table">
                    <tr class="price-table__tr">
                        <th rowspan="3" class="price-table__th"><span>スペシャルダイビング</span></th>
                        <td class="price-table__td-content">貸切ダイビング<br class="u-mobile">&#040;2ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;24&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">1日ダイビング<br class="u-mobile">&#040;3ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;32&#044;000</td>
                    </tr>
                    <tr class="price-table__tr">
                        <td class="price-table__td-content">ナイトダイビング<br class="u-mobile">&#040;2ダイブ&#041;</td>
                        <td class="price-table__td-price">&#165;14&#044;000</td>
                    </tr>
                </table>
            </div> -->
        </div>
    </div>

    <section class="common-contact layout-common-contact layout-common-contact--margin" id="contact">
        <div class="common-contact__inner inner">
            <div class="common-contact__wrapper">
                <div class="common-contact__shop-info">
                    <div class="common-contact__logo">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg"
                            alt="CodeUps">
                    </div>
                    <div class="common-contact__shop-info-wrapper">
                        <div class="common-contact__shop-info-text">
                            <p class="common-contact__address">沖縄県那覇市1&#045;1</p>
                            <a href="tel:+81-120-000-0000"
                                class="common-contact__tel">tel&#058;0120&#045;000&#045;0000</a>
                            <p class="common-contact__business-hours">営業時間&#058;8&#058;30&#045;19&#058;00</p>
                            <p class="common-contact__regular-holiday">定休日&#058;毎週火曜日</p>
                        </div>
                        <div class="common-contact__shop-info-map">
                            <div class="common-contact__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401127!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1692299234684!5m2!1sja!2sjp"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-contact__more">
                    <div class="common-contact__title section-title">
                        <p class="section-title__en section-title__en--size">contact</p>
                        <h2 class="section-title__ja section-title__ja--position">お問い合わせ</h2>
                    </div>
                    <p class="common-contact__text">ご予約・お問い合わせはコチラ</p>
                    <div class="common-contact__button">
                        <a href="#" class="button">contact&nbsp;us<span class="button__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>