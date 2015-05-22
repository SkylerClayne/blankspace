<?php

/*
* Default page template.
* 
* @package blankspace
* @since blankspace 1.0
*/

 get_header(); ?>
	<div class="content-container">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		   	<div class="post-stub">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>

<?php get_footer(); ?>
