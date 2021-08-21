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
    <div class="main-wrapper">
       <div class="header navbar-area">
          <nav class="navbar navbar-expand-lg navbar-light bg-black">
              <div class="container-fluid">
              <a class="navbar-brand logo" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="auto-mg navbar-nav mr-auto ml-auto">
                  <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
                <div class="menu-socialList navicons">
                    <div class="title_icons">Stay Connected</div>
                      <ul class="nav-ul">
                          <li><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/facebook.svg" alt=""></a></li>
                          <li><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/twitter.svg" alt=""></a></li>
                      </ul>
                </div>
              </div>
          </div>
        </nav>
      </div>