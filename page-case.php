<?php
/*
Template Name: Case Template
 */

get_header('case'); ?>

	

			<?php
			while ( have_posts() ) : the_post();

				
				the_content();

			endwhile; // End of the loop.
			?>

		

<?php

get_footer();
