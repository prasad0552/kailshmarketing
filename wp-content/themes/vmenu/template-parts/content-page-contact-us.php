<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

        <!--====| Banner Area Start |====-->
        <section class="banner_area">
            <div class="container">
                <div class="row">
					<div class="contact_banner">
                        <?php the_title( '<h2>', '</h2>' ); ?>						
						<h4><?php echo get_post_meta($post->ID, 'Sutitle', true); ?></h4>
					</div>
                </div>
            </div>
        </section>
        <!--====| Banner Area End |====-->
				 <!--====| Map Area Start |====-->
		<section class="map_area">
			<div class="container">
				<div class="row">
					<div class="google_map">
						<div id="map_area"></div>
					</div>
				</div>
			</div>
		</section>
		<!--====| Map Area End |====-->
		

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
    
        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 18,
                scrollwheel: false,
                center: new google.maps.LatLng(19.0181391,73.0385481)
              };

              var map = new google.maps.Map(document.getElementById('map_area'),
                  mapOptions);

              var contentString = '<p>4B, H & G House, Plot No. 12, Sector 11,' + '<br/>' +
                                       'Jawaharlal Nehru Marg, CBD Belapur, ' + '<br/>' +
                                       'Navi Mumbai - 400 614.' + '<br/>' +
                                       'Maharashtra (India)</p>';
        

              var infowindow = new google.maps.InfoWindow({
               content: contentString,
               maxWidth: 250
              });
    
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                //icon: "<?= get_template_directory_uri() . '/img/map-marker.png' ?>",
                map: map,
                title: 'Kalyan Marketing Associates'
              });
              
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
              
              infowindow.open(map,marker);
            }            
            
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>