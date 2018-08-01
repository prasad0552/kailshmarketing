<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php /* <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> */ ?>
	    <!--====| Banner Area Start |====-->
        <section class="banner_area">
            <div class="container">
                <div class="row">
                    <div class="banner_content">                        
                        <?php 
                            echo do_shortcode("[metaslider id=17]"); 
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--====| Banner Area End |====-->
        		
	<section class="contact_area">
        <div class="container section-padding">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
        </div>
	</section><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

<?php /* </article> */ ?><!-- #post-## -->
