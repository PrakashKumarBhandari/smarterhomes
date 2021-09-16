<?php
get_header();?>

<div id="fullpage">
     
     <!-- header -->
     <div class="wrapper-slideHeader wow fadeInLeft" data-wow-delay="0.6s">
         <div class="side-menu">
         <div class="logo">
             <a href="<?php echo site_url();?>">
                 <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
             </a>
         </div>
         <div class="list-menu">
                <?php 
                  wp_nav_menu(
                    array(
                      'menu'      => 'main-menu',
                      'container'      => 'ul',
                    )
                  );
                ?>
         </div>
        <?php 
        $home_options = get_option( 'theme_options' );
        ?>
         <div class="social-lst">
             <div class="stay-connected">
                 Stay-Connected
             </div>
             <div class="menu-socialList">
                 <ul>
                     <li><a href="<?php  if ( isset( $home_options['input_fb_link'] ) ) { echo $home_options['input_fb_link']; } ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/facebook.svg" alt=""></a></li>
                     <li><a href="<?php  if ( isset( $home_options['input_twitter_link'] ) ) { echo $home_options['input_twitter_link']; } ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/twitter.svg" alt=""></a></li>
                 </ul>
             </div>
         </div>
     </div>
     </div>
     <!-- end header -->
    
  
     <!-- Slider -->
     <div class="section banner z-index9 " id="section0">
         <div class="cSlider cSlider--single ">
             <?php
             $banner_slider_count = 0;
            // Check rows exists.
            if ( have_rows( 'banner_slider_image' ) ) :
            // Loop through rows.
            while ( have_rows( 'banner_slider_image' ) ) :
            the_row();
            $slider_big_image  = '';
            $slider_thumbnail_image  = '';
            $slider_images = get_sub_field( 'slider_image' );
            if ( ! empty( $slider_images ) ) {
                $slider_big_image = $slider_images['url'];
            }
            ?>
            <div class="cSlider__item fullcoverPage" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.8631827731092436) 0%, rgba(40,40,40,0.11528361344537819) 25%) ,url('<?php echo $slider_big_image;?>');">
                <div class="container-fluid">
                    
                    <?php
                    if ( have_rows( 'banner_hover_block' ) ) :                  
                    ?>
                    <div class="wrappertiptip ">
                        <div class="click-tool">
                            <div class="tooltip-example">
                                <?php 
                                $random = rand() % 2;
                                $counter_hover = 0;
                                while ( have_rows( 'banner_hover_block' ) ) :                                
                                the_row();
                                ?>
                                <div class="tooltip<?php echo $counter_hover;?>"  >		
                                    <div class="plus_btn<?php echo $counter_hover;?> opentooltip">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/add.svg" alt="">
                                    </div>
                                    <div class="tooltip__content<?php echo $counter_hover;?> tooltipbox  ntx3" <?php if($random == $counter_hover){ echo "style='display:block;'"; } ?>>                                    
                                        <div class="taghead">
                                            <span><?php the_sub_field( 'heading' ); ?></span>
                                        </div>
                                        <div class="click-title">
                                            <?php the_sub_field( 'title' ); ?>
                                        </div>
                                        <div class="click-para">
                                            <?php the_sub_field( 'short_detail' ); ?>
                                        </div>
                                        <div class="btn-click">
                                            <a href="<?php the_sub_field( 'detail_link' ); ?>">More Details   ></a>
                                        </div>                                    
                                    </div>
                                </div>
                                <?php
                                $counter_hover++;
                                endwhile;
                                ?>

                            </div>
                        </div>
                    </div>
                    <?php                   
                    endif;
                    ?>                       
                    <div class="slider-caption">
                        <div class="slider-contents">
                            <div class="slider-heading " data-wow-delay="0.6s">
                                <h2><?php the_sub_field( 'banner_title' ); ?></h2>
                            </div>
                            <div class="slider-para" data-wow-delay="0.7s">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sld-cns">
                                        <?php the_sub_field( 'banner_short_detail' ); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sld-bts">
                                            <ul>
                                                <?php
                                                $counter_link = 1;
                                                if ( have_rows( 'buttons_and_links' ) ) :
                                                while ( have_rows( 'buttons_and_links' ) ) :
                                                the_row();
                                                ?>
                                                <li><a class="<?php if($counter_link=='1'){ echo 'gt-quote';}else{ echo'wy-choose hvr-sweep-to-right ';} ?> " href="<?php the_sub_field( 'button_link' ); ?>"><?php the_sub_field( 'button_label' ); ?></a></li>
                                                <?php
                                                $counter_link++;
                                                endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $random = 1;
            endwhile;
            endif;
            ?>
         </div>
 
         <div class="cSlider cSlider--nav slider-rightPanel wow fadeInRight" data-wow-delay="0.6s">
         <?php
            if ( have_rows( 'banner_slider_image' ) ) :
            while ( have_rows( 'banner_slider_image' ) ) :
            the_row();
            $slider_big_image  = '';
            $slider_thumbnail_image  = '';
            $slider_images = get_sub_field( 'slider_image' );
            if ( ! empty( $slider_images ) ) {
                $slider_big_image = $slider_images['sizes']['thumbnail'];
            }
            ?>
            <div class="cSlider__item"><img src="<?php echo $slider_big_image;?>" alt=""></div>             
            <?php
            endwhile;
            endif;
            ?>
         </div>
     </div>
     <!-- end slider -->
    


     <!-- Service -->
     <div class="section section-services fullcoverPage z-index-1" id="section01">
         <div class="container-fluid">
             <!-- section title -->
             <div class="section-title">
                 <div class="main-title text-center">
                     <h2><?php the_field( 'service_title' ); ?></h2>
                 </div>
                 <div class="section-paragraph mx-w830 text-center margin-center mt-20"><?php the_field( 'service_sub_title' ); ?></div>
             </div>
             <!-- section title end -->
 
             <div class="section-servceList">
                 <div class="row">
                    <?php
                    // Check rows exists.
                    if ( have_rows( 'service_offers' ) ) :
                    // Loop through rows.
                    while ( have_rows( 'service_offers' ) ) :
                    the_row();
                    $offer_block_image  = '';
                    $offer_hover_image  = '';
                    $icon_image = get_sub_field( 'offer_icon_image' );
                    if ( ! empty( $icon_image ) ) {
                        $offer_block_image = $icon_image['url'];
                    }
                    $hover_icon_image = get_sub_field( 'offer_icon_hover' );
                    if ( ! empty( $hover_icon_image ) ) {
                        $offer_hover_image = $hover_icon_image['url'];
                    }
                    ?>
                    <div class="col-lg-4 col-md-4 col-12 wow fadeInUp"  >
                         <div class="list-card ">
                             <ul>
                                 <li class="img-servicesIcon">
                                     <img class="services-icon" src="<?php echo $offer_block_image;?>" alt="">
                                     <span><img class="services-icon" src="<?php echo $offer_hover_image;?>" alt=""></span>
                                 </li>
                                 <li class="right-cardContents">
                                     <div class="card-title">
                                        <?php the_sub_field( 'title' ); ?>
                                     </div>
                                     <div class="card-paragraph">
                                        <?php the_sub_field( 'short_detail' ); ?>
                                     </div>
                                 </li>
                             </ul>
                         </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    ?>                     
                 </div>
                 <div class="button-center clearfix">
                     <a class="hvr-sweep-to-right" href="<?php the_field( 'view_more_services_link' ); ?>">View More Services</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- end services -->
 
     <!-- Smart Homes -->
     <div class="section smart-homes fullcoverPage z-index-1" id="section2" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/banner/bg-abt.jpg">
         <div class="container-fluid">
             <div class="title-wrapper">
                 <div class="single-letter">
                     S
                 </div>
                 <div class="section-title ml-40 z-index1">
                     <div class="main-title">
                         <h2 class="font60"><?php the_field( 'about_title' ); ?></h2>
                     </div>
                 </div>
             </div>
 
             <div class="smarter-homeContentes">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="smarter-home2 wow fadeInLeft">
                            <?php
                            $smarter_home_image = get_template_directory_uri().'/assets/images/smarters-home2.jpg';
                            $smarte_home = get_field( 'left_image' );
                            if ( ! empty( $smarte_home ) ) {
                                $smarter_home_image = $smarte_home['url'];
                            }
                            ?>
                            <img src="<?php echo $smarter_home_image;?>" alt="">
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="smarter-home1 wow fadeInRight">
                         <?php
                            $smarter_home_right = get_template_directory_uri().'/assets/images/smarters-home1.jpg';
                            $smarter_right = get_field( 'top_image' );
                            if ( ! empty( $smarter_right ) ) {
                                $smarter_home_right = $smarter_right['url'];
                            }
                            ?>
                            <img src="<?php echo $smarter_home_right;?>" alt="">
                         </div>
                         <div class="description-smarter">
                             <p><?php the_field( 'about_detail' ); ?></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- end Smart homes -->
 
     <!-- Why Choose -->
     <div class="section why-choose z-index-1" id="section3">
 
         <div class="why-choosebg " >
             <div class="contents-whyChoose wow fadeInLeft">
                 <div class="why-choseTitle">
                     <h4><?php the_field( 'why_smarter_sub_title' ); ?></h4>
                     <div class="sec-title">
                         <h3><?php the_field( 'why_smarter_title' ); ?></h3>
                     </div>
                 </div>
 
                 <div class="list-whyChose">
                     <ul>
                        <?php
                        // Check rows exists.
                        if ( have_rows( 'why_features' ) ) :
                        // Loop through rows.
                        while ( have_rows( 'why_features' ) ) :
                        the_row();
                        ?> 
                        <li><?php the_sub_field( 'feature_lists' ); ?></li>
                        <?php
                        endwhile;
                        endif;
                        ?>
                     </ul>
                 </div>
             </div>
         </div>
         <video autoplay muted loop id="myVideo" class="fullscreen-bg__video" loop muted playsinline data-autoplay >
             <source src="<?php echo get_template_directory_uri();?>/assets/images/banner/video.MP4" type="video/mp4" autoplay onplay="handleFirstPlay(event)">
         </video>
         
     </div>
     <!-- end why choose -->
 
     <!-- get a qoute -->
     <div class="section z-index-1 get-quote" id="section4">
         <div class="container-fluid">
             <!-- section title -->
             <div class="section-title">
                 <div class="main-title text-center">
                     <h2><span class="mg-l">Get a </span>Quote<span class="mg-l">Now</span></h2>
                 </div>
                 <div class="section-paragraph mx-w830 text-center margin-center mt-20">These dummy texts are for display purposes only to show the volume of content that will be placed on this particular page. Contents are for display purposes.</div>
             </div>
             <!-- section title end -->
 
             <div class="quote-wraper">
                <?php echo do_shortcode('[contact-form-7 id="143" title="Get a Quote"]');?>      
             </div>
         </div>
     </div>
     <!-- end get a qoute -->
 
      <!-- why solar Energy -->
     <div class="section z-index-1 fullcoverPage why-solarEnergy" id="section5" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/smarters-home3.jpg">
         <div class="right-solar wow fadeInLeft">
             <img class="" src="<?php echo get_template_directory_uri();?>/assets/images/solar.png" alt="">
         </div>
         <div class="container-fluid">
             <div class="energy-contents">
                 <div class="row">
                     <div class="col-md-7"></div>
                     <div class="col-md-5">
                         <div class="sec-title text-center">
                             <h3><?php the_field( 'why_solar_title' ); ?></h3>
                         </div>
                         <div class="list-why wow fadeInRight">
                            <?php
                            // Check rows exists.
                            if ( have_rows( 'why_solar_features' ) ) :
                            // Loop through rows.
                            while ( have_rows( 'why_solar_features' ) ) :
                            the_row();
                            $icon_block_image  = '';
                            $icon_hover_image  = '';
                            $icon_image = get_sub_field( 'icon' );
                            if ( ! empty( $icon_image ) ) {
                                $icon_block_image = $icon_image['url'];
                            }
                            $hover_icon_image = get_sub_field( 'icon_hover' );
                            if ( ! empty( $hover_icon_image ) ) {
                                $icon_hover_image = $hover_icon_image['url'];
                            }
                            ?>
                            <div class="card-list ">
                                <ul>
                                    <li><img class="op-1" src="<?php echo $icon_block_image;?>" alt=""><img class="op-2" src="<?php echo $icon_hover_image;?>" alt=""></li>
                                    <li class="why-card-cnt">
                                        <div class="card-title">
                                            <?php the_sub_field( 'title' ); ?>
                                        </div>
                                        <div class="card-paragraph">
                                            <?php the_sub_field( 'short_detail' ); ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            endwhile;
                            endif;
                            ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         
     </div>
     <!-- end why solar Energy -->
 
    	     <!-- Sticky footer -->	
    <div class="sticky_footer">	
            <div class="container-fluid">	
                <div class="btn_stikcyWrapper">	
                    <div class="sticky_contactBtn">	
                        <a href="<?php echo site_url('/contact-us');?>">Contact Us</a>	
                    </div>

                    <div class="sticky_gaqtBtn">	
                        <a href="<?php echo site_url('/');?>">Get Quote</a>	
                    </div>	
            </div>	
        </div>	
    </div>	
     <!-- sticky footer -->                        

<?php get_footer(); ?>
