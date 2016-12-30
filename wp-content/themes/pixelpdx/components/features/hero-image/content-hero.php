<?php
/**
 * The template used for displaying hero content
 *
 * @package pixelpdx
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="pixelpdx-hero">
		<?php the_post_thumbnail( 'pixelpdx-hero' ); ?>
	</div>
<?php endif; ?>
