<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
	<h2 class="page-title-products">Products</h2>
	<div class="container">
		<div class="row">
			<div class="products-area">

				<?php

				$args = array( 'post_type' => 'products');

				$the_query = new WP_Query( $args ); 

				if ( $the_query->have_posts() ) {

					$i = 0;

					while ( $the_query->have_posts() ) {
						
						$the_query->the_post();

						get_template_part( 'template-parts/archive-products', get_post_type() );

					}
				}
				?>
			</div>
		</div>
	</div>
</main><!-- #site-content -->

<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
