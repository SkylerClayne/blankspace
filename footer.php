<?php 
/**
 * The template for displaying the footer
 *
 */
?>

           <?php wp_footer(); ?>
           <div id="footer-container" class="center ">
           		<div class="row center">
           			<div class="center col-xs-4 col-sm-4 col-md-4 col-lg-4">



           			</div>
           			<div class="copyright center col-xs-4 col-sm-4 col-md-4 col-lg-4">





<?php

							$blankspace_socials_facebook = get_theme_mod('blankspace_socials_facebook');
							$blankspace_socials_twitter = get_theme_mod('blankspace_socials_twitter','#');
							$blankspace_socials_linkedin = get_theme_mod('blankspace_socials_linkedin','#');
							$blankspace_socials_github = get_theme_mod('blankspace_socials_github','#');

							$social_media_path = get_template_directory_uri().'/img/social-media-icons';
				
							if(!empty($blankspace_socials_facebook) || !empty($blankspace_socials_twitter) || !empty($blankspace_socials_linkedin) || !empty($blankspace_socials_behance) || !empty($blankspace_socials_dribbble)):
								echo '<div class="social-media center">';
									
									/* facebook */
									if( !empty($blankspace_socials_facebook) ):
										echo '<a target="_blank" class="social-media-icon href="'.esc_url(__($blankspace_socials_facebook,'blankspace-lite')).'"><img src="'. $social_media_path .'/facebook.png" \></a>';
									endif;
									/* twitter */
									if( !empty($blankspace_socials_twitter) ):
										echo '<a target="_blank" class="social-media-icon href="'.esc_url(__($blankspace_socials_twitter,'blankspace-lite')).'"><img src="'. $social_media_path .'/twitter.png" \></a>';
									endif;
									/* github */
									if( !empty($blankspace_socials_github) ):
										echo '<a target="_blank" class="social-media-icon href="'.esc_url(__($blankspace_socials_github,'blankspace-lite')).'"><img src="'. $social_media_path .'/github.png" \></a>';
									endif;
									/* linkedin */
									if( !empty($blankspace_socials_linkedin) ):
										echo '<a target="_blank" class="social-media-icon href="'.esc_url(__($blankspace_socials_linkedin,'blankspace-lite')).'"><img src="'. $social_media_path .'/linkedin.png" \></a>';
									endif;

								echo '</div>';
							endif; 

						?>




						<?php

	           			 	$blankspace_copyright = get_theme_mod('blankspace_copyright');

		           			 if( !empty($blankspace_copyright) ):
								echo esc_attr($blankspace_copyright).' © 2015'.'<br>';
							endif;
							
							echo 'theme by <a class="center" href="http://www.github.com/skylerclayne/blankspace" target="_blank" rel="nofollow"> BLANKSPACE </a>'.__('powered by','blankspace').'<a class="blankspace-copyright" href="http://wordpress.org/" target="_blank" rel="nofollow"> WordPress</a>';
						
	           			 ?>

           			</div>
           			 <div class="center col-xs-4 col-sm-4 col-md-4 col-lg-4">


	           			 
   
           			</div>
           		</div>

       	    </div>
        </div>
    </body>
</html>