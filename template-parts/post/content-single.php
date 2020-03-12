<?php
/**
 * The template for displaying single posts
 *
 * @version 1.0
 * @package GT Pure
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header entry-header">

		<?php gt_pure_post_image(); ?>

		<?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>

		<?php gt_pure_entry_meta(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		<?php gt_pure_entry_tags(); ?>

	</div><!-- .entry-content -->

	<?php gt_pure_widget_area( 'after-posts' ); ?>
	<?php do_action( 'gt_pure_after_posts' ); ?>

</article>
