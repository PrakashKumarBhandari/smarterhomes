<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smarter-homes
 */

?>
    <?php
    $footer_bg_image = get_template_directory_uri().'/assets/images/banner/footer-banner.jpg';
    
    $options = get_option( 'theme_options' );
    ?>                        


<div class="sticky_footer">	
    <div class="container-fluid">	
        <div class="btn_stikcyWrapper">	
            <div class="sticky_contactBtn">	
                <a href="<?php echo site_url('/contact-us');?>">Contact Us</a>	
            </div>
            <div class="sticky_contactBtn">	
                    <a href="<?php echo site_url('/contact-us');?>">Why Choose Us</a>	
                </div>

                <div class="sticky_gaqtBtn">	
                    <a href="<?php echo site_url('/');?>">Get a Quote Now</a>	
                </div>	
        </div>	
    </div>	
</div>	

<?php wp_footer(); ?>
</body>
</html>