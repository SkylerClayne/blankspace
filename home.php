<?php
/**
 * Displays the homepage with a header image and blog archieve.
 *
 * @package blankspace
 * @since blankspace 1.0
 */

get_header(); ?>


		<div id="home-header">
	    	<img alt="web page header" src="<?php header_image();?>" id="header-image"  /> <!-- style="width='<?php echo get_custom_header()->width; ?> height='<?php echo get_custom_header()->height; ?>'" -->
        </div>

	<div class="content-container">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) :?>
	   		<div class="post-stub">
   				<?php the_post(); ?>		   			
      			<div class="post-header">
		   			<div class="post-title">
			   			<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
			   		</div>
		  			<div class="post-info">
		   				Posted by <?php the_author();?> on <?php the_time('F j, Y'); ?>
	      			</div>			
	   			</div>
	   			<div class="post-content">
      				<?php the_excerpt(); ?>	
      			</div>

      		<hr>
      		</div>	
   			<?php endwhile;endif;?>
	</div>

<?php get_footer(); ?>
