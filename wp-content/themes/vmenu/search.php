<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
            <!--====| Banner Area Start |====-->
        <section class="banner_area">
            <div class="container">
                <div class="row">
					<div class="contact_banner">
                        <h2><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
					</div>
                </div>
            </div>
        </section>
        <!--====| Banner Area End |====-->
        
   <!--====| Blog Area Start |====-->
		<section class="blog_area">
			<div class="container blog_post_page">
				<div class="col-md-9">
					<div class="all_blog_posts">
            			<?php
            			// Start the loop.
            			while ( have_posts() ) : the_post();
            
            				/**
            				 * Run the loop for the search to output the results.
            				 * If you want to overload this in a child theme then include a file
            				 * called content-search.php and that will be used instead.
            				 */
            				get_template_part( 'template-parts/content', 'search' );
            
            			// End the loop.
            			endwhile;
                        ?>
                   </div>
                    <div class="pagination">
                    <?php
                		// Previous/next page navigation.
                		the_posts_pagination( array(
                			'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                			'next_text'          => __( 'Next page', 'twentysixteen' ),
                			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
                		) );
                
                	?>
                    </div>
        </div>
				<div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2">
					<div class="blog_sidebar">
						<div class="blog_src">
							<form action="index.html">
								<input type="text" class="src_field" placeholder="Search..." />
								<input type="submit"  class="src_btn" value="S" />
							</form>
						</div>
						<div class="category_part">
                        <?php
                            $categories = get_categories( array(
                                'orderby' => 'name',
                                'order'   => 'ASC',
                                'taxonomy' => 'portfolio_category'
                            ) );
                             
                            ?> 
							<h2>categories</h2>
							<ul>
                            <?php 
                                foreach( $categories as $category ) {
                                    $category_link = sprintf( 
                                        '<a href="%1$s" alt="%2$s"><i class="fa fa-folder-open"></i> %3$s <span>%4$s</span</a>',
                                        esc_url( get_category_link( $category->term_id ) ),
                                        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                                        esc_html( $category->name ),
                                        esc_html( $category->count )
                                    );
                                     
                                    echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
                                }                            
                            ?>
                            </ul>                            
						</div>																		
					</div>
				</div>
			</div>
		</section>
		<!--====| Blog Area End |====-->
		
        // If no content, include the "No posts found" template.
		<?php else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        
<?php get_footer(); ?>
