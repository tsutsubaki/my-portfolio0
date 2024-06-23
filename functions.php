<?php
function custom_theme_support() {
    
    add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    ) );  //吐き出されるコードをデフォルトの XHTML からHTML5（ Living Standard ）に

add_theme_support('post-thumbnails');//アイキャッチの有効化
add_theme_support('title-tag');//管理画面からタイトルタグ登録可能
add_theme_support( 'menus' );

register_nav_menus( array(
    'global_nav' => esc_html__('global navigation', 'portfolio'),
    'sidebar_nav' => esc_html__('sidebar navigation', 'portfolio'),
    'footer_nav' => esc_html__('footer navigation', 'portfolio'),

    ));
    add_theme_support('editor-styles'); // エディターのスタイルを変更できるようにする
    add_editor_style(); // エディターにフロントエンド用CSSを読み込む
    }
add_action('after_setup_theme', 'custom_theme_support');
    // after_setup_themeというfunctions.phpが読みこまれた直後に実行されるアクションに、
    // 自分が作成したtheme_setupを処理させることにより、function.phpが読み込まれたらすぐに
    // theme_setupが実行されWordPressの各種機能が有効化されるという意味合い
    
//archive.phpのカテゴリー説明文を取得・表示する際に自動的に生成されるpタグを削除
remove_filter('term_description', 'wpautop');
//抜粋」に登録されたテキストを表示する際に、<p>タグを除去
remove_filter('the_excerpt', 'wpautop');
// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
remove_filter('the_title', 'wpautop');

//タイトル出力
function portfolio_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'portfolio_title');

function portfolio_Script()
{
    wp_enqueue_style('mplus1p', 'http://fonts.googleapis.com/earlyaccess/mplus1p.css', array(), '1.0.0');
    wp_enqueue_style('Sacramento', 'http://fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array(), '1.0.0');
    wp_enqueue_style('font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
    wp_enqueue_style('my-portfolio', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    // wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-3.5.0.min.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'portfolio_Script');

// <!-- ** 外部スクリプトとライブラリ読み込み */ -->
function add_theme_js()
{
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/js/script.js'),
        array('jquery'),
        wp_get_theme()->get('Version'),
        false
    );
}
add_action('wp_enqueue_scripts', 'add_theme_js');



// <figcaption>や<hr>、<blockquote>等のテーマを適用する
function custom_theme_setup()
{
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'custom_theme_setup');



if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
 ));
}

//-----------------------------------------------------------------
// Contact Form 7で作成したフォームの呼び出し
// shortcode:[cf7_insert]
// form_title:Contact Form 7で制作したフォームのタイトル
//-----------------------------------------------------------------
add_shortcode('cf7_insert', 'get_cf7_insert');
function get_cf7_insert($atts){
	extract(shortcode_atts(array(
        'form_title' => '',
    ), $atts));
	if(empty($form_title)){
		return ;	//パラメータが無い場合、何もしないで返却
	}
	if(!post_type_exists('wpcf7_contact_form')){
		return ;	//Contact Form 7が無い場合、何もしないで返却
	}
	//Contact Form 7のpost_type名で、該当タイトルのカスタム投稿を取得
    $args = array(
		'post_type' => 'wpcf7_contact_form',
		's' => $form_title,
	);
	$myposts = get_posts($args);
	if($myposts):
		foreach($myposts as $post):
			setup_postdata($post);
			$wpcf7_shortcode_command = '[contact-form-7 id="'.$post->ID.'" title="'.$form_title.'"]';
		endforeach;
	else:
		return ;	//なければ何もしないで返却
	endif;

	return do_shortcode($wpcf7_shortcode_command);	//Contact Form 7で準備されているショートコードを呼び出す。
}

// ファビコンの設置
function add_favicon() {
    echo '<link rel="shortcut icon" href=" ' . get_template_directory_uri() . '/favicon.ico" type="image/x-icon" />' . "\n";
}
add_action('wp_head', 'add_favicon');