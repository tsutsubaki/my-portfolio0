<!DOCTYPE html>
<html <?php language_attributes(); //言語設置を自動的に
?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>my portfolio</title>
<meta name="descryption" content="ポートフォリオのオリジナルテーマ">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="l-wrapper">

    <header class="l-header">
 
    <div class="l-logo">
    <a href="<?php echo esc_url( home_url('/') ); ?>"><!--logを押したらトップページへ戻る-->
    
    <!-- ロゴをimgフォルダから取得 -->
    
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="logo">
    
    </a>
    </div>


    <div class="p-header__hamburger">
          <button class="c-hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span class="c-hamburger__text">menu</span>
          </button>
        </div>
  <!--ハンバーガーメニュここまでー-->


    </header>

    