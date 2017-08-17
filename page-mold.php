<?php
/*
Template Name: Mold Template
 */

get_header('mold'); ?>

	

			<?php
			while ( have_posts() ) : the_post();

				
				the_content();

			endwhile; // End of the loop.
			?>

		

<?php

get_footer();
