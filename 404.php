<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package blankspace
 * @since blankspace 1.0
 */

get_header(); ?>
	
	<div id="home-header">
    	<img alt="web page header" src="<?php header_image();?>" id="header-image"  /> <!-- style="width='<?php echo get_custom_header()->width; ?> height='<?php echo get_custom_header()->height; ?>'" -->
    </div>
    
	<div class="content-container">
		<div class="post-title center">
			<h3>404 Page Not Found</h3>
		</div>
		<div class="post-content center">
			<p>Either this page is no longer available or never existed, sorry for the inconvenience</p>
		</div>
	</div>

<?php get_footer(); ?>
