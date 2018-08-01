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

        <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page-about-us' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
        
        <!--====| Banner Area Start |====-->
        <!--<section class="banner_area">
            <div class="container">
                <div class="row">
					<div class="contact_banner">
						<h2>About us</h2>
						<h4>a little info about our agency</h4>
					</div>
                </div>
            </div>
        </section>-->
        <!--====| Banner Area End |====-->
		
        <!--====| About Us Area Start |====-->
        <!--<section class="about_us_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>who we are</h2>
                            <p>They'll have to make the best of things its an uphill climb. Till the one day when the lady met this fellow and they knew it was much more than getting rough .</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single_about">
                            <div class="about_icon">
                                <i class="pe-7s-light"></i>
                            </div>
                            <h3><a href="#">Mission</a></h3>
                            <p>To offer from overseas manufacturers to the Indian market high purity, high quality, high performance, bench mark raw materials, natural and synthetic, not available in India and even if available not of the right quality.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_about">
                            <div class="about_icon">
                                <i class="pe-7s-magic-wand"></i>
                            </div>
                            <h3><a href="#">Representation</a></h3>
                            <p>Kailash Marketing Associates is professionally managed and represent overseas Manufacturers/Principals from Brazil, China, Croatia, Czech Republic, France, Germany, Israel, Mexico, Peru, Slovakia, USA offering raw materials used in various industries. </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_about">
                            <div class="about_icon">
                                <i class="pe-7s-flag"></i>
                            </div>
                            <h3><a href="#">Association</a></h3>
                            <p> All India Glass Manufactuers Federation </p>
                            <p> All India Pottery  Manufacturers Association </p>
                            <p> Indian Ceramic Society </p>
                            <p> Indian Merchants Chamber</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about_us_bottom_photo">
                        <img src="<?= get_template_directory_uri() . '/img/baoutus2.png' ?>" alt="" class="wow fadeInUp">
                    </div>
                </div>
            </div>
        </section>-->
        <!--====| About Us Area End |====-->
		
		<!--====| Work Hire Area Start |====-->	
		<!--<section class="work_hire_area">
			<div class="container">
				<div class="workhire">
					<div class="row">
						<div class="col-sm-8">
							<div class="hire_txt">
								<h2>we are always here to work for you</h2>
								<p>Since we're together Come and play. Everything's A-OK. Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street. </p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="get_btn">
								<a href="#">get started now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		<!--====| Work Hire Area End |====-->
		 
		<!--====| Accordion Area Start |====-->	 
		<!--<section class="about_accordion">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="ab_accor_img">
							<img src="<?= get_template_directory_uri() . '/img/about_accordian.jpg' ?>" alt="Accordian" />
						</div>
					</div>
					<div class="col-md-6">
					<div class="panel-group" id="abaccordion">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#abaccordion" href="#collapseOne">
								Clean And Professional Design
								<i class="indicator glyphicon glyphicon-minus"></i>
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
						  <div class="panel-body">
							Today still wanted by the government they survive as soldiers <br> of fortune. And we know Flipper lives in a world full of wonder<br> flying there-under under the sea.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#abaccordion" href="#collapseTwo">
							   100% responsive template
							   <i class="indicator glyphicon glyphicon-plus"></i>
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
						  <div class="panel-body">
							Today still wanted by the government they survive as soldiers <br> of fortune. And we know Flipper lives in a world full of wonder<br> flying there-under under the sea.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#abaccordion" href="#collapseThree">
							  theme with unique elements
							  <i class="indicator glyphicon glyphicon-plus"></i>
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
						  <div class="panel-body">
							Today still wanted by the government they survive as soldiers <br> of fortune. And we know Flipper lives in a world full of wonder<br> flying there-under under the sea.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#abaccordion" href="#collapseFour">
							  modern psd for your business
							  <i class="indicator glyphicon glyphicon-plus"></i>
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
						  <div class="panel-body">
							Today still wanted by the government they survive as soldiers <br> of fortune. And we know Flipper lives in a world full of wonder<br> flying there-under under the sea.
						  </div>
						</div>
					  </div>
					</div>
					</div>
				</div>
			</div>
		</section>-->	
		<!--====| Accordion Area End |====-->	

		<!--====| Our Professional skill area Start |====-->
		<!--<section class="our_prfskill_area">
            <div class="container">
                <div class="section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section_heading">
                                <h2>our professional skills</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="all_skill">
                            <div class="col-md-3 col-sm-6">
                                <div class="single_skill">
                                    <input type="text" class="knob" value="0" data-rel="75" data-width="175" data-height="175" data-bgcolor="#2a2a2a" data-fgcolor="#00aeef" data-thickness=".05" data-readonly="true" data-angleOffset="100" disabled>
                                    <h3>Wordpress</h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_skill">
                                    <input type="text" class="knob" value="0" data-rel="80" data-width="175" data-height="175" data-bgcolor="#2a2a2a" data-fgcolor="#00aeef" data-thickness=".05" data-readonly="true" data-angleOffset="100" disabled>
                                    <h3>html & css</h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_skill">
                                    <input type="text" class="knob" value="0" data-rel="75" data-width="175" data-height="175" data-bgcolor="#2a2a2a" data-fgcolor="#00aeef" data-thickness=".05" data-readonly="true" data-angleOffset="100" disabled>
                                    <h3>photoshop</h3>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <div class="single_skill">
                                <input type="text" class="knob" value="0" data-rel="80" data-width="175" data-height="175" data-bgcolor="#2a2a2a" data-fgcolor="#00aeef" data-thickness=".05" data-readonly="true" data-angleOffset="100" disabled>
                                <h3>illustrater</h3>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
		<!--====| Our Professional skill area End |====-->	

        <!--====| Our Great Team Area Start |====-->
        <!--<section class="our_great_team_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>our great team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="our_great_team">
                        <div class="col-md-3 col-sm-4">
                            <div class="single_team_member">
                                <div class="team_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/our_great_team_photo_1.jpg' ?>" alt="">
                                    <div class="team_caption">
                                        <p>We know Flipper lives in a world full of wonder flying there-under under the sea.</p>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="">mike Bradshaw</a></h3>
                                <p>Ceo / founder</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single_team_member">
                                <div class="team_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/our_great_team_photo_2.jpg' ?>" alt="">
                                    <div class="team_caption">
                                        <p>We know Flipper lives in a world full of wonder flying there-under under the sea.</p>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="">micheal waugh</a></h3>
                                <p>co - founder</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single_team_member">
                                <div class="team_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/our_great_team_photo_3.jpg' ?>" alt="">
                                    <div class="team_caption">
                                        <p>We know Flipper lives in a world full of wonder flying there-under under the sea.</p>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="">hendry richard</a></h3>
                                <p>Designer</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single_team_member">
                                <div class="team_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/our_great_team_photo_4.jpg' ?>" alt="">
                                    <div class="team_caption">
                                        <p>We know Flipper lives in a world full of wonder flying there-under under the sea.</p>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="">george clooney</a></h3>
                                <p>Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--====| Our Great Team Area End |====-->
        
        <!--====| testimonial area start |====-->
        <!--<section class="testimonial_area">
            <div class="container">
                <div class="section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_slider">
                                <div id="testimonial_slider" class="carousel slide" data-ride="carousel">-->
                                    <!-- Wrapper for slides -->
                                    <!--<div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <p>There are design companies, and then there are user experience, design, consulting, interface design, brilliant, and professional. UOU Apps, is by far one of the worlds best known brands.</p>
                                        </div>
                                        <div class="item">
                                            <p>There are design companies, and then there are user experience, design, consulting, interface design, brilliant, and professional. UOU Apps, is by far one of the worlds best known brands.</p>
                                        </div>
                                        <div class="item">
                                            <p>There are design companies, and then there are user experience, design, consulting, interface design, brilliant, and professional. UOU Apps, is by far one of the worlds best known brands.</p>
                                        </div>
                                    </div>-->
                                    
                                    <!-- Indicators -->
                                    <!--<ol class="carousel-indicators">
                                        <li data-target="#testimonial_slider" data-slide-to="0" class="col-sm-4 active">
                                            <div class="col-md-5">
                                                <div class="trigger_img">
                                                    <img src="<?= get_template_directory_uri() . '/img/testimonial_caro_thumb_1.jpg' ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="trigger_txt col-md-7 fix_p_r">
                                                <h3>John HenDrick</h3>
                                                <h4>CEO, Google Inc</h4>
                                            </div>
                                        </li>
                                        <li data-target="#testimonial_slider" data-slide-to="1" class="col-sm-4">
                                            <div class="col-md-5">
                                                <div class="trigger_img">
                                                    <img src="<?= get_template_directory_uri() . '/img/testimonial_caro_thumb_2.jpg' ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="trigger_txt col-md-7 fix_p_r">
                                                <h3>charles will</h3>
                                                <h4>CEO, Studio 09</h4>
                                            </div>
                                        </li>
                                        <li data-target="#testimonial_slider" data-slide-to="2" class="col-sm-4">
                                            <div class="col-md-5">
                                                <div class="trigger_img">
                                                    <img src="<?= get_template_directory_uri() . '/img/testimonial_caro_thumb_3.jpg' ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="trigger_txt col-md-7 fix_p_r">
                                                <h3>kimerley bob</h3>
                                                <h4>CEO, Tucker Studio</h4>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--====| testimonial area end |====-->	
		
        <!--====| Featured Client Area Start |====-->
        <!--<section class="featured_client_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>our trusted partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="featured_client_carousel">
                        <div class="single_featured_client">
                            <a href="#" target="_blank"><img src="<?= get_template_directory_uri() . '/img/featured_client_1.jpg' ?>" alt=""></a>
                        </div>
                        <div class="single_featured_client">
                            <a href="#" target="_blank"><img src="<?= get_template_directory_uri() . '/img/featured_client_2.jpg' ?>" alt=""></a>
                        </div>
                        <div class="single_featured_client">
                            <a href="#" target="_blank"><img src="<?= get_template_directory_uri() . '/img/featured_client_3.jpg' ?>" alt=""></a>
                        </div>
                        <div class="single_featured_client">
                            <a href="#" target="_blank"><img src="<?= get_template_directory_uri() . '/img/featured_client_4.jpg' ?>" alt=""></a>
                        </div>
                        <div class="single_featured_client">
                            <a href="#" target="_blank"><img src="<?= get_template_directory_uri() . '/img/featured_client_5.jpg' ?>" alt=""></a>
                        </div>
                        <div class="single_featured_client">
                            <a href="#" target="_blank"><img src="<?= get_template_directory_uri() . '/img/featured_client_6.jpg' ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--====| Featured Client Area End |====-->
<?php get_footer(); ?>