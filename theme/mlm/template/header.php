<?php


$BeforeMainContent.='<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title> Real Estate - Responsive HTML5 Template </title>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="'.$theme_path.'/images/fav-icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="'.$theme_path.'/images/fav-icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="'.$theme_path.'/images/fav-icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="'.$theme_path.'/images/fav-icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="'.$theme_path.'/images/fav-icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="'.$theme_path.'/images/fav-icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="'.$theme_path.'/images/fav-icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="'.$theme_path.'/images/fav-icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="'.$theme_path.'/images/fav-icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="'.$theme_path.'/images/fav-icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="'.$theme_path.'/images/fav-icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="'.$theme_path.'/images/fav-icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="'.$theme_path.'/images/fav-icon/favicon-16x16.png">



		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="'.$theme_path.'/css/custom/style.css">
		<!-- Color css -->
		<link rel="stylesheet" id="jssDefault" href="'.$theme_path.'/css/custom/theme-default.css">
		<link rel="stylesheet" type="text/css" href="'.$theme_path.'/css/responsive/responsive.css">
		
		<link rel="stylesheet" type="text/css" href="'.$theme_path.'/css/user_panel.css">
		<link rel="stylesheet" type="text/css" href="'.$theme_path.'/css/custom.css">
		
		<link rel="stylesheet" type="text/css" href="'.$theme_path.'/css/ik_chat_front.css">
		
		<!--<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">-->

		<!-- Fixing Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="'.$theme_path.'/js/html5shiv.js"></script>
		<![endif]-->


	</head>
	<body class="home">

		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="full-width-search-box">
			<section class="container">
				<div class="find_home">
					<div class="table_content">
						<h3 class="table_title">
							<i class="fa fa-home"></i>
							Find Your Dream Home
						</h3>
						
						<img class="close-full-width-search" src="'.$theme_path.'/images/icons/error.svg" alt="">
						
						<form action="#">
							<div class="selectmenu_type_1 space_fix single_form">
								<select class="selectmenu">
									<option selected="selected">Choose a City</option>
									<option>Mexcio City</option>
									<option>Seoul</option>
									<option>Miami</option>
									<option>Palo alto</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form">
								<select class="selectmenu">
									<option selected="selected">Area</option>
									<option>Area 1</option>
									<option>Area 2</option>
									<option>Area 3</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form">
								<select id="product_type" class="selectmenu">
									<option selected="selected">Property Type</option>
									<option>Residential</option>
									<option>Aparment</option>
									<option>House</option>
									<option>Office</option>
									<option>Villa</option>
									<option>Resort</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form residential_option">
								<select id="" class="selectmenu">
									<option selected="selected">Select Bedroom</option>
									<option>Bedroom 1</option>
									<option>Bedroom 2</option>
									<option>Bedroom 3</option>
									<option>Bedroom 4</option>
									<option>Bedroom 5</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form residential_option">
								<select id="" class="selectmenu">
									<option selected="selected">Select Bathroom</option>
									<option>Bathroom 1</option>
									<option>Bathroom 2</option>
									<option>Bathroom 3</option>
									<option>Bathroom 4</option>
									<option>Bathroom 5</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form residential_option">
								<select id="" class="selectmenu">
									<option selected="selected">Garage</option>
									<option>Yes</option>
									<option>No</option>
								</select>
							</div> <!-- End .single_form -->

							<div class="selectmenu_type_2 space_fix single_form">
								<select id="" class="selectmenu">
									<option selected="selected">Select Size</option>
									<option>1200 x 2400 sqt</option>
									<option>1200 x 2400 sqt</option>
									<option>1200 x 2400 sqt</option>
									<option>1200 x 2400 sqt</option>
									<option>1200 x 2400 sqt</option>
								</select>
							</div> <!-- End .single_form -->

							
							<!--
							<div class="selectmenu_type_1 single_form space_fix_small_device">
								<select class="selectmenu">
									<option selected="selected">Size</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div> --> <!-- End .single_form -->
