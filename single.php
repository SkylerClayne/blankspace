<?php

/*
* Displays a single post.
*
* @package blankspace
* @since blankspace 1.0
*/

?>


<?php get_header(); ?>

	<div class="content-container">
		<?php if (have_posts()) : ?>
		   <?php while (have_posts()) :?>
		   	 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		   		<?php the_post(); ?>
		   		<div class="post-stub">
		   			<div class="post-header">
		   				<div class="post-title">
				   			<h2><?php the_title(); ?></h2>
				   		</div>
		      			<div class="post-info">
		      				Posted by <?php the_author();?> on <?php the_date(); ?>
		      			</div>			
		   			</div>
      			<hr>
      			<div class="post-content">
      				<?php the_content(); ?>		
      			</div>
      			</div>



				<?php
				 	$defaults = array(
						'before'           => '<p>' . __( 'Pages:' ),
						'after'            => '</p>',
						'link_before'      => '',
						'link_after'       => '',
						'next_or_number'   => 'number',
						'separator'        => ' ',
						'nextpagelink'     => __( 'Next page' ),
						'previouspagelink' => __( 'Previous page' ),
						'pagelink'         => '%',
						'echo'             => 1
					);
				 
				        wp_link_pages( $defaults );

				?>


      			<div class="post-nav">
	      			<div class="next-post">
	      				<?php echo get_next_post_link(); ?>
	      			</div>
	      			<div class="prev-post">
	      				<?php echo get_previous_post_link(); ?>
	      			</div>
      			</div>

      			<div class="clear"></div>

			      			
				<?php wp_list_comments( ); ?>
				<?php comments_template(); ?> 

      			</div>	
   			<?php endwhile;
		endif;
	?>
	
	</div>


<?php get_footer(); ?>
