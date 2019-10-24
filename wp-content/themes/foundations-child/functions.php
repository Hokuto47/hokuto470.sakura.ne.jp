<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}
add_theme_support( 'custom-header' );
$custom_header_args = array(
	// デフォルトで表示するヘッダー画像(画像のURLを入力)
	'default-image' => get_template_directory_uri() . '/img/default.jpg',
	// ヘッダー画像の横幅
	'width' => 1600,
	// ヘッダー画像の縦幅
	'height' => 400,
	// ヘッダー画像の横幅を自由に切り取れるかどうか(trueもしくはfalse)
	'flex-width' => false,
	// ヘッダー画像の縦幅を自由に切り取れるかどうか(trueもしくはfalse)
	'flex-height' => false,
	// ヘッダーテキストを表示するかどうかを指定する機能の使うかどうか(trueもしくはfalse)
	'header-text' => false,
	// ヘッダーテキストのデフォルトの色
	'default-text-color' => '000',
	// 動画ヘッダーに対応するかどうか(trueもしくはfalse)
	'video' => true,
	// adminへの画像ファイルのアップロードを許可するか(trueもしくはfalse)
	'uploads' => false,
	// ヘッダー画像をランダムにローテーションするかどうか(trueもしくはfalse)
	'random-default' => false,
	// テーマのheadタグ内に呼び出したいコードが書かれた関数を指定(関数名)
	'wp-head-callback' => 'wphead_cb',
	// カスタムヘッダーページのheadタグ内に呼び出したいコードが書かれた関数を指定(関数名)
	'admin-head-callback' => 'adminhead_cb',
	// カスタムヘッダーページのプレビュー部分に表示したいコードが書かれた関数を指定(関数名)
	'admin-preview-callback' => 'adminpreview_cb',
);
add_theme_support( 'custom-header', $custom_header_args )
?>

