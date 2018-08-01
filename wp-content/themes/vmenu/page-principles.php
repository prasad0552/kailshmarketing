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
        
        <?php while (have_posts()):
    the_post();

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
                        <?php
                            if (isset($_GET['parent'])) {
                                $options['child_of'] = $_GET['parent'];
                                $taxanomy = get_term($_GET['parent'], 'portfolio_category');
                            }
                        
                            if (isset($_GET['parent']) && !empty($taxanomy)) {
                                echo "<h2>" . $taxanomy->name . "</h2>";
                            } else { ?>
                                <?php the_title('<h2>', '</h2>'); ?>						
        					<h4><?php echo get_post_meta($post->ID, 'Subtitle', true); ?></h4>
                            <?php }
                        ?>
        				</div>
                    </div>
                </div>
            </section>
            <!--====| Banner Area End |====-->                        
            <?php
    // End of the loop.
endwhile;
?>                
		<!--====| Portfolio area start |====-->
        <?php
$options = array(
    'hide_empty' => false,
    'childless' => true,
    'order_by' => 'term_id',
    'taxonomy' => 'portfolio_category');

if (isset($_GET['parent'])) {
    $options['child_of'] = $_GET['parent'];
}

$terms = get_categories($options);
?>
		<section class="portfolio_area">
			<div class="container">
				<div class="row ctcontent">
                            
				<div class="col-md-12">
					<div class="all_portfolio">	
                            <h4>
                            <?php if (isset($_GET['parent']) && !empty($taxanomy)) {
                                echo $taxanomy->description;
                            }
                            ?>
                            </h4>
						<div id="portfolio">                            
                            <?php foreach ($terms as $term) { ?>                            
                            <?php
                                $categorySlug = $term->slug;
                            ?>
                            <div class="mix <?= $categorySlug ?>" data-myorder="1">
								<div class="ports">
									<div class="featured_photo">                                        
                                        <?php if (function_exists('z_taxonomy_image_url')) { ?> 
                                            <img src="<?= z_taxonomy_image_url($term->
term_id); ?>" width="300" height="300"/>
                                        <?php } ?>
                                            
                                        <div class="portfolio_caption">
                                            <div class="buttons">  
                                                <a class="lightbox" href="<?= z_taxonomy_image_url($term->
term_id); ?>">
                                                <i class="fa fa-search"></i></a>
                                                <a href="<?= get_category_link($term->
term_id) ?>"><i class="fa fa-file-o"></i></a>
                                                <a href="<?php get_category_link($term->
term_id) ?>" title="Whats New in <?= $term->
name; ?>"><i class="fa fa-paperclip"></i></a>
                                            </div>
                                        </div>
                                    </div>                                    
									<h3><a href="<?= get_category_link($term->term_id) ?>"><?php echo $term->
name; ?></a></h3>
									<!--<h4><?php // echo substr($term->description, 0, 30); ?></h4>-->
								</div>
							</div>
                            <?php } ?>							
						</div>	
					</div>
				</div>
				</div>
			</div>
		</section>
		<!--====| Portfolio area End |====-->        		        
<?php get_footer(); ?>