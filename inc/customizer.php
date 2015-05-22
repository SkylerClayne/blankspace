<?php

/**
 * blankspace Theme Customizer
 *
 * @package blankspace
 * @since blankspace 1.0
 */
function blankspace_customize_register( $wp_customize ) {


	class blankspace_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
	 
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	class blankspace_Customizer_Number_Control extends WP_Customize_Control {



		public $type = 'number';



		public function render_content() {

		?>

			<label>

				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

				<input type="number" <?php $this->link(); ?> value="<?php echo intval( $this->value() ); ?>" />

			</label>

		<?php

		}

	}


	


/*
*	
*	CUSTOM NAVIGATION BAR LOGO
*/
	$wp_customize->add_section( 'blankspace_logo_section' , array(

			'title'       => __( 'Logo options', 'blankspace' ),

    	  	'priority'    => 30,

    	  	'description' => __('BLANKSPACE logo options','blankspace'),

	));

	$wp_customize->add_setting( 'blankspace_logo', array('sanitize_callback' => 'esc_url_raw'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	      	'label'    => __( 'Logo', 'blankspace' ),
	      	'section'  => 'blankspace_logo_section',
	      	'settings' => 'blankspace_logo',
			'priority'    => 1,
	)));



/*
*
*	CUSTOM FOOTER OPTIONS
*/
	$wp_customize->add_section( 'blankspace_footer_section' , array(

			'title'       => __( 'Footer options', 'blankspace' ),

    	  	'priority'    => 30,

    	  	'description' => __('BLANKSPACE footer options','blankspace'),

	));

	/* COPYRIGHT */
	$wp_customize->add_setting( 'blankspace_copyright', array('sanitize_callback' => 'blankspace_sanitize_text'));
	$wp_customize->add_control( 'blankspace_copyright', array(
			'label'    => __( 'Copyright', 'blankspace' ),
	      	'section'  => 'blankspace_footer_section',
	      	'settings' => 'blankspace_copyright',
			'priority'    => 3,
	));



	/*
	* Support facebook profile
	*/	
	$wp_customize->add_setting( 'blankspace_socials_facebook', array('sanitize_callback' => 'esc_url_raw','default' => '#'));
	$wp_customize->add_control( 'blankspace_socials_facebook', array(
			'label'    => __( 'Facebook link', 'blankspace' ),
	      	'section'  => 'blankspace_footer_section',
	      	'settings' => 'blankspace_socials_facebook',
			'priority'    => 4,
	));



	/* 
	* Support twitter profile 
	*/
	$wp_customize->add_setting( 'blankspace_socials_twitter', array('sanitize_callback' => 'esc_url_raw','default' => '#'));
	$wp_customize->add_control( 'blankspace_socials_twitter', array(
			'label'    => __( 'Twitter link', 'blankspace' ),
	      	'section'  => 'blankspace_footer_section',
	      	'settings' => 'blankspace_socials_twitter',
			'priority'    => 5,
	));


	/*
	* Support github profile
	*/
	$wp_customize->add_setting( 'blankspace_socials_linkedin', array('sanitize_callback' => 'esc_url_raw','default' => '#'));
	$wp_customize->add_control( 'blankspace_socials_linkedin', array(
			'label'    => __( 'Github link', 'blankspace' ),
	      	'section'  => 'blankspace_footer_section',
	      	'settings' => 'blankspace_socials_github',
			'priority'    => 6,
	));

	/*
	* Support linkedin profile
	*/
	$wp_customize->add_setting( 'blankspace_socials_linkedin', array('sanitize_callback' => 'esc_url_raw','default' => '#'));
	$wp_customize->add_control( 'blankspace_socials_linkedin', array(
			'label'    => __( 'Linkedin link', 'blankspace' ),
	      	'section'  => 'blankspace_footer_section',
	      	'settings' => 'blankspace_socials_linkedin',
			'priority'    => 7,
	));



}

add_action( 'customize_register', 'blankspace_customize_register' );

function blankspace_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

}

function blankspace_sanitize_number( $input ) {

    return force_balance_tags( $input );

}


?>