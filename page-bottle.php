<?php
/*
Template Name: Bottle Cap Template
 */

get_header('bottle'); ?>

	

			<?php
			while ( have_posts() ) : the_post();

				
				the_content();

			endwhile; // End of the loop.
			?>

		

<?php

get_footer();
