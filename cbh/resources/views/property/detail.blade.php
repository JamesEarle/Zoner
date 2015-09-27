@extends('app')

@section('body-tag')
<body class="page-sub-page page-property-detail" id="page-top">
@stop

@section('content')
<!-- Page Content -->
<div id="page-content">
        <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Property Detail</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- Property Detail Content -->
            <div class="col-md-9 col-sm-9">
                <section id="property-detail">
                    <header class="property-title">
                        <h1>987 Cantebury Drive</h1>
                        <figure>Golden Valley, MN 55427</figure>
                        <span class="actions">
                            <!--<a href="#" class="fa fa-print"></a>-->
                            <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Add to bookmark</span><span class="title-added">Added</span></a>
                        </span>
                    </header>
                    <section id="property-gallery">
                        <div class="owl-carousel property-carousel">
                            <div class="property-slide">
                                <a href="{{ asset('/img/properties/property-detail-01.jpg') }}" class="image-popup">
                                    <div class="overlay"><h3>Front View</h3></div>
                                    <img alt="" src="{{ asset('/img/properties/property-detail-01.jpg') }}">
                                </a>
                            </div><!-- /.property-slide -->
                            <div class="property-slide">
                                <a href="{{ asset('/img/properties/property-detail-02.jpg') }}" class="image-popup">
                                    <div class="overlay"><h3>Bedroom</h3></div>
                                    <img alt="" src="{{ asset('/img/properties/property-detail-02.jpg') }}">
                                </a>
                            </div><!-- /.property-slide -->
                            <div class="property-slide">
                                <a href="{{ asset('/img/properties/property-detail-03.jpg') }}" class="image-popup">
                                    <div class="overlay"><h3>Bathroom</h3></div>
                                    <img alt="" src="{{ asset('/img/properties/property-detail-03.jpg') }}">
                                </a>
                            </div><!-- /.property-slide -->
                        </div><!-- /.property-carousel -->
                    </section>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <section id="quick-summary" class="clearfix">
                                <header><h2>Quick Summary</h2></header>
                                <dl>
                                    <dt>Location</dt>
                                        <dd>Chicago, IL 60610</dd>
                                    <dt>Price</dt>
                                        <dd><span class="tag price">$78,000</span></dd>
                                    <dt>Property Type:</dt>
                                        <dd>House</dd>
                                    <dt>Status:</dt>
                                        <dd>Sale</dd>
                                    <dt>Area:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                    <dt>Beds:</dt>
                                        <dd>3</dd>
                                    <dt>Baths:</dt>
                                        <dd>2</dd>
                                    <dt>Garages:</dt>
                                        <dd>2</dd>
                                    {{-- <dt>Rating:</dt> --}}
                                        {{-- <dd><div class="rating rating-overall" data-score="4"></div></dd> --}}
                                </dl>
                            </section><!-- /#quick-summary -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-12">
                            <section id="description">
                                <header><h2>Property Description</h2></header>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                    bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
                                    Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac
                                    turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam
                                    mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.
                                </p>
                                <p>
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis
                                    lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis
                                    placerat nec, molestie id turpis. Cras at tincidunt magna. Mauris aliquam sem sit
                                    amet dapibus venenatis. Sed metus orci, tincidunt sed fermentum non, ornare non quam.
                                    Aenean nec turpis at libero lobortis pretium.
                                </p>
                            </section><!-- /#description -->
                            <section id="property-features">
                                <header><h2>Property Description</h2></header>
                                <ul class="list-unstyled property-features-list">
                                    <li>Sauna</li>
                                    <li>Fireplace or fire pit</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Tennis Courts</li>
                                    <li>Trees and Landscaping</li>
                                    <li>Sun Room</li>
                                    <li>Family Room</li>
                                    <li>Concrete Flooring</li>
                                </ul>
                            </section><!-- /#property-features -->
                            <section id="floor-plans">
                                <div class="floor-plans">
                                    <header><h2>Floor Plans</h2></header>
                                    <a href="{{ asset('/img/properties/floor-plan-big.jpg') }}" class="image-popup"><img alt="" src="{{ asset('/img/properties/floor-plan-01.jpg') }}"></a>
                                    <a href="{{ asset('/img/properties/floor-plan-big.jpg') }}" class="image-popup"><img alt="" src="{{ asset('/img/properties/floor-plan-02.jpg') }}"></a>
                                </div>
                            </section><!-- /#floor-plans -->
                            <section id="property-map">
                                <header><h2>Map</h2></header>
                                <div class="property-detail-map-wrapper">
                                    <div class="property-detail-map" id="property-detail-map"></div>
                                </div>
                            </section><!-- /#property-map -->
                            <section id="video-presentation">
                                <header><h2>Video Presentation</h2></header>
                                <div class="video">
                                    <iframe src="//player.vimeo.com/video/34741214?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" ></iframe>
                                </div>
                            </section><!-- /#video-presentation -->
                        </div><!-- /.col-md-8 -->
                        <div class="col-md-12 col-sm-12">
                            <section id="contact-agent">
                                <header><h2>Contact Landlord</h2></header>
                                <div class="row">
                                    <section class="agent-form">
                                        <div class="col-md-7 col-sm-12">
                                            <aside class="agent-info clearfix">
                                                <figure><a href="agent-detail.html"><img alt="" src="{{ asset('/img/agent-01.jpg') }}"></a></figure>
                                                <div class="agent-contact-info">
                                                    <h3>Robert Farley</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
                                                        Duis euismod placerat rhoncus.
                                                    </p>
                                                    <dl>
                                                        <dt>Phone:</dt>
                                                        <dd>(123) 456 789</dd>
                                                        <dt>Mobile:</dt>
                                                        <dd>888 123 456 789</dd>
                                                        <dt>Email:</dt>
                                                        <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                                        <dt>Skype:</dt>
                                                        <dd>john.doe</dd>
                                                    </dl>
                                                    <hr>
                                                    <a href="agent-detail.html" class="link-arrow">Full Profile</a>
                                                </div>
                                            </aside><!-- /.agent-info -->
                                        </div><!-- /.col-md-7 -->
                                        <div class="col-md-5 col-sm-12">
                                            <div class="agent-form">
                                                <form role="form" id="form-contact-agent" method="post"  class="clearfix">
                                                    <div class="form-group">
                                                        <label for="form-contact-agent-name">Your Name<em>*</em></label>
                                                        <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="form-contact-agent-email">Your Email<em>*</em></label>
                                                        <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="form-contact-agent-message">Your Message<em>*</em></label>
                                                        <textarea class="form-control" id="form-contact-agent-message" rows="2" name="form-contact-agent-message" required></textarea>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Send a Message</button>
                                                    </div><!-- /.form-group -->
                                                    <div id="form-contact-agent-status"></div>
                                                </form><!-- /#form-contact -->
                                            </div><!-- /.agent-form -->
                                        </div><!-- /.col-md-5 -->
                                    </section><!-- /.agent-form -->
                                </div><!-- /.row -->
                            </section><!-- /#contact-agent -->
                            <hr class="thick">
                            <section id="similar-properties">
                                <header><h2 class="no-border">Similar Properties</h2></header>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="property">
                                            <a href="property-detail.html">
                                                <div class="property-image">
                                                    <img alt="" src="{{ asset('/img/properties/property-06.jpg') }}">
                                                </div>
                                                <div class="overlay">
                                                    <div class="info">
                                                        <div class="tag price">$ 11,000</div>
                                                        <h3>3398 Lodgeville Road</h3>
                                                        <figure>Golden Valley, MN 55427</figure>
                                                    </div>
                                                    <ul class="additional-info">
                                                        <li>
                                                            <header>Area:</header>
                                                            <figure>240m<sup>2</sup></figure>
                                                        </li>
                                                        <li>
                                                            <header>Beds:</header>
                                                            <figure>2</figure>
                                                        </li>
                                                        <li>
                                                            <header>Baths:</header>
                                                            <figure>2</figure>
                                                        </li>
                                                        <li>
                                                            <header>Garages:</header>
                                                            <figure>0</figure>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div><!-- /.property -->
                                    </div><!-- /.col-md-3 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="property">
                                            <a href="property-detail.html">
                                                <div class="property-image">
                                                    <img alt="" src="{{ asset('/img/properties/property-04.jpg') }}">
                                                </div>
                                                <div class="overlay">
                                                    <div class="info">
                                                        <div class="tag price">$ 38,000</div>
                                                        <h3>2186 Rinehart Road</h3>
                                                        <figure>Doral, FL 33178 </figure>
                                                    </div>
                                                    <ul class="additional-info">
                                                        <li>
                                                            <header>Area:</header>
                                                            <figure>240m<sup>2</sup></figure>
                                                        </li>
                                                        <li>
                                                            <header>Beds:</header>
                                                            <figure>3</figure>
                                                        </li>
                                                        <li>
                                                            <header>Baths:</header>
                                                            <figure>1</figure>
                                                        </li>
                                                        <li>
                                                            <header>Garages:</header>
                                                            <figure>1</figure>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div><!-- /.property -->
                                    </div><!-- /.col-md-3 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="property">
                                            <a href="property-detail.html">
                                                <div class="property-image">
                                                    <img alt="" src="{{ asset('/img/properties/property-07.jpg') }}">
                                                </div>
                                                <div class="overlay">
                                                    <div class="info">
                                                        <div class="tag price">$ 325,000</div>
                                                        <h3>3705 Brighton Circle Road</h3>
                                                        <figure>Glenwood, MN 56334</figure>
                                                    </div>
                                                    <ul class="additional-info">
                                                        <li>
                                                            <header>Area:</header>
                                                            <figure>240m<sup>2</sup></figure>
                                                        </li>
                                                        <li>
                                                            <header>Beds:</header>
                                                            <figure>3</figure>
                                                        </li>
                                                        <li>
                                                            <header>Baths:</header>
                                                            <figure>1</figure>
                                                        </li>
                                                        <li>
                                                            <header>Garages:</header>
                                                            <figure>1</figure>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div><!-- /.property -->
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row-->
                            </section><!-- /#similar-properties -->
                            <hr class="thick">
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </section><!-- /#property-detail -->
            </div><!-- /.col-md-9 -->
            <!-- end Property Detail Content -->
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- page-content -->
@stop

@section('map-script')
<script type="text/javascript">
    var propertyId = 27;
    google.maps.event.addDomListener(window, 'load', initMap(propertyId, "{{ asset('/js/locations.js') }}", "{{ URL('/img/') }}"));
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
@endsection