<?php
/* Template Name: About Dynamic*/ 

get_header();?>

<!-- About Us page -->
<div id="fullpage" class="znt-index">
    <section class="section" id="section0" >
        <div class="title-banner halfbanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo get_template_directory_uri();?>/assets/images/banner/heading/banner1.jpg">
            <div class="container-fluid">
                <div class="heading-contents">
                    <div class="heading-title wow fadeInDown">
                        <h1><?php the_field( 'title' ); ?></h1>
                    </div>
                    <div class="heading-paragraph wow fadeInUp">
                        <p><?php the_field( 'sub_heading' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-contents ptb-50">
            <div class="container-fluid">
                <div class="contents-about">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cnt-abt text-center wow pulse">
                                <?php the_field( 'description' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section1">
        <div class="overall-section">
            <div class="container-fluid">
                <div class="section-subTitle  wow fadeInDown">
                    <h1 class="text-center"><?php the_field( 'overall_title' ); ?></h1>
                </div>
                <div class="overall-contents">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle secondary-color">                                
                                <?php 
                                $left_side = get_field('left_side');  
                                echo $left_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <ul class="accordion">
                                        <?php
                                       foreach($left_side['feature_list'] as $row )
                                       { 
                                       ?>
                                        <li>
                                            <a><?php echo $row['heading'];?></a>
                                            <p><?php echo $row['detail'];?></p>
                                        </li>
                                        <?php
                                        }
                                        ?>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle">
                                    <?php 
                                    $mid_side = get_field('mid_side');  
                                    echo $mid_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                       <?php
                                       foreach($mid_side['feature_list'] as $row )
                                       { 
                                       ?>
                                        <li>
                                            <a><?php echo $row['heading'];?></a>
                                            <p><?php echo $row['detail'];?></p>
                                        </li>
                                        <?php
                                        }
                                        ?> 
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle">
                                    <?php 
                                    $right_side = get_field('right_side');  
                                    echo $right_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                       <?php
                                       foreach($right_side['feature_list'] as $row )
                                       { 
                                       ?>
                                        <li>
                                            <a><?php echo $row['heading'];?></a>
                                            <p><?php echo $row['detail'];?></p>
                                        </li>
                                        <?php
                                        }
                                        ?> 
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    $panels_bg = get_template_directory_uri().'/assets/images/banner/heading/banner2.jpg';
    $panel_img_url = get_field( 'panel_bg_image' );
    if ( ! empty( $panel_img_url ) ) {
        $panels_bg = $panel_img_url['url'];
    }
    ?>
    <section class="section" id="section2" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.8631827731092436) 0%, rgba(40,40,40,0.11528361344537819) 25%) ,url(<?php echo $panels_bg;?>">
        <div class="overall-section">
            <div class="container-fluid">
                <div class="section-subTitle wow fadeInDown">
                    <h1 class="text-center"><?php the_field( 'panels_title' ); ?></h1>
                </div>
                <div class="overall-contents panels-contests">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle secondary-color">
                                    <?php 
                                    $panels_left_side = get_field('panels_left_side');  
                                    echo $panels_left_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                            <?php
                                            if(is_array($panels_left_side['feature_list']) && count($panels_left_side['feature_list'])>0){
                                            foreach($panels_left_side['feature_list'] as $row )
                                            { 
                                            ?>
                                            <li>
                                                <a><?php echo $row['heading'];?></a>
                                                <p><?php echo $row['detail'];?></p>
                                            </li>
                                            <?php
                                            }}
                                            ?>          
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle">
                                    <?php 
                                    $panels_mid_side = get_field('panels_mid_side');  
                                    echo $panels_mid_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                        <?php
                                        if(is_array($panels_mid_side['feature_list']) && count($panels_mid_side['feature_list'])>0){
                                        foreach($panels_mid_side['feature_list'] as $row )
                                        { 
                                        ?>
                                        <li>
                                            <a><?php echo $row['heading'];?></a>
                                            <p><?php echo $row['detail'];?></p>
                                        </li>
                                        <?php
                                        }}
                                        ?>       
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle">
                                    <?php 
                                    $panels_right_side = get_field('panels_right_side');  
                                    echo $panels_right_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                        <?php
                                        if(is_array($panels_right_side['feature_list']) && count($panels_right_side['feature_list'])>0){
                                        foreach($panels_right_side['feature_list'] as $row )
                                        { 
                                        ?>
                                        <li>
                                            <a><?php echo $row['heading'];?></a>
                                            <p><?php echo $row['detail'];?></p>
                                        </li>
                                        <?php
                                        }}
                                        ?>     
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section" id="section2" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.8631827731092436) 0%, rgba(40,40,40,0.11528361344537819) 25%) ,url(<?php echo get_template_directory_uri();?>/assets/images/smarters-home3.jpg">
        <div class="overall-section">
            <div class="container-fluid">
                <div class="section-subTitle wow fadeInDown">
                    <h1 class="text-center"><?php the_field( 'block_title' ); ?></h1>
                </div>
                <div class="overall-contents panels-contests">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle secondary-color">
                                    <?php 
                                    $battery_left_side = get_field('battery_left_side');  
                                    echo $battery_left_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                            <?php
                                            if(is_array($battery_left_side['feature_list']) && count($battery_left_side['feature_list'])>0){
                                            foreach($battery_left_side['feature_list'] as $row )
                                            { 
                                            ?>
                                            <li>
                                                <a><?php echo $row['heading'];?></a>
                                                <p><?php echo $row['detail'];?></p>
                                            </li>
                                            <?php
                                            }}
                                            ?>        
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle">
                                    <?php 
                                    $battery_mid_side = get_field('battery_mid_side');  
                                    echo $battery_mid_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                            <?php
                                            if(is_array($battery_mid_side['feature_list']) && count($battery_mid_side['feature_list'])>0){
                                            foreach($battery_mid_side['feature_list'] as $row )
                                            { 
                                            ?>
                                            <li>
                                                <a><?php echo $row['heading'];?></a>
                                                <p><?php echo $row['detail'];?></p>
                                            </li>
                                            <?php
                                            }}
                                            ?>
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp fadeupanimation">
                            <div class="overall-card">
                                <div class="ov-cardTitle">
                                    <?php 
                                    $battery_right_side = get_field('battery_right_side');  
                                    echo $battery_right_side['heading']; ?>
                                </div>
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion">
                                            <?php
                                            if(is_array($battery_right_side['feature_list']) && count($battery_right_side['feature_list'])>0){
                                            foreach($battery_right_side['feature_list'] as $row )
                                            { 
                                            ?>
                                            <li>
                                                <a><?php echo $row['heading'];?></a>
                                                <p><?php echo $row['detail'];?></p>
                                            </li>
                                            <?php
                                            }}
                                            ?>
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section askQuestion-section" id="section3">
        <div class="overall-section">
            <div class="container-fluid">
                <div class="section-title wow fadeInDown">
                    <div class="main-title text-center">
                        <h2><?php the_field( 'faq_block_title' ); ?></h2>
                    </div>
                    <div class="section-paragraph mx-w830 text-center margin-center mt-20"><?php the_field( 'faq_sub_heading' ); ?></div>
                </div>
                <div class="overall-contents ask-question">
                    <div class="row">
                        <div class="col-md-6  wow fadeInLeft ">
                            <div class="overall-card">
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion ag-accordion minus-icon">
                                        <?php
                                        $counter_faq = 1;
                                        if ( have_rows( 'question_answers' ) ) :
                                        while ( have_rows( 'question_answers' ) ) :
                                        the_row();
                                        if($counter_faq % 2 == 0){ }
                                        else
                                        {
                                        ?>    
                                        <li>
                                            <a><?php the_sub_field( 'question' ); ?></a>
                                            <p><?php the_sub_field( 'answer' ); ?></p>
                                        </li>
                                        <?php
                                        
                                        }
                                        $counter_faq++;
                                        endwhile;
                                        endif;
                                        ?>                                        
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  wow fadeInRight">
                            <div class="overall-card">
                                <div class="accodion-contents">
                                    <!-- Contenedor -->
                                    <ul class="accordion ag-accordion minus-icon">
                                    <?php
                                        $new_faq = 1;
                                        if ( have_rows( 'question_answers' ) ) :
                                        while ( have_rows( 'question_answers' ) ) :
                                        the_row();
                                        if($new_faq % 2 != 0){ }
                                        else
                                        {
                                        ?>    
                                        <li>
                                            <a><?php the_sub_field( 'question' ); ?></a>
                                            <p><?php the_sub_field( 'answer' ); ?></p>
                                        </li>
                                        <?php                                        
                                        }
                                        $new_faq++;
                                        endwhile;
                                        endif;
                                        ?>   
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
