<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0');
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true );
    wp_enqueue_script('inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), '1.0.1', true);
    // Gotuフォントの追加
    wp_enqueue_style( 'Gotu', '//fonts.googleapis.com/css2?family=Gotu&display=swap' );
    // Latoフォントの追加（400と700の太さ）
    wp_enqueue_style( 'Lato', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap' );
    // Noto Sans JPフォントの追加（400, 500, 700の太さ）
    wp_enqueue_style( 'NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap' );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');



// サイドバーの人気記事表示の記述
// 記事のPVを取得
function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count=='') {
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
    }
    return $count.' Views';
  }
  
  // 記事のPVをカウントする
  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count=='') {
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  
    // デバッグ start
    // echo '';
    // echo 'console.log("postID: ' . $postID .'");';
    // echo 'console.log("カウント: ' . $count .'");';
    // echo '';
    // デバッグ end
  }
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  



  
// campaignページに表示する最大投稿数を変更するための記述
  // function custom_posts_per_page($query)
  // {
  //     if (!is_admin() && $query->is_main_query()) {
  //         // カスタム投稿のスラッグを記述
  //         if (is_post_type_archive('campaign')) {
  //             // 表示件数を指定
  //             $query->set('posts_per_page', 4);
  //         }
  //     }
  // }
  // add_action('pre_get_posts', 'custom_posts_per_page');


  // campaignページとvoiceページに表示する最大投稿数を変更するための記述
  // 上記コメントアウトのコードを別個に記述すると、同じ関数名を使うことになりエラーになってしまうため、まとめて記述する必要あり
  function custom_posts_per_page_for_multiple_types($query)
  {
    if (!is_admin() && $query->is_main_query()) {
        if (is_post_type_archive('campaign')) {
            $query->set('posts_per_page', 4);
        } elseif (is_post_type_archive('voice')) {
            $query->set('posts_per_page', 6);
        }
      }
    }
    add_action('pre_get_posts', 'custom_posts_per_page_for_multiple_types');






// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}