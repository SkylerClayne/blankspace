<?php 

/**
*	This is the main template file, doesn't take center stage but is a fallback.
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
			   			<h2><?php the_title(); ?></h2>
			   		</div>
		  			<div class="post-info">
		   				Posted by <?php the_author();?> on <?php the_time('F j, Y'); ?>
	      			</div>			
	   			</div>
      			<?php the_excerpt(); ?>	

      		<hr>
      		</div>	
   			<?php endwhile;endif;?>
	</div>

<?php get_footer(); ?>
