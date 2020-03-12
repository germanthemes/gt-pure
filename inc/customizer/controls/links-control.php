<?php
/**
 * Theme Links Control for the Customizer
 *
 * @package GT Pure
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays the theme links in the Customizer.
	 */
	class GT_Pure_Customize_Links_Control extends WP_Customize_Control {
		/**
		 * Render Control
		 */
		public function render_content() {
			?>

			<div class="theme-links">

				<span class="customize-control-title"><?php esc_html_e( 'Theme Links', 'gt-pure' ); ?></span>

				<p>
					<a href="<?php echo esc_url( __( 'https://germanthemes.de/en/themes/gt-pure/', 'gt-pure' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=gt-pure&utm_content=theme-page" target="_blank">
						<?php esc_html_e( 'Theme Page', 'gt-pure' ); ?>
					</a>
				</p>

				<p>
					<a href="https://demo.germanthemes.de/?demo=gt-pure&utm_source=customizer&utm_campaign=gt-pure" target="_blank">
						<?php esc_html_e( 'Theme Demo', 'gt-pure' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://germanthemes.de/en/docs/gt-pure-documentation/', 'gt-pure' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=gt-pure&utm_content=documentation" target="_blank">
						<?php esc_html_e( 'Theme Documentation', 'gt-pure' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/gt-pure/reviews/', 'gt-pure' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Rate this theme', 'gt-pure' ); ?>
					</a>
				</p>

			</div>

			<?php
		}
	}

endif;
