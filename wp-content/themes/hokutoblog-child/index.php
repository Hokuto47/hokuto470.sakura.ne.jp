<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hokutoblog
 */


get_header();
?>

<?php /*
*<?php wp_title (); ?> / サイトのタイトルを出力します。
*<?php bloginfo(); ?> / サイトの様々な情報を出力します。後述
*<?php wp_nav_menu(); ?> / カスタムメニューを実装します。要functions.php
*<?php the_permalink() ?> / 記事のパーマリンクを出力します。ループ内
*<?php the_title(); ?> / 記事タイトルを出力します。ループ内
*<?php the_content(); ?> / 記事コンテンツを出力します。ループ内
*<?php the_excerpt(); ?> / 抜粋を出力します。ループ内
*<?php the_post_thumbnail(); ?> / アイキャッチを出力します。ループ内・要functions.php
*<?php the_time() ?> / 投稿時間を出力します。ループ内
*<?php the_tags(); ?> / 記事で使われているタグのリンクを出力します。ループ内
*<?php wp_tag_cloud(); ?> / タグクラウドを実装します
*<?php the_category() ?> / 記事のカテゴリリンクを出力します。ループ内
*<?php wp_list_categories(); ?> / カテゴリーのリストを作ります
*<?php wp_list_comments(); ?> / コメントのリストを作ります
*/
?>

<?php /* ▲インクルードタグです */ ?> 

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php /* ▼インクルードタグです */ ?> 
<?php
get_sidebar();
get_footer();
