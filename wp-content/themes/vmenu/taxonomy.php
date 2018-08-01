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
        <?php $taxanomy = get_queried_object(); ?>
        <!--====| Banner Area Start |====-->
            <section class="banner_area">
                <div class="container">
                    <div class="row">
        				<div class="contact_banner">
                            <h2><?= $taxanomy->name; ?></h2>						
        					<!--<h4><?= $taxanomy->description; ?></h4>-->
        				</div>
                    </div>
                </div>
            </section>
            <!--====| Banner Area End |====-->                          
		<!--====| Portfolio area start |====-->
        <?php 
                        $terms = get_terms( 
                                    'portfolio_category', 
                            array( 'hide_empty' => false,
                                   'childless' => true,
                                   'order_by' => 'term_id')
                        );                          
        ?>
		<section class="portfolio_area">
			<div class="container">
				<div class="row ctcontent">
				<div class="col-md-12">
					<div class="all_portfolio">
                        <h4><?= $taxanomy->description; ?></h4>                    
						<div id="portfolio">
                            <?php 
                                query_posts(array( 
                                    'post_type' => 'portfolio',
                                    'showposts' => 20,
                                    'tax_query' => array( 
                                        array( 
                                            'taxonomy' => 'portfolio_category', //or tag or custom taxonomy
                                            'field' => 'id', 
                                            'terms' => array($taxanomy->term_id) 
                                        ) 
                                    ) 
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
                                                <a href="<?php the_permalink() ?>" title="Whats New in <?= the_title(); ?>"><i class="fa fa-paperclip"></i></a>
                                            </div>
                                        </div>
                                    </div>                                    
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<h4><?php echo substr(get_post_meta($post->ID, 'Subtitle', true), 0, 30); ?></h4>
								</div>
							</div>
                            <?php endwhile;?>							
						</div>
                        
                        <ul class="porfolio_filter">                            
                        <?php foreach ($terms as $term) { ?>
                                <li class="filter"><a href="<?= get_category_link($term->term_id) ?>"><?= $term->name ?></a></li>
                            <?php } ?>	
                            <li class="filter"><a href="/kailash-marketing/materials">All</a></li>						
						</ul>	
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
<?php get_footer(); ?>