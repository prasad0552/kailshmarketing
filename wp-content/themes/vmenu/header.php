<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <!-- Google font -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/fonts/Lato-Medium.css' ?>">
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/fonts/Lato-MediumItalic.css' ?>">
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/fonts/Lato-Semibold.css' ?>">

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.min.css' ?>">

        <!-- Slicknav css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/slicknav.min.css' ?>">

        <!-- Font awesome css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/font-awesome.min.css' ?>">

        <!-- Stroke Font Icon css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/pe-icon-7-stroke.css' ?>">

        <!-- Animate css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/animate.css' ?>">

        <!-- VenoBox css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/venobox.css' ?>">

        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/owl.carousel.css' ?>">

        <!-- Custom css -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/style.css' ?>">
        <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/responsive.css' ?>">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" href="<?= get_template_directory_uri() . '/img/apple-touch-icon-precomposed.png' ?>">
        <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri() . '/img/favicon.png' ?>"/>  

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- Linkon Miyan from rexord.com -->
        <!--[if lt IE 9]>
          <script src="<?= get_template_directory_uri() . '/js/html5shiv.min.js' ?>"></script>
          <script src="<?= get_template_directory_uri() . '/js/respond.min.js' ?>"></script>
        <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<!--====| Preloader Area Start |====-->
        <div id="preloader">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        </div>
        <!--====| Preloader Area End |====-->


        <!--====| Header Area Start |====-->
        <header class="header_area">
           
            <!--====| Header Top Start |====-->
            <div class="header_top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="header_top_social_logo">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="header_top_phone_no">
                                <a href="tel:(91)-(22)-2756 1887">+(91)-(22)-2756 1887</a>
                            </div>
                            <div class="header_top_title">
                                <span>Kailash Marketing Associates</span>
                            </div>                                                   
                        </div>
                        <div class="col-sm-6">
                            <div class="header_top_search">
                                <!--<form action="#">
                                    <input type="text" placeholder="Search ...">
                                    <input type="submit" value="">
                                </form>-->
                                <?php get_search_form(true); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====| Header Top End |====-->
            
            <!--====| Main Header Start |====-->
            <div class="main_header">
                <div class="site_logo">
                    <a href="/kailash-marketing">
                        <img src="<?= get_template_directory_uri() . '/img/logo.png' ?>" alt="Site Logo">                        
                        <span class="logo_txt"><img class="logo_txt" width="180px" src="<?= get_template_directory_uri() . '/img/klogo.jpg' ?>" alt="Site Logo"><!--<span>K</span>ailash--></span>                                             
                        <!--<span class="logo_txt_sub">Marketing Associates</span>-->                                                
                    </a>
                </div>
                <div class="main_menu_area">
                    <nav class="main_menu">
                        <ul>
                            <li class="active">
                                <a href="/kailash-marketing"><i class="pe-7s-home"></i><span>Home</span></a>
                            </li>                              
                             <li>
                                <a href="/kailash-marketing/industries-we-serve"><i class="pe-7s-rocket"></i><span>Industries We Serve</span></a>
                            </li> 
                            <li>
                                <a href="/kailash-marketing/materials-we-offer"><i class="pe-7s-plugin"></i><span>Materials We Offer

</span></a>
                            </li>
                            <li>
                                <a href="/kailash-marketing/principles"><i class="pe-7s-portfolio"></i><span>Principles</span></a>
                            </li>                                                        
                            <li>
                                <a href="/kailash-marketing/memberships"><i class="pe-7s-id"></i><span>Memberships</span></a>
                            </li>                                
                            <li>
                                <a href="/kailash-marketing/awards"><i class="pe-7s-star"></i><span>Awards</span></a>
                            </li>
                            <li>
                                <a href="/kailash-marketing/contact-us"><i class="pe-7s-call"></i><span>Contact us</span></a>
                            </li>
                            <li>
                                <a href="/kailash-marketing/enquiry"><i class="pe-7s-notebook"></i><span>Enquire</span></a>
                            </li>                                                                                   
                        </ul>
                                <?php
									/* wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) ); */
								?>
                    </nav>
                </div>
            </div>
            <!--====| Main Header End |====-->
            
        </header>
        <!--====| Header Area End |====-->