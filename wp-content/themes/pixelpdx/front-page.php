<?php
/**
 * The static front page template
 *
 * @package pixelpdx
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

	<div>HELLO</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'components/features/hero-image/content', 'hero' ); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'components/features/testimonials/testimonials' ); ?>
		</main>
	</div>
<?php get_footer(); ?>

<?php endif; ?>
