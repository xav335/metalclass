<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package discovery
 * @since discovery 1.0
 */
?>

</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if(! get_theme_mod('hide_footer_widgets')): ?>
		<div class="footer_container">
			<div class="section group">

				<div class="col span_1_of_3">
					<?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>
						<div class="widget">
							<?php echo '<h4>' . __('Widget Ready', 'discovery') . '</h4>'; ?>
							<?php echo '<p>' . __('This left column is widget ready! Add one in the admin panel.', 'discovery') . '</p>'; ?>
						</div>     
					<?php endif; ?>  
				</div>

				<div class="col span_1_of_3">
					<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
						<div class="widget">
							<?php echo '<h4>' . __('Widget Ready', 'discovery') . '</h4>'; ?>
							<?php echo '<p>' . __('This center column is widget ready! Add one in the admin panel.', 'discovery') . '</p>'; ?>
						</div>     
					<?php endif; ?> 
				</div>

				<div class="col span_1_of_3">
					<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>
						<div class="widget">
							<?php echo '<h4>' . __('Widget Ready', 'discovery') . '</h4>'; ?>
							<?php echo '<p>' . __('This right column is widget ready! Add one in the admin panel.', 'discovery') . '</p>'; ?>
						</div>     
					<?php endif; ?> 
				</div>

			</div>
		</div><!-- footer container -->
	<?php endif; ?>

        <?php if(! get_theme_mod('hide_copyright')): ?>

	        <div class="site-info">

	        	<?php if(get_theme_mod('copyright_text')): 
	        		
	        		$allowedTags = array(
	                    'a' => array(
	                        'href' => array(),
	                        'title' => array()
	                    ),
	                    'em' => array(),
	                    'strong' => array(),
	                );

	                $copyright = wp_kses(get_theme_mod('copyright_text'), $allowedTags);

	        		?>
		           
		           <?php echo $copyright; ?>

		        <?php else: ?>

					<a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>">
		            <?php _e('Discovery WordPress Theme','discovery'); ?></a>
		            <?php echo __( 'Powered By WordPress ', 'discovery' ); ?>

		        <?php endif; ?>

			</div><!-- .site-info -->

		<?php endif; ?>

	</footer><!-- #colophon .site-footer -->

    <a href="#top" id="smoothup"></a>

</div><!-- #page .hfeed .site -->
</div><!-- end of wrapper -->
<?php wp_footer(); ?>

</body>
</html>