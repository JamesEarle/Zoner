<!DOCTYPE html>

<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

	<!-- Font isn't working because the CSS references a URL but using asset() doesn't correct it.-->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' type='text/css'>
    <link rel="stylesheet" href="{{ asset('/fonts/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css')}} " type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/jquery.slider.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">

    <title>Zoner CBH</title>
</head>
<body class="page-homepage navigation-fixed-top map-google" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
	<!-- Wrapper -->
	<div class="wrapper">

	    <div class="navigation">
	        <div class="secondary-navigation">
	            <div class="container">
	                <div class="contact">
	                    <figure><strong>Phone:</strong>+1 810-991-3842</figure>
	                    <figure><strong>Email:</strong>zoner@example.com</figure>
	                </div>
	                <div class="user-area">
	                    <div class="actions">
	                        <a href="create-agency.html" class="promoted">Create Agency</a>
	                        <a href="create-account.html" class="promoted"><strong>Register</strong></a>
	                        <a href="sign-in.html">Sign In</a>
	                    </div>
	                    <div class="language-bar">
	                        <a href="#" class="active"><img src="{{ asset('/img/flags/gb.png') }}" alt=""></a>
	                        <a href="#"><img src="{{ asset('/img/flags/de.png') }}" alt=""></a>
	                        <a href="#"><img src="{{ asset('/img/flags/es.png') }}" alt=""></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="container">
	            <header class="navbar" id="top" role="banner">
	                <div class="navbar-header">
	                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                    <div class="navbar-brand nav" id="brand">
	                        <a href="index-google-map-fullscreen.html"><img src="{{ asset('/img/logo.png') }}" alt="brand"></a>
	                    </div>
	                </div>
	                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                        <li class="active has-child"><a href="#">Homepage</a>
	                            <ul class="child-navigation">
	                                <li><a href="index-google-map-fullscreen.html">Google Map Full Screen</a></li>
	                                <li><a href="index-google-map-fixed-height.html">Google Map Fixed Height</a></li>
	                                <li><a href="index-google-map-fixed-navigation.html">Google Map Fixed Navigation</a></li>
	                                <li><a href="index-osm.html">OpenStreetMap Full Screen</a></li>
	                                <li><a href="index-osm-fixed-height.html">OpenStreetMap Fixed Height</a></li>
	                                <li><a href="index-osm-fixed-navigation.html">OpenStreetMap Fixed Navigation</a></li>
	                                <li><a href="index-slider.html">Slider Homepage</a></li>
	                                <li><a href="index-slider-search-box.html">Slider with Search Box</a></li>
	                                <li><a href="index-horizontal-search-floated.html">Horizontal Search Floated</a></li>
	                                <li><a href="index-advanced-horizontal-search.html">Horizontal Advanced Search</a></li>
	                                <li><a href="index-slider-horizontal-search-box.html">Horizontal Slider Search</a></li>
	                                <li><a href="index-slider-horizontal-search-box-floated.html">Horizontal Slider Floated Search</a></li>
	                            </ul>
	                        </li>
	                        <li class="has-child"><a href="#">Properties</a>
	                            <ul class="child-navigation">
	                                <li><a href="property-detail.html">Property Detail</a></li>
	                                <li><a href="properties-listing.html">Masonry Listing</a></li>
	                                <li><a href="properties-listing-grid.html">Grid Listing</a></li>
	                                <li><a href="properties-listing-lines.html">Lines Listing</a></li>
	                            </ul>
	                        </li>
	                        <li class="has-child"><a href="#">Pages</a>
	                            <ul class="child-navigation">
	                                <li><a href="about-us.html">About Us</a></li>
	                                <li><a href="agent-detail.html">Agent Detail</a></li>
	                                <li><a href="invoice-print.html">Invoice</a></li>
	                                <li><a href="profile.html">Profile</a></li>
	                                <li><a href="my-properties.html">My Properties</a></li>
	                                <li><a href="bookmarked.html">Bookmarked Properties</a></li>
	                                <li><a href="create-account.html">Create Account</a></li>
	                                <li><a href="create-agency.html">Create Agency</a></li>
	                                <li><a href="sign-in.html">Sign In</a></li>
	                                <li class="has-child"><a href="#">Error Pages</a>
	                                    <ul class="child-navigation">
	                                        <li><a href="403.html">403</a></li>
	                                        <li><a href="404.html">404</a></li>
	                                        <li><a href="500.html">500</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="faq.html">FAQ</a></li>
	                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
	                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
	                                <li><a href="sticky-footer.html">Sticky Footer</a></li>
	                                <li><a href="pricing.html">Pricing</a></li>
	                                <li><a href="shortcodes.html">Shortcodes</a></li>
	                                <li><a href="timeline.html">Timeline</a></li>
	                                <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
	                                <li><a href="rtl.html">RTL Support</a></li>
	                            </ul>
	                        </li>
	                        <li class="has-child"><a href="#">Agents &amp; Agencies</a>
	                            <ul class="child-navigation">
	                                <li><a href="agents-listing.html">Agents Listing</a></li>
	                                <li><a href="agent-detail.html">Agent Detail</a></li>
	                                <li><a href="agencies-listing.html">Agencies Listing</a></li>
	                                <li><a href="agency-detail.html">Agency Detail</a></li>
	                            </ul>
	                        </li>
	                        <li><a href="submit.html">Submit</a></li>
	                        <li class="has-child"><a href="#">Blog</a>
	                            <ul class="child-navigation">
	                                <li><a href="blog.html">Blog Listing</a></li>
	                                <li><a href="blog-detail.html">Blog Post Detail</a></li>
	                            </ul>
	                        </li>
	                        <li><a href="contact.html">Contact</a></li>
	                    </ul>
	                </nav><!-- /.navbar collapse-->
	                <div class="add-your-property">
	                    <a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>
	                </div>
	            </header><!-- /.navbar -->
	        </div><!-- /.container -->
	    </div><!-- /.navigation -->

		<div id="content">
			@yield('content')
		</div>

		<!-- Page Footer -->
	    <footer id="page-footer">
	        <div class="inner">
	            <aside id="footer-main">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-3 col-sm-3">
	                            <article>
	                                <h3>About Us</h3>
	                                <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum
	                                    primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio
	                                    id, ornare tortor
	                                </p>
	                                <hr>
	                                <a href="#" class="link-arrow">Read More</a>
	                            </article>
	                        </div><!-- /.col-sm-3 -->
	                        <div class="col-md-3 col-sm-3">
	                            <article>
	                                <h3>Recent Properties</h3>
	                                <div class="property small">
	                                    <a href="property-detail.html">
	                                        <div class="property-image">
	                                            <img alt="" src="{{ asset('/img/properties/property-06.jpg') }}">
	                                        </div>
	                                    </a>
	                                    <div class="info">
	                                        <a href="property-detail.html"><h4>2186 Rinehart Road</h4></a>
	                                        <figure>Doral, FL 33178 </figure>
	                                        <div class="tag price">$ 72,000</div>
	                                    </div>
	                                </div><!-- /.property -->
	                                <div class="property small">
	                                    <a href="property-detail.html">
	                                        <div class="property-image">
	                                            <img alt="" src="{{ asset('/img/properties/property-09.jpg') }}">
	                                        </div>
	                                    </a>
	                                    <div class="info">
	                                        <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>
	                                        <figure>Minneapolis, MN 55402</figure>
	                                        <div class="tag price">$ 36,000</div>
	                                    </div>
	                                </div><!-- /.property -->
	                            </article>
	                        </div><!-- /.col-sm-3 -->
	                        <div class="col-md-3 col-sm-3">
	                            <article>
	                                <h3>Contact</h3>
	                                <address>
	                                    <strong>Your Company</strong><br>
	                                    4877 Spruce Drive<br>
	                                    West Newton, PA 15089
	                                </address>
	                                +1 (734) 123-4567<br>
	                                <a href="#">hello@example.com</a>
	                            </article>
	                        </div><!-- /.col-sm-3 -->
	                        <div class="col-md-3 col-sm-3">
	                            <article>
	                                <h3>Useful Links</h3>
	                                <ul class="list-unstyled list-links">
	                                    <li><a href="#">All Properties</a></li>
	                                    <li><a href="#">Privacy Policy</a></li>
	                                    <li><a href="#">Login and Register Account</a></li>
	                                    <li><a href="#">FAQ</a></li>
	                                    <li><a href="#">Terms and Conditions</a></li>
	                                </ul>
	                            </article>
	                        </div><!-- /.col-sm-3 -->
	                    </div><!-- /.row -->
	                </div><!-- /.container -->
	            </aside><!-- /#footer-main -->
	            <aside id="footer-thumbnails" class="footer-thumbnails"></aside><!-- /#footer-thumbnails -->
	            <aside id="footer-copyright">
	                <div class="container">
	                    <span>Copyright © 2013. All Rights Reserved.</span>
	                    <span class="pull-right"><a href="#page-top" class="roll">Go to top</a></span>
	                </div>
	            </aside>
	        </div><!-- /.inner -->
	    </footer>
	    <!-- end Page Footer -->
	</div>

	<script type="text/javascript" src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/smoothscroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/markerwithlabel_packed.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/infobox.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.placeholder.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/icheck.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.vanillabox-0.1.5.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jshashtable-2.1_src.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.numberformatter-1.2.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/tmpl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.dependClass-0.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/draggable-0.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.slider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/markerclusterer_packed.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/custom-map.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/locations.js') }}"></script>
	<!--[if gt IE 8]>
	<script type="text/javascript" src="assets/js/ie.js"></script>
	<![endif]-->
	<script>
	    _latitude = 43.117614;
	    _longitude = -79.247684;
	    //_latitude = 48.87;
	    //_longitude = 2.29;
	    createHomepageGoogleMap(_latitude,_longitude);
	    $(window).load(function(){
	        initializeOwl(false);
	    });
	</script>
	</div><!-- ./wrapper -->
</body>
</html>