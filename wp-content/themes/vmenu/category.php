<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
        
        <?php while ( have_posts() ) : the_post();

			// Include the page content template.
			// get_template_part( 'template-parts/content', 'page-about-us' );

			// If comments are open or we have at least one comment, load up the comment template.
			/* if ( comments_open() || get_comments_number() ) {
				comments_template();
			} */ ?>
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
            
            <!--<section class="about_us_area">
                <div class="container  section-padding">
                <?php /*
                	the_content();
                
                	wp_link_pages( array(
                		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
                		'after'       => '</div>',
                		'link_before' => '<span>',
                		'link_after'  => '</span>',
                		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
                		'separator'   => '<span class="screen-reader-text">, </span>',
                	) );
            	 */ ?>
                </div>
             </section>  -->              
            <?php
			// End of the loop.
		endwhile;
        ?>
        
        <!--<section class="portfolio_area">
			<div class="container">
				<div class="row ctcontent">
		          <?php /* echo do_shortcode("[huge_it_portfolio id='1']"); */ ?>
                </div>
            </div>
        </section>-->
		<!--====| Portfolio area start |====-->
        <?php 
                        $terms = get_terms( 'portfolio_category', 
                            array( 'hide_empty' => false,
                                   'order_by' => 'term_id')
                        );                             
        ?>
		<section class="portfolio_area">
			<div class="container">
				<div class="row ctcontent">
				<div class="col-md-12">
					<div class="all_portfolio">
						<ul class="porfolio_filter">                            
                        <?php foreach ($terms as $term) { ?>
                                <li class="filter" data-filter=".<?= $term->slug ?>"><?= $term->name ?></li>
                            <?php } ?>	
                            <li class="filter" data-filter="all">All</li>						
						</ul>
						
						<div id="portfolio">
                            <?php 
                                query_posts(array( 
                                    'post_type' => 'portfolio',
                                    'showposts' => 20 
                                ));  
                            ?>
                            <?php while (have_posts()) : the_post(); ?>                            
                            <?php   $categories = get_the_terms( $post->ID, 'portfolio_category' );                                   
                                    $categorySlug = $categories[0]->slug;
                            ?>
                            <div class="mix <?= $categorySlug ?>" data-myorder="1">
								<div class="ports">
									<div class="featured_photo">
                                        <?php // the_post_thumbnail( array( 350, 278 ) ); // Other resolutions (height, width)([350,278]); ?>
                                        <img src="<?= the_post_thumbnail_url( 'category-thumb' ) ?>" width="300" height="300"/>
                                        <div class="portfolio_caption">
                                            <div class="buttons">  
                                                <a class="lightbox" href="<?php the_post_thumbnail_url( 'full' ); ?>">
                                                <i class="fa fa-search"></i></a>
                                                <a href="<?php the_permalink() ?>"><i class="fa fa-file-o"></i></a>
                                            </div>
                                        </div>
                                    </div>                                    
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<h4><?php echo substr(get_post_meta($post->ID, 'Subtitle', true), 0, 30); ?></h4>
								</div>
							</div>
                            <?php endwhile;?>							
						</div>	
					</div>
					<!--<div class="pagination">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next <i class="fa fa-angle-double-right"></i>
							</a></li>
						</ul>
					</div>-->
				</div>
				</div>
			</div>
		</section>
		<!--====| Portfolio area End |====-->
        <script type="text/javascript">            
             jQuery(function($){
                $( window  ).load(function() {
                    $("ul").find("[data-filter='.abrasive-grains']").click();
                }); 
             }); 
        </script>		        
<?php get_footer(); ?>