<!--
							<div class="selectmenu_type_1 space_fix single_form">
								<select class="selectmenu">
									<option selected="selected">Bathroom</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>--> <!-- End .single_form -->

					

							<div class="single_form" style="vertical-align:top;">
								<button class="search">Search</button>
							</div> <!-- End .single_form -->

						</form>
					</div> <!-- End .table_content -->
				</div> <!-- End .find_home -->
			</section>
			
		</div>


		<div class="boxed_wrapper">


        <!-- ==================== Style Switcher ==================== -->
		<div class="switcher">

			<!-- Switcher button -->
			<div class="switch_btn">
				<button><i class="fa fa-cog fa-spin"></i></button>
			</div>

			<!-- switcher body -->
			<div class="switch_menu">
				<h5 class="title">Style Switcher</h5>

					<!-- Theme layout -->
					<div class="switch_body">
						<div class="switcher_container">
							<h5>Layout Style</h5>
							<div class="box" id="full_width">
								<div></div>
								<p>Fullwidth</p>
							</div>
							<div class="box" id="boxed">
								<div><span></span></div>
								<p>Boxed</p>
							</div>
						</div>
					</div> <!-- /switch_body -->

					<!-- Switch Navigation menu Sticky/Static -->
					<div class="switch_navigation">
						<div class="switcher_container">
							<h5>Navigation</h5>
							<p>Static</p>
							<div class="onoffswitch" id="sticky_switch">
							    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
							    <label class="onoffswitch-label" for="myonoffswitch"></label>
							</div>
							<p>Sticky</p>
						</div>
					</div> <!-- /switch_navigation -->


					
					<!-- Theme color changer -->
					<div class="switcher_container">
						<h5>Primary Color Skins</h5>
						<ul id="styleOptions" title="Switch Color">
							<li>
								<a href="javascript: void(0)" data-theme="theme-default" class="color1">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0)" data-theme="theme-2" class="color2">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0)" data-theme="theme-3" class="color3">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0)" data-theme="theme-4" class="color4">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
						</ul>
					</div>
					
			</div> <!-- /switch_menu -->
		</div>

		<!-- ==================== Style Switcher ==================== -->
		
		

		<!-- Top Header ___________________________________ -->

		<div id="top_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 top_header_left">
						<a href="login.html" class="login"><i class="fa fa-download fa-rotate-270"></i> Login / Register</a>
						<a href="mailto:Realestate@Steelthemes.com" class="mail"><i class="fa fa-envelope-o"></i> Realestate@Steelthemes.com</a>
					</div> <!-- End .top_header_left -->

					<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 top_header_right">
						<div class="dropdown">
							<button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true">
								 $ &nbsp;Dollar
								<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							  	<li>₹ &nbsp;Rupi</li>
								<li>€ &nbsp;EURO</li>
								<li>¥ &nbsp;YEN</li>
								<li>$ &nbsp;Dollar</li>
							</ul>
						</div> <!-- End .dropdown -->

						<div id="polyglotLanguageSwitcher">
							<form action="#">
								<select id="polyglot-language-options">
									<option id="en" value="en" selected>English</option>
									<option id="fr" value="fr">French</option>
									<option id="de" value="de">German</option>
									<option id="it" value="it">Italian</option>
									<option id="es" value="es">Spanish</option>
								</select>
							</form>
						</div> <!-- End #polyglotLanguageSwitcher -->

						<a href="#" class="download"><i class="fa fa-download"></i> Download App</a>

						<ul class="icon_header">
							<li class="border_round tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="border_round tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="border_round tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="border_round tran3s tooltip" title="Linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="border_round tran3s tooltip" title="Vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul> <!-- End .icon_header -->

					</div> <!-- End .top_header_right -->
					<div class="clear_fix"></div>
				</div> <!-- End .row -->
			</div> <!-- End .container -->
		</div> <!-- End .top_header -->

		<!-- END Top Header _______________________________ -->


		<!-- Main Menu ____________________________________ -->

		<div class="main_menu fixed_menu" id="menu">
			<div class="container">
				<div class="wrapper">
					<div class="logo_holder">
						<a href="index-1.html"><img src="'.$theme_path.'/images/skin/logo.png" alt="Logo" id="logo" class="img-responsive"></a>
					</div> <!-- End .logo_holder -->
					
					<a href="#" class="amenities tran3s" id="search-button">
						<i class="fa fa-search"></i>
					</a>

					<!-- Menu ______________ -->
					<nav class="navbar navbar-default">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					     </button>
					   </div> <!-- End .navbar-header -->
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       <li class="tran3sL sub-menu-holder dropdown"><a href="index-1.html">Home</a>
					       		<ul class="sub-menu">
					       			<li><a href="index-5.html">Home 01 - Property Slider</a></li>
					       			<li><a href="index-2.html">Home 02 - Google Map</a></li>
					       			<li><a href="index-1.html">Home 03 - Revolution Slider</a></li>
					       			<li><a href="index-4.html">Home 04 - Tranparent Header</a></li>
					       			<li><a href="index-3.html">Home 05 - Simple Header</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Properties</a>
					       		<ul class="sub-menu">
					       			<li><a href="property-listing-without-sidebar.html">Property Listing Fullwidth</a></li>
					       			<li><a href="property-listing-with-sidebar.html">Property Listing With Sidebar</a></li>
					       			<li><a href="property-details.html">Property Detail Page</a></li>
					       			<li class="dropdown"><a href="#">Property Type <i class="fa fa-angle-right"></i></a>
					       				<ul class="sub-sub-menu">
					       					<li><a href="property-type-building-area.html">Property Type - Building Area</a></li>
							       			<li><a href="property-type-apartment.html">Property Type - Apartment</a></li>
							       			<li><a href="property-type-house.html">Property Type - House</a></li>
							       			<li><a href="property-type-condo.html">Property Type - Condo</a></li>
							       			<li><a href="property-type-villa.html">Property Type - Villa</a></li>
							       		</ul>
					       			</li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Agents & Agencies</a>
					       		<ul class="sub-menu">
					       			<li><a href="agent-listing-sidebar.html">Agents Listing With Sidebar</a></li>
					       			<li><a href="agent-listing-without-sidebar.html">Agents listing Without Sidebar</a></li>
					       			<li><a href="agent-details.html">Agent Detail Page</a></li>
					       			<li><a href="agency-listing.html">Agency Listing</a></li>
					       			<li><a href="agency-details.html">Agency Detail Page</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Pages</a>
					       		<ul class="sub-menu">
					       			<li><a href="about-us.html">About Us</a></li>
					       			<li><a href="pricing-plans.html">Pricing Plans</a></li>
					       			<li><a href="testimonial.html">Testimonials</a></li>
					       			<li><a href="faq.html">FAQ’s</a></li>
					       			<li><a href="home-loan.html">Home Loan Calculator</a></li>
					       			<li><a href="login.html">Login / Register</a></li>
					       			<li><a href="vertical-map.html">vertical Map</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">News</a>
					       		<ul class="sub-menu">
					       			<li><a href="blog-grid.html">Blog Grid View</a></li>
					       			<li><a href="blog-list-view.html">Blog list View</a></li>
					       			<li><a href="blog-large.html">Blog Large Image</a></li>
					       			<li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
					       			<li><a href="blog-details-fullwidth.html">Blog Detail Fullwidth</a></li>
					       			<li><a href="blog-details-sidebar.html">Blog Detail With Sidebar</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL sub-menu-holder dropdown"><a href="#">Gallery</a>
					       		<ul class="sub-menu space_fix">
					       			<li class="dropdown"><a href="#">Gallery Grid View <i class="fa fa-angle-right"></i></a>
					       				<ul class="sub-sub-menu">
							       			<li><a href="gallery-grid-2columns.html">Gallery Grid 2 Columns</a></li>
							       			<li><a href="gallery-grid-3columns.html">Gallery Grid 3 Columns</a></li>
							       			<li><a href="gallery-grid-4columns.html">Gallery Grid 4 Columns</a></li>
							       		</ul>
					       			</li>
					       			<li class="dropdown"><a href="#">Gallery With Text <i class="fa fa-angle-right"></i></a>
										<ul class="sub-sub-menu">
							       			<li><a href="gallery-2columns-with-text.html">Gallery Text 2 Columns</a></li>
							       			<li><a href="gallery-3columns-with-text.html">Gallery Text 3 Columns</a></li>
							       			<li><a href="gallery-4columns-with-text.html">Gallery Text 4 Columns</a></li>
							       		</ul>
					       			</li>
					       			<li class="dropdown"><a href="#">Gallery Fullwidth <i class="fa fa-angle-right"></i></a>
					       				<ul class="sub-sub-menu">
							       			<li><a href="gallery-fullwidth-2columns.html">Gallery Fullwidth 2 Columns</a></li>
							       			<li><a href="gallery-fullwidth-3columns.html">Gallery Fullwidth 3 Columns</a></li>
							       			<li><a href="gallery-fullwidth-4columns.html">Gallery Fullwidth 4 Columns</a></li>
							       		</ul>
					       			</li>
					       			<li><a href="gallery-masonary.html">Gallery Manasory Style</a></li>
					       			<li><a href="gallery-single.html">Gallery Single Page</a></li>
					       		</ul>
					       </li>
					       <li class="tran3sL"><a href="contact.html">Contact</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- End .navbar -->
				<!-- End Menu __________ -->
				</div>  <!-- End .wrapper -->
			</div> <!-- End .container -->
		</div> <!-- End .main_menu -->

		<!-- End Main Menu _______________________________ -->


		<!-- Call Us Anytime _____________________________ -->
		<div class="container">
			<div class="call_us">
				<p><span><i class="fa fa-phone"></i></span>Call Us Anytime [at]</p>
				<a href="tel:1-880-002-0088">1-880-002-0088</a>
			</div>
		</div>

		<!-- End Call Us Anytime _________________________ -->';




?>