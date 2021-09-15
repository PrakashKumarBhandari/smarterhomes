<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smarter-homes
 */
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>   
<?php 
$header_options = get_option( 'theme_options' );
?> 
    <div class="main-wrapper">
       <div class="header navbar-area">
          <nav class="navbar navbar-expand-lg navbar-light bg-black">
              <div class="container-fluid">
              <a class="navbar-brand logo" href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                  wp_nav_menu(
                    array(
                      'menu'      => 'main-menu',
                      'container'      => 'ul',
                      'menu_class'           => 'auto-mg navbar-nav mr-auto ml-auto',
                      'container_class'      => 'auto-mg navbar-nav mr-auto ml-auto',
                    )
                  );
                ?>
                <div class="menu-socialList navicons">
                    <div class="title_icons">Stay Connected</div>
                      <ul class="nav-ul">
                          <li><a href="<?php  if ( isset( $header_options['input_fb_link'] ) ) { echo $header_options['input_fb_link']; } ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/facebook.svg" alt=""></a></li>
                          <li><a href="<?php  if ( isset( $header_options['input_twitter_link'] ) ) { echo $header_options['input_twitter_link']; } ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/twitter.svg" alt=""></a></li>
                      </ul>
                </div>
              </div>
          </div>
        </nav>
      </div>