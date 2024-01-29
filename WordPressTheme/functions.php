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



// 管理画面の「投稿」の名称変更
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
  }
  function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );


  
// デバイスによって、WP-PageNaviの表示件数を変更する（この記述方法で768pxを境に表示件数が切り替わる）
  function customize_pagenavi_config($wp_pagenavi_options) {
    // モバイルデバイスをチェックする関数（単純な例）
    if (wp_is_mobile()) {
        // モバイルデバイスの場合、表示するページ数を4に設定
        $wp_pagenavi_options['num_pages'] = 4;
    } else {
        // PCの場合、表示するページ数を6に設定（既に設定済みかもしれません）
        $wp_pagenavi_options['num_pages'] = 6;
    }
    return $wp_pagenavi_options;
}
add_filter('wp_pagenavi_config', 'customize_pagenavi_config');