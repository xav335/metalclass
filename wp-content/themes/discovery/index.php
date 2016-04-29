<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package discovery
 * @since discovery 1.0
 */

get_header(); ?>
		<header class="entry-header">
            <h1 class="page-title">
                <?php if( is_home() && get_option('page_for_posts') ) { ?>
				<?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?>
                <?php } elseif( is_singular() ) { ?>
                <?php the_title(); ?>
                <?php } ?>
            </h1>
            <?php if (function_exists('discovery_breadcrumbs')) discovery_breadcrumbs(); ?>
        </header><!-- .entry-header -->
		<div id="primary_wrap">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
                
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php discovery_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
	</div><!-- #primary wrap -->
<?php get_footer(); ?>