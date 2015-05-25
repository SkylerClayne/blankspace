<?php
/**
 * The template for displaying the header
 *
 * @package blankspace
 * @since blankspace 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php  bloginfo( 'name' );  wp_title( '|', true, 'left' ); ?></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php wp_head(); ?>

   </head>
    <body>
        <div id="site-header" class="cleafix">     


            <nav class="navbar navbar-default " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a href="<?php bloginfo('url'); ?>" class="navbar-brand">
                 <?php

                            $blankspace_logo = get_theme_mod('blankspace_logo');

                            if(isset($blankspace_logo) && $blankspace_logo != ""):
                                    echo '<img src="'.$blankspace_logo.'" alt="'.get_bloginfo('title').'">';
                            else:

                                ?> <h1><?php //bloginfo('name');
                            endif;
                        ?></h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php /* Primary navigation */
                    wp_nav_menu( array(
                      'menu' => 'top_menu',
                      'depth' => 2,
                      'container' => false,
                      'menu_class' => 'nav navbar-nav navbar-right',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker())
                    );
                ?>
            </div><!-- /.navbar-collapse -->
        </nav>


        </div>
        <div class="clear"></div>





        <div id="site-content">