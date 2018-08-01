<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>--><!-- .entry-header -->

        <!--====| Banner Area Start |====-->
        <section class="banner_area">
            <div class="container">
                <div class="row">
					<div class="contact_banner">
						<?php the_title( '<h2>', '</h2>' ); ?>
						<h4><?php echo get_post_meta($post->ID, 'Subtitle', true); ?></h4>
					</div>
                </div>
            </div>
        </section>
        <!--====| Banner Area End |====-->
		
        <!--====| Portfolio Details area start |====-->
		<section class="portfolio_area">
			<div class="container">
				<div class="row pjcontent">
                            <div class="portfolio_sort">
        						<ul>        							
        							<li><a href="/kailash-marketing/enquiry"><i class="fa fa-th"></i> Contact Us</a></li>        							
        						</ul>
        					</div>
					<div class="col-md-12">						
                    	<div class="prodetail_content">                            
							<div class="pro_txt_top">
                                <?php the_post_thumbnail(array(500,500), array( 'class' => 'alignleft' ) ); ?>                                                        
								<!--<h4>project description</h4>-->
								<?php the_content(); ?>		
							</div>					
						</div>													
					</div>										
				</div>
			</div>
		</section>        	
        
		<!--====| Portfolio Details area End |====-->
		<section class="about_us_area">
	<!--<div class="entry-content">-->
		<?php			
			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
        </section>
	<!--</div>--><!-- .entry-content -->

	<section class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</section>
    <!-- .entry-footer -->
<!--</article>--><!-- #post-## -->
