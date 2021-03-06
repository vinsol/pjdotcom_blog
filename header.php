<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title>
<?php
if ( defined( 'WPSEO_VERSION' ) ) {
    // WordPress SEO is activated
        wp_title();

} else {
	
    // WordPress SEO is not activated
	wp_title( '&#124;', true, 'right' );
}
?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.8.9');?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
                 
<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">
         
    <?php responsive_header(); // before header hook ?>
    <div id="header">
    
        <?php if (has_nav_menu('top-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'top-menu',
					'theme_location'  => 'top-menu')
					); 
				?>
        <?php } ?>
        
    <?php responsive_in_header(); // header hook ?>
   
	<?php if ( get_header_image() != '' ) : ?>
               
        <div id="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/03/pj_logo.png"  alt="<?php bloginfo('name'); ?>" width="40%" />
            </a>
        </div><!-- end of #logo -->
        <div class="right">
            <div class="share">
                <span>Share: </span>
                <a target="_new" class="tw" href="https://twitter.com/#!/pj_jw">Twitter</a>
                <a target="_new" class="fb" href="https://www.facebook.com/pages/Pooja-Juneja-Designer-Jewellery/342391549113894">Facebook</a>
            </div>
        </div>   
    <?php endif; // header image was removed ?>

    <?php if ( !get_header_image() ) : ?>
                
        <div id="logo">
            <span class="site-name"><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></span>
            <span class="site-description"><?php bloginfo('description'); ?></span>
        </div><!-- end of #logo -->  

    <?php endif; // header image was removed (again) ?>
    
    <?php get_sidebar('top'); ?>
			    
				<?php wp_nav_menu(array(
				    'container'       => '',
					'theme_location'  => 'header-menu')
					); 
				?>
                
            <?php if (has_nav_menu('sub-header-menu', 'responsive')) { ?>
	            <?php wp_nav_menu(array(
				    'container'       => '',
					'menu_class'      => 'sub-header-menu',
					'theme_location'  => 'sub-header-menu')
					); 
				?>
            <?php } ?>
 
<div id="navigation">
    <ul>
        <li class="home"><a href="http://www.poojajuneja.com/">Home</a></li>
        <li><a href="http://www.poojajuneja.com/pages/about_us">About Us</a></li>
        <li><a href="http://www.poojajuneja.com/collections">Collection</a></li>
        <li><a href="http://www.poojajuneja.com/exhibition">Exhibition</a></li>
        <li><a href="http://www.poojajuneja.com/awards">Awards</a></li>
        <li><a href="http://www.poojajuneja.com/pages/contact_us">Contact Us</a>
        <li><a class="active" href="http://www.poojajuneja.com/blog">Blog</a>    
    </ul>           
  <!--<div class="search">
        <label for="Subscribe_to_our_Newsletter_">Subscribe to our newsletter!</label>
    <button type="submit" name="button" class="submit subscribe-submit">Subscribe</button>
  </div>-->
</div>



    </div><!-- end of #header -->
    <?php responsive_header_end(); // after header hook ?>
    
	<?php responsive_wrapper(); // before wrapper ?>
    <div id="wrapper">
    <?php responsive_in_wrapper(); // wrapper hook ?>