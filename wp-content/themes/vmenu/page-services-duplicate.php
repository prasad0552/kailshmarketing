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

        <!--====| Banner Area Start |====-->
        <section class="banner_area">
            <div class="container">
                <div class="row">
					<div class="contact_banner">
						<h2>Services</h2>
						<h4>explore our services</h4>
					</div>
                </div>
            </div>
        </section>
        <!--====| Banner Area End |====-->
			
		<!--====| Service area start |====-->
		<section class="contact_area">
			<!--Service Provide-->
			<div class="container">
				<div class="row">
					<div class="serv_provied">
						<h2>services we provide</h2>
						<div class="all_provied">
							<div class="col-md-4 col-sm-6 single_serv">
								<div class="serv_top">
									<i class="pe-7s-rocket"></i>
								</div>
								<div class="sev_ct">
									<h4>pure modern design</h4>
									<p>Today still wanted by the government they survive as soldiers of fortune. Now the  don't move to just one drum. </p>
									<h5><a href="#">read more</a></h5>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 single_serv">
								<div class="serv_top">
									<i class="pe-7s-monitor"></i>
								</div>
								<div class="sev_ct">
									<h4>100% responsive template</h4>
									<p>Today still wanted by the government they survive as soldiers of fortune. Now the  don't move to just one drum. </p>
									<h5><a href="#">read more</a></h5>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 single_serv">
								<div class="serv_top">
									<i class="pe-7s-refresh"></i>
								</div>
								<div class="sev_ct">
									<h4>free updation template</h4>
									<p>Today still wanted by the government they survive as soldiers of fortune. Now the  don't move to just one drum. </p>
									<h5><a href="#">read more</a></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--Service Portfolio-->
			<div class="container">
				<div class="row">
					<div class="service_portfolio_area">
						<div class="serv_port_txt">
							<h2>portfolio</h2>
							<p>There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long. Space. The final frontier. These are the voyages of the Starship Enterprise.</p>
						</div>
						<div class="main_port_serv">
							<ul class="sportfilter">
								<li class="filter" data-filter="all">All</li>
								<li class="filter" data-filter=".sbranding"> BRANDING</li>
								<li class="filter" data-filter=".swebsite">WEBSITES</li>
								<li class="filter" data-filter=".uidesing">UI DESIGN</li>
								<li class="filter" data-filter=".mockups">MOCKUPS</li>
							</ul>
							<div id="sportfolio">
								<div class="mix sbranding mockups">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio1.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio1.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix swebsite">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio2.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio2.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix uidesing mockups">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio3.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio3.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix sbranding swebsite uidesing">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio4.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio4.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix swebsite">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio5.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio5.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix uidesing sbranding mockups">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio6.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio6.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix sbranding mockups">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio7.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio7.jp' ?>g"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="mix swebsite uidesing">
									<div class="sport">
										<div class="featured_photo">
                                            <img src="<?= get_template_directory_uri() . '/img/portfolio8.jpg' ?>" alt="">
                                            <div class="portfolio_caption">
                                                <div class="buttons">  
                                                    <a class="lightbox" href="<?= get_template_directory_uri() . '/img/portfolio8.jpg' ?>"><i class="fa fa-search"></i></a>
                                                    <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
						<div class="view_more_spo">
							<h2><a href="#">view more works</a></h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====| Service area End |====-->
		
		<!--====| Clean Design area Start |====-->
		<section class="clean_degn_area">
			<div class="container clean_design_area">
				<div class="row">
					<div class="col-md-6">
						<div class="cleandesing_img">
							<img src="<?= get_template_directory_uri() . '/img/serv_banner.png' ?>" alt="clean desing" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="clean_design_text">
							<h3>clean, modern and professional psd</h3>
							<p>So lets make the most of this beautiful day. Since we're together Come and play. Everything's A-OK. Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street. </p>
							<p>Mister we could use a man like Herbert Hoover again. And we know Flipper lives in a world full of wonder flying there-under under the sea prayer.</p>
							<a href="#">buy now</a>
						</div>
					</div>
				</div>		
			</div>
		</section>
		<!--====| Clean Design area End |====-->
		
		<!--====| 100% Responsive Design area Start |====-->
		<section class="responsive_de">
			<div class="container ourcreatfe">
				<div class="grt_featue">
				<div class="row">
					<div class="col-md-12">
						<div class="sfea">
							<h2>our great features</h2>
						</div>						
					</div>
					<div class="col-md-12">
						<div >
							<ul class="serv_featured">
								<li class="single_servfeatured"><p><i class="pe-7s-help2"></i></p></li>
								<li class="single_servfeatured"><p><i class="pe-7s-monitor"></i></p></li>
								<li class="single_servfeatured"><p><i class="pe-7s-science"></i></p></li>
								<li class="single_servfeatured"><p><i class="pe-7s-anchor"></i></p></li>
								<li class="single_servfeatured"><p><i class="pe-7s-config"></i></p></li>
								<li class="single_servfeatured"><p><i class="pe-7s-cup"></i></p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<div class="responsive_serv">
							<h3>100% Responsive template</h3>
							<p>The Love Boat soon will be making another run. The Love Boat promises something for<br> everyone. Come and listen to a story about a man named Jed </p>
						</div>
					</div>
				</div>	
				</div>				
			</div>
		</section>
		<!--====| 100% Responsive Design area End |====-->
		
		
		<!--====| Service Priceing table area Start |====-->
		<section class="our_pricing_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>our pricing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing_table clearfix">
                        <div class="col-sm-4 fix_p">
                            <div class="single_pricing_table">
                                <div class="price_title">
                                    <h2>Basic</h2>
                                </div>
                                <div class="price_content">
                                    <h1><span>$</span>50.00</h1>
                                    <h4>12 Months</h4>
                                    <ul>
                                        <li>Responsive Design</li>
                                        <li>Modern Layout</li>
                                        <li>Unique Elements</li>
                                        <li>Stunning Portfolio Style</li>
                                        <li>Best Features</li>
                                        <li>Free Updates</li>
                                    </ul>
                                    <a class="rm_btn" href="#">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 fix_p">
                            <div class="single_pricing_table special">
                                <div class="price_title">
                                    <h2>business</h2>
                                </div>
                                <div class="price_content">
                                    <h1><span>$</span>100.00</h1>
                                    <h4>12 Months</h4>
                                    <ul>
                                        <li>Responsive Design</li>
                                        <li>Modern Layout</li>
                                        <li>Unique Elements</li>
                                        <li>Stunning Portfolio Style</li>
                                        <li>Best Features</li>
                                        <li>Free Updates</li>
                                    </ul>
                                    <a class="rm_btn" href="#">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 fix_p">
                            <div class="single_pricing_table">
                                <div class="price_title">
                                    <h2>professional</h2>
                                </div>
                                <div class="price_content">
                                    <h1><span>$</span>150.00</h1>
                                    <h4>12 Months</h4>
                                    <ul>
                                        <li>Responsive Design</li>
                                        <li>Modern Layout</li>
                                        <li>Unique Elements</li>
                                        <li>Stunning Portfolio Style</li>
                                        <li>Best Features</li>
                                        <li>Free Updates</li>
                                    </ul>
                                    <a class="rm_btn" href="#">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!--====| Service Priceing table area End |====-->			
<?php get_footer(); ?>
