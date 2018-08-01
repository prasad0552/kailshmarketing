<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="single_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="date_author">
		<!--<div class="date_lt">
			<div class="date">
				<p><span>17</span><br>Jun, 2015</p>
			</div>			
		</div>-->
		<div class="authoer_info">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>		
			<!--<p><a href="#">by John Doe</a>   |  <span> 15 November, 2013</span></p>-->
			<!--<ul class="post_teg">
				<li><a href="#"><i class="fa fa-comment-o"></i> 13 Comments</a></li>
				<li><a href="#"><i class="fa fa-tag"></i>
				Graphic Design, Web Design</a></li>
			</ul>-->
		</div>
	</div>
	<div class="post_exp">
		<p><?php twentysixteen_excerpt(); ?></p>
	</div>
    
	<?php if ( 'post' === get_post_type() ) : ?>

		<footer class="entry-footer">
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
		</footer><!-- .entry-footer -->

	<?php else : ?>

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

	<?php endif; ?>
</div><!-- #post-## -->

