<?php
/* Template Name: Career */ 

get_header();?>

<!-- career page -->
<div id="fullpage" class="znt-index">
<?php
while ( have_posts() ) : the_post(); 
?>

    <section class="section" id="section0" >
        <?php
        $banner_bg = get_template_directory_uri().'/assets/images/banner/heading/banner1.jpg';
        $banner_img_url = get_field( 'banner_bg_image' );
        if ( ! empty( $banner_img_url ) ) {
            $banner_bg = $banner_img_url['url'];
        }
        ?>
        <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $banner_bg;?>">
            <div class="container-fluid">
                <div class="heading-contents wow fadeInDown">
                    <div class="heading-title">
                        <h1><?php the_field( 'banner_title' ); ?></h1>
                    </div>
                    <div class="heading-paragraph wow fadeInDown">
                        <p><?php the_field( 'short_detail' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-contents ptb-50">
            <div class="container-fluid">
                <div class="contents-about">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title wow fadeInDown">
                                <div class="main-title">
                                    <h2><?php the_field( 'feature_heading' ); ?> </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="cnt-abt wow fadeInUp">
                                <?php the_field( 'feature_detail' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section " id="section1">
        <div class="container-fluid">
            <div class="jobs-wrapper">
                <div >
                    <div class="main-title">
                        <h5><center><span class="mg-l">Apply</span><span class="mg-l color-grn ">Jobs</span></center></h5>
                    </div>
                </div>
                <div class="heading_jobs">
                <?php 
                echo do_shortcode('[awsmjobs]');
                ?>
                </div>
            </div>                
            
        </div>
    </section>

    <?php
    $resp_bg = get_template_directory_uri().'/assets/images/others/image2.jpg';
    $resp_img_url = get_field( 'r_block_bg_image' );
    if ( ! empty( $resp_img_url ) ) {
        $resp_bg = $resp_img_url['url'];
    }
    ?>
    <section class="section fullcoverPage" id="section2" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo $resp_bg;?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft">
                    <div class="section-title">
                        <div class="main-title">
                            <h2><span class="color-ylw font-weight-bold"><?php the_field( 'responsibility' ); ?></span></h2>
                            <div class="section-paragraph mx-w830 color-wht mt-20"><?php the_field( 'responsibility_short_detail' ); ?> </div>
                        </div>
                    </div>
                    <div class="responsibility-contents">                        
                        <?php
                        if ( have_rows( 'responsibility_items' ) ) :
                        while ( have_rows( 'responsibility_items' ) ) :
                        the_row();
                        ?>
                        <div class="respon_contentList">
                            <div class="respon_contentTitle">
                                <h3><?php the_sub_field( 'heading' ); ?></h3>
                                <p class="color-wht"><?php the_sub_field( 'detail' ); ?></p>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    </section>

    <?php
    $qualification_bg = get_template_directory_uri().'/assets/images/others/image3.jpg';
    $quli_img_url = get_field( 'q_block_bg_image' );
    if ( ! empty( $quli_img_url ) ) {
        $qualification_bg = $quli_img_url['url'];
    }
    ?>
    <section class="section fullcoverPage" id="section3" style="background-image: url(<?php echo $qualification_bg;?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                </div>
                <div class="col-md-7  wow fadeInRight">
                    <div class="section-title">
                        <div class="main-title">
                            <h2><span class="primary-color font-weight-bold"><?php the_field( 'qualifications_heading' ); ?></span></h2>
                            <div class="section-paragraph mx-w830 mt-20"><?php the_field( 'qualifications_short_detail' ); ?></div>
                        </div>
                    </div>
                    <div class="responsibility-contents">
                        <?php
                        if ( have_rows( 'qualifications_items' ) ) :
                        while ( have_rows( 'qualifications_items' ) ) :
                        the_row();
                        ?>
                        <div class="respon_contentList">
                            <div class="respon_contentTitle">
                                <h3 class="color-black"><?php the_sub_field( 'heading' ); ?></h3>
                                <p><?php the_sub_field( 'detail' ); ?></p>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $application_bg = get_template_directory_uri().'/assets/images/others/image4.jpg';
    $app_img_url = get_field( 'a_block_bg_image' );
    if ( ! empty( $app_img_url ) ) {
        $application_bg = $app_img_url['url'];
    }
    ?>

    <section class="section fullcoverPage" id="section4" style="background-image: url(<?php echo $application_bg;?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7  wow fadeInLeft">
                    <div class="section-title">
                        <div class="main-title">
                            <h2><span class="primary-color font-weight-bold"><?php the_field( 'application_heading' ); ?></span></h2>
                            <div class="section-paragraph mx-w830 mt-20"><?php the_field( 'application_short_detail' ); ?></div>
                        </div>
                    </div>
                    <div class="responsibility-contents">
                        <?php
                        if ( have_rows( 'application_items' ) ) :
                        while ( have_rows( 'application_items' ) ) :
                        the_row();
                        ?>
                        <div class="respon_contentList">
                            <div class="respon_contentTitle">
                                <h3 class="color-black"><?php the_sub_field( 'heading' ); ?></h3>
                                <p><?php the_sub_field( 'detail' ); ?></p>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    </section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
