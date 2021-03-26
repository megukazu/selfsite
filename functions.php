<?php
/*======================================
  コンテンツ幅
======================================*/
if( !isset( $content_width ) ) {
  $content_width = 630;
}

/*======================================
  初期設定
======================================*/
function createswebsite_setup() {
 // head内にフィードリンクを出力
  add_theme_support( 'automatic-feed-links' );
  // タイトルタグを動的に出力
  add_theme_support( 'title-tag' );
  // ブロックエディター用のcssを有効化
  add_theme_support( 'wp-block-style' );
  // 埋め込みコンテンツをレスポンシブ化
  add_theme_support( 'responsive-embeds' );
  // アイキャッチ画像の有効化
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 231, 177, false );
  // カスタムメニューの有効化
  register_nav_menus(
    array(
      'globalnav' => 'グローバルナビゲーション'
    )
  );
}
// テーマが読み込まれた後に実行
add_action( 'after_setup_theme', 'createswebsite_setup' );

/*======================================
  スタイル・スクリプトの追加
======================================*/
function createswebsite_scripts() {
  // CSS
  wp_enqueue_style(
    'website-common',
    get_theme_file_uri(). '/assets/css/common.css' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;700&display=swap' );
  // JS
  wp_enqueue_script(
    'website-app',
     get_theme_file_uri(). '/assets/js/lib/app.js',['jquery'],
    '1.0.0',
     true
  );
}
add_action( 'wp_enqueue_scripts', 'createswebsite_scripts' );
