<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package discovery
 * @since discovery 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<p>
						<i class="fa fa-phone"></i> 05 56 68 36 61<br/>
						<i class="fa fa-mobile"></i> 06 86 40 05 84
					</p>
					<p><i class="fa fa-envelope"></i> metalplombservices@hotmail.com</p>
					<p><i class="fa fa-map-marker"></i> 75 av. Branne 33370 TRESSES</p>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->

		<div id="tertiary" class="widget-area" role="supplementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #tertiary .widget-area -->