<?php
/**
 * The template used for displaying page content without a page title.
 *
 * @version 1.0
 * @package GT Pure
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php the_content(); ?>
		<?php wp_link_pages(); ?>

	</div><!-- .entry-content -->

	<?php gt_pure_widget_area( 'after-pages' ); ?>
	<?php do_action( 'gt_pure_after_pages' ); ?>

</article>
