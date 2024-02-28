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
  


  // campaignページとvoiceページに表示する最大投稿数を変更するための記述
  function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    // カスタム投稿タイプ「campaign」またはタクソノミー「campaign_category」の場合
    if ( $query->is_post_type_archive('campaign') || $query->is_tax('campaign_category') ) {
        $query->set( 'posts_per_page', '4' );
    }
    // カスタム投稿タイプ「voice」またはタクソノミー「campaign_voice」の場合
    else if ( $query->is_post_type_archive('voice') || $query->is_tax('voice_category') ) {
        $query->set( 'posts_per_page', '6' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );




// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}


// お問い合わせフォームのキャンペーンをキャンペーンページ用のカスタム投稿ページタイトルから挿入をするための記述
// カスタムコードを作成
add_filter( 'wpcf7_form_tag', 'custom_post_dropdown', 10, 2 );
function custom_post_dropdown( $tag, $unused ) {
    if ( 'category' != $tag['name'] ) {
        return $tag;
    }

    $args = array(
        'posts_per_page' => -1, // すべての投稿を取得
        'post_type' => 'campaign', // カスタム投稿タイプを指定
    );

    $custom_posts = get_posts( $args );
    if ( ! $custom_posts ) {
        return $tag;
    }

    $tag['raw_values'][] = ''; // 空の選択肢を追加（必須ではない場合）
    $tag['values'][] = ''; // 空の選択肢を追加（必須ではない場合）
    $tag['labels'][] = '- 選択してください -'; // 空の選択肢のラベル

    foreach ( $custom_posts as $custom_post ) {
        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;
    }

    return $tag;
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


  
// All-in-One WP Migrationで特定のフォルダやファイルを除外するための記述
add_filter(
	'ai1wm_exclude_themes_from_export',
	function ( $exclude_filters ) {
		$exclude_filters = array(
			'_gulp/node_modules',
      '_gulp/package-lock.json',
			'src/images',
		);
		return $exclude_filters;
	}
);