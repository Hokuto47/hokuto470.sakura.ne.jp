<?php get_header(); ?>

<?php
// Dealing with old files.
// Actually, it's ok to only use get_template_part().
/*-------------------------------------------*/
/* Page Header
/*-------------------------------------------*/
$old_file_name[] = 'module_pageTit.php';
if ( locate_template( $old_file_name, false, false ) ) {
	locate_template( $old_file_name, true, false );
} else {
	get_template_part( 'template-parts/page-header' );
}
/*-------------------------------------------*/
/* BreadCrumb
/*-------------------------------------------*/
$old_file_name[] = 'module_panList.php';
if ( locate_template( $old_file_name, false, false ) ) {
	locate_template( $old_file_name, true, false );
} else {
	get_template_part( 'template-parts/breadcrumb' );
}
?>

<div class="section siteContent">
<?php do_action( 'lightning_siteContent_prepend' ); ?>
<div class="container">
<?php do_action( 'lightning_siteContent_container_prepend' ); ?>
<div class="row">
<div class="<?php lightning_the_class_name( 'mainSection' ); ?>" id="main" role="main">
<?php do_action( 'lightning_mainSection_prepend' ); ?>

<?php
if ( apply_filters( 'is_lightning_extend_single', false ) ) :
	do_action( 'lightning_extend_single' );
else :
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="<?php lightning_the_class_name( 'entry-header' ); ?>">
		<?php get_template_part( 'module_loop_post_meta' ); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>

		<?php do_action( 'ligthning_entry_body_before' ); ?>
		<div class="<?php lightning_the_class_name( 'entry-body' ); ?>">
		<?php the_content(); ?>
		</div>
		<?php do_action( 'ligthning_entry_body_after' ); ?>

		<div class="<?php lightning_the_class_name( 'entry-footer' ); ?>">
		<?php
		$args = array(
			'before'      => '<nav class="page-link"><dl><dt>Pages :</dt><dd>',
			'after'       => '</dd></dl></nav>',
			'link_before' => '<span class="page-numbers">',
			'link_after'  => '</span>',
			'echo'        => 1,
		);
			wp_link_pages( $args );
			?>

				<?php
				/*-------------------------------------------*/
				/*  Category and tax data
				/*-------------------------------------------*/
				$args          = array(
					'template'      => __( '<dl><dt>%s</dt><dd>%l</dd></dl>', 'lightning' ),
					'term_template' => '<a href="%1$s">%2$s</a>',
				);
				$taxonomies    = get_the_taxonomies( $post->ID, $args );
				$taxnomiesHtml = '';
				if ( $taxonomies ) {
					foreach ( $taxonomies as $key => $value ) {
						if ( $key != 'post_tag' ) {
							$taxnomiesHtml .= '<div class="entry-meta-dataList">' . $value . '</div>';
						}
					} // foreach
				} // if ($taxonomies)
				$taxnomiesHtml = apply_filters( 'lightning_taxnomiesHtml', $taxnomiesHtml );
				echo $taxnomiesHtml;
			?>

			<?php
			$tags_list = get_the_tag_list();
			if ( $tags_list ) :
			?>
			<div class="entry-meta-dataList entry-tag">
			<dl>
			<dt><?php _e( 'Tags', 'lightning' ); ?></dt>
	<dd class="tagcloud"><?php echo $tags_list; ?></dd>
	</dl>
	</div><!-- [ /.entry-tag ] -->
	<?php endif; ?>
		</div><!-- [ /.entry-footer ] -->

		<?php comments_template( '', true ); ?>
	</article>

	<?php
	endwhile;
	endif;
	endif;
?>
<?php get_template_part( 'template-parts/post/next-prev' ); ?>
<?php do_action( 'lightning_mainSection_append' ); ?>
</div><!-- [ /.mainSection ] -->

<div class="<?php lightning_the_class_name( 'sideSection' ); ?>">
<?php get_sidebar( get_post_type() ); ?>
</div><!-- [ /.subSection ] -->

</div><!-- [ /.row ] -->
</div><!-- [ /.container ] -->
</div><!-- [ /.siteContent ] -->
<?php get_footer(); ?>
