<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hokutoblog
 */
 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php   wp_head();  ?>
</head>
<!--
参考サイト 
https://techacademy.jp
ABテストツール：https://accounts.google.com/signin/v2/identifier?service=analytics&passive=1209600&continue=https%3A%2F%2Foptimize.google.com%2F&followup=https%3A%2F%2Foptimize.google.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin
-->

<body <?php body_class(); ?>>

<!-- ▼スニペット Google Tag Manager  ※javaが対応していない場合noscriptタグ配置 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXXXX-Y', 'auto');
  ga('send', 'pageview');

</script>
<!-- ▲スニペット End Google Tag Manager  -->

<h2><a href="#"></a></h2>

		<div class="site-branding">
			<?php 
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$hokutoblog_description = get_bloginfo( 'description', 'display' );
			if ( $hokutoblog_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $hokutoblog_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hokutoblog' ); ?></a>
	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="navbar main-navigation navbar-fixed-top bt-navbar-bootcamp header-fixed">
			<div class="navbar-inner">
			
				<a>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hokutoblog' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
				</a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
