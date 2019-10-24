<!--header.phpを呼び出す -->
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Foundations
 */

get_header(); ?>
  <div class="main-container">
<div class="content-area"> 
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
        
<!--WordPressループ ここから-->
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
<?php endwhile;
?>
<!--WordPressループ ここまで-->
                      <!--page_top_link.phpへリンク-->
<?php get_template_part('page_top_link'); ?>
        </div>

<!--sidebar.phpを呼び出す-->
        <?php get_sidebar(); ?>

        <div class="clear"></div>
    </div>
</div>

<!--footer.phpを呼び出す-->
<?php get_footer(); ?>
