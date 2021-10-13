<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package smarter-homes
 */

get_header();
?>
<?php
while ( have_posts() ) :
	the_post();
?>
<div class="carrier-content">
    <section class="section" id="section0" >
        <div class="title-banner singlebanner" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 100%, rgba(0,212,255,1) 100%), url(<?php echo get_template_directory_uri();?>/assets/images/banner/heading/banner1.jpg">
            <div class="container-fluid">
                <div class="heading-contents">
                    <div class="heading-title wow fadeInDown">
                        <?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
						?>						
                    </div>                    
                </div>
            </div>
        </div>
        <div class="carrier-single-contents ptb-50">
            <div class="container-fluid">
                <div class="contents-about">
                    <div class="row"> 
						<?php
							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'smarter-homes' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								)
							);

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'smarter-homes' ),
									'after'  => '</div>',
								)
							);
						?>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
	endwhile; // End of the loop.
	?>

<?php
get_footer('jobs');
