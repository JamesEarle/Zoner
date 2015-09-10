
<div class="navigation">
    <div class="secondary-navigation">
        <div class="container">
            <div class="contact">
                <figure><strong>Phone:</strong>+1 810-991-3842</figure>
                <figure><strong>Email:</strong>zoner@example.com</figure>
            </div>
            <div class="user-area">
                <div class="actions">
                    <a href="{{ URL('create') }}" class="promoted"><strong>Register</strong></a>
                    <a href="{{ URL('signin') }}">Sign In</a>
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
                    <a href="{{ URL('/') }}"><img class="c_logo" src="{{ asset('/img/CBH_logo.png') }}" alt="brand"></a>
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
                    <li><a href="{{ URL('contact') }}">Contact</a></li>
                </ul>
            </nav><!-- /.navbar collapse-->
            <div class="add-your-property">
                <a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>
            </div>
        </header><!-- /.navbar -->
    </div><!-- /.container -->
</div><!-- /.navigation -->