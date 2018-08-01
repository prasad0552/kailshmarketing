<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
                    <div class="banner_content">
                        <!--<div class="col-md-7">
                            <div class="banner_con_txt">
                                <h1>Leading Marketing Associates</h1>
                                <h2>from India</h2>
                                <h3>Identing & Marketing Agents</h3>
                                <a href="#" class="rm_btn">Contact now</a>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-sm">
                            <div class="banner_con_photo">
                                <img src="<?= get_template_directory_uri() . '/img/banner_mockup.png' ?>" alt="">
                            </div>
                        </div>-->
                        <?php 
                            echo do_shortcode("[metaslider id=17]"); 
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--====| Banner Area End |====-->


        <!--====| About Us Area Start |====-->
        <section class="about_us_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>About us</h2>                            
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
                        <img src="<?= get_template_directory_uri() . '/img/about_us_bottom_photo.png' ?>" alt="" class="wow fadeInUp">
                    </div>
                </div>
            </div>
        </section>
        <!--====| About Us Area End |====-->


        <!--====| Our Skill Area Start |====-->
        <!--<section class="our_skill_area">
            <div class="container">
                <div class="section-padding">
				<div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>Our Skills</h2>
                        </div>
                    </div>
				</div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="all_skill_item">
                            <div class="single_progress">
                                <h4>branding</h4>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span>60%</span>
                                    </div>
                                </div>              
                            </div>   
                            <div class="single_progress">
                                <h4>wordpress</h4>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span>80%</span>
                                    </div>
                                </div>              
                            </div>   
                            <div class="single_progress">
                                <h4>print</h4>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span>70%</span>
                                    </div>
                                </div>              
                            </div>              
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="all_skill_item">
                            <div class="single_progress">
                                <h4>web design</h4>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span>80%</span>
                                    </div>
                                </div>              
                            </div>   
                            <div class="single_progress">
                                <h4>joomla</h4>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span>70%</span>
                                    </div>
                                </div>              
                            </div>   
                            <div class="single_progress">
                                <h4>photography</h4>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span>75%</span>
                                    </div>
                                </div>              
                            </div>              
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>-->
        <!--====| Our Skill Area End |====-->


        <!--====| Featured Work Area Start |====-->
        <section class="featured_work_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>featured works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all_featured">
                        <div class="col-sm-4">
                            <div class="single_featured">
                                <div class="featured_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/featured_photo_1.jpg' ?>" alt="">
                                    <div class="portfolio_caption">
                                        <div class="buttons">  
                                            <a class="lightbox" href="<?= get_template_directory_uri() . '/img/featured_photo_1.jpg'?>"><i class="fa fa-search"></i></a>
                                            <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="project-details.html">brand of the juju</a></h3>
                                <p>Branding / Logos</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single_featured">
                                <div class="featured_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/featured_photo_2.jpg' ?>" alt="">
                                    <div class="portfolio_caption">
                                        <div class="buttons">  
                                            <a class="lightbox" href="<?= get_template_directory_uri() . '/img/featured_photo_2.jpg' ?>"><i class="fa fa-search"></i></a>
                                            <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="project-details.html">package of motica</a></h3>
                                <p>Graphic / Logos</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single_featured">
                                <div class="featured_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/featured_photo_3.jpg' ?>" alt="">
                                    <div class="portfolio_caption">
                                        <div class="buttons">  
                                            <a class="lightbox" href="<?= get_template_directory_uri() . '/img/featured_photo_3.jpg' ?>"><i class="fa fa-search"></i></a>
                                            <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="project-details.html">trendy branding</a></h3>
                                <p>Logo / Web design</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single_featured">
                                <div class="featured_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/featured_photo_4.jpg' ?>" alt="">
                                    <div class="portfolio_caption">
                                        <div class="buttons">  
                                            <a class="lightbox" href="<?= get_template_directory_uri() . '/img/featured_photo_4.jpg' ?>"><i class="fa fa-search"></i></a>
                                            <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="project-details.html">food well xpress</a></h3>
                                <p>Graphic / Logos</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single_featured">
                                <div class="featured_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/featured_photo_5.jpg' ?>" alt="">
                                    <div class="portfolio_caption">
                                        <div class="buttons">  
                                            <a class="lightbox" href="<?= get_template_directory_uri() . '/img/featured_photo_5.jpg' ?>"><i class="fa fa-search"></i></a>
                                            <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="project-details.html">product motion</a></h3>
                                <p>Graphic / Branding</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single_featured">
                                <div class="featured_photo">
                                    <img src="<?= get_template_directory_uri() . '/img/featured_photo_6.jpg' ?>" alt="">
                                    <div class="portfolio_caption">
                                        <div class="buttons">  
                                            <a class="lightbox" href="<?= get_template_directory_uri() . '/img/featured_photo_6.jpg' ?>"><i class="fa fa-search"></i></a>
                                            <a href="project-details.html"><i class="fa fa-file-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="project-details.html">custome weby</a></h3>
                                <p>Web Design / Development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====| Featured Work Area End |====-->


        <!--====| Featured Client Area Start |====-->
        <!--<section class="featured_client_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>featured clients</h2>
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


        <!--====| Services We Provide Area Start |====-->
        <!--<section class="services_we_provide_area">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading">
                            <h2>services we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all_services">
                        <div class="col-sm-2 col-xs-6">
                            <a href="#">
                                <div class="single_service">
                                    <i class="pe-7s-help2"></i>
                                    <h4>24/7 support</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <a href="#">
                                <div class="single_service">
                                    <i class="pe-7s-monitor"></i>
                                    <h4>responsive</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <a href="#">
                                <div class="single_service">
                                    <i class="pe-7s-anchor"></i>
                                    <h4>modern psd</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <a href="#">
                                <div class="single_service">
                                    <i class="pe-7s-science"></i>
                                    <h4>best features</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <a href="#">
                                <div class="single_service">
                                    <i class="pe-7s-shuffle"></i>
                                    <h4>free updates</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <a href="#">
                                <div class="single_service">
                                    <i class="pe-7s-cup"></i>
                                    <h4>awards</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="service_details">
                        <div class="single_service_details">
                            <h3>Responsive design</h3>
                            <p>Well we're movin' on up to the east side to a deluxe apartment in the sky. Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--====| Services We Provide Area End |====-->


        <!--====| More Service Area Start |====-->
        <!--<section class="more_service_area">
            <div class="container">
                <div class="section-padding">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="more_service">
                                <h2>looking for more services?</h2>
                                <p>Well the first thing you know ol' Jeds a millionaire. Kinfolk said Jed move away from there. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade .</p>
                                <a href="#" class="rm_btn">contact us</a>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="more_service_photo">
                                <img src="<?= get_template_directory_uri() . '/img/more_our_service_photo.png' ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--====| More Service Area End |====-->


        <!--====| Our Great Team Area Start |====-->
        <!--====| Our Great Team Area End |====-->


        <!--====| Testimonial Area Start |====-->
        <!--====| Testimonial Area End |====-->


        <!--====| Our Pricing Area Start |====-->        
        <!--====| Pricing Area End |====-->


        <!--====| Our Process Area Start |====-->
        <!--====| Our Process Area End |====-->


        <!--====| Latest From Our Blog Area Start |====-->
        
        <!--====| Latest From Our Blog Area End |====-->        
<?php get_footer(); ?>