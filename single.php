<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chengdu
 */

get_header('main'); ?>

	

		<?php
		while ( have_posts() ) : the_post();

			the_content();


			

		endwhile; // End of the loop.
		?>

<?php
get_footer();
