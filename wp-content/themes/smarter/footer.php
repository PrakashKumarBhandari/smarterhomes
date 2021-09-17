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

      <!-- Footer -->
     <div class="section z-index-1 footer-fullpage fullcoverPage" id="section6" style="background-image: url(<?php echo $footer_bg_image;?>">
         <div class="footer-form">
             <div class="container-fluid">             
             <?php echo do_shortcode('[contact-form-7 id="142" title="Contact form"]'); ?>
             </div>
         </div>
 
         <div class="div contact-footer">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-3">
                         <div class="img-footer">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-footer.png" alt="">
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="cnt-footer">
                             <div class="row">
                                 <div class="col-md-3 col-6">
                                     <div class="smarter-location">
                                        Our Location <br>
                                        <?php                                          
                                         if ( isset( $options['input_location'] ) ) {
                                            echo $options['input_location'];
                                        }
                                        ?>
                                     </div>
                                 </div>
                                 <div class="col-md-2 col-6">
                                     <div class="smarter-location">
                                         Phone: <br>
                                        <?php                                          
                                        if ( isset( $options['input_phone'] ) ) {
                                            echo $options['input_phone'];
                                        }
                                        ?>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-6">
                                     <div class="smarter-location">
                                         Email Address: <br>
                                         <?php                                          
                                        if ( isset( $options['input_email'] ) ) {
                                            echo $options['input_email'];
                                        }
                                        ?>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-6">
                                     <div class="smarter-location">
                                     <?php                                          
                                        if ( isset( $options['input_day_heading'] ) ) {
                                            echo $options['input_day_heading'];
                                        }
                                        ?> <br>
                                        <?php                                          
                                        if ( isset( $options['input_day_closed'] ) ) {
                                            echo $options['input_day_closed'];
                                        }
                                        ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 
         <div class="btm-footer">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-5 order-md-first order-last">
                         <div class="copyright">© Copyright <?php echo date('Y');?>   |   All Rights Reserved</div>
                     </div>
                     <div class="col-md-7 ">
                         <div class="footer-menu">
                            <?php 
                            wp_nav_menu(
                                array(
                                'menu'      => 'Footer-Menu',
                                'container'      => 'ul',
                                )
                            );
                            ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
</div>
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