<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" style="background-color: <?php echo get_post_meta(get_the_ID(), 'background-color', true); ?>">
	<a href="<?php the_permalink(); ?>">
		<div class="img-wraper">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="product-title">
			<h3><?php the_title(); ?></h3>
		</div>
		<div class="product-link">
			<a href="<?php echo get_post_meta(get_the_ID(), 'link', true); ?>" target="_blank">Open Link</a>
		</div>
			
	</a>
	
</article><!-- .post -->
