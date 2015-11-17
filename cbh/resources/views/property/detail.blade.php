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
    <?php 
        if(!isset($data)) {
            echo '<h2 style="background-color:#ffcece;">Whoops! Looks like something went wrong.</h2>';
            die('Data unset, property ID not found.');
        } ?>
    <div class="container">
        <div class="row">
            <!-- Property Detail Content -->
            <div class="col-md-9 col-sm-9">
                <section id="property-detail">
                    <header class="property-title">
                        <h1>{!! $data->address !!}</h1>
                        <figure>{!! $data->city . ', ' . $data->province !!}</figure>
                        <span class="actions">
                            <!--<a href="#" class="fa fa-print"></a>-->
                            <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Add to bookmark</span><span class="title-added">Added</span></a>
                        </span>
                    </header>
                    <section id="property-gallery">
                        <div class="owl-carousel property-carousel">
                            {{-- There is always minimum one photo, enforced by form submission. --}}
                            <?php 
                                $all_images = scandir($data->image);

                                for($i=2;$i<count($all_images);$i++) {
                                    $img = $data->image . '/' . $all_images[$i];
                            ?>
                            <div class="property-slide">
                                <a href="{{ asset($img) }}" class="image-popup">
                                    <div class="overlay"><h3></h3></div>
                                    <img alt="" src="{{ asset($img) }}">
                                </a>
                            </div><!-- /.property-slide -->
                            <?php 
                                } // End the for loop
                            ?>
                        </div><!-- /.property-carousel -->
                    </section>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <section id="quick-summary" class="clearfix">
                                <header><h2>Quick Summary</h2></header>
                                <dl>
                                    <dt>Location</dt>
                                        <dd>{!! $data->city . ', ' . $data->province !!}</dd>
                                    <dt>Price</dt>
                                        <dd><span class="tag price">$ {!! $data->price !!}</span></dd>
                                    <dt>Property Type:</dt>
                                        <dd>{!! $data->{'property_type'} !!}</dd>
                                    <dt>Area:</dt>
                                        <dd>{!! $data->area !!}ft<sup>2</sup></dd>
                                    <dt>Beds</dt>
                                        <dd>{!! $data->rooms !!}</dd>
                                    <dt>Baths:</dt>
                                        <dd>{!! $data->baths !!}</dd>
                                    {{-- <dt>Rating:</dt> --}}
                                        {{-- <dd><div class="rating rating-overall" data-score="4"></div></dd> --}}
                                </dl>
                            </section><!-- /#quick-summary -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-12">
                            <section id="description">
                                <header><h2>Property Description</h2></header>
                                <p>{!! $data->description !!}</p>
                            </section><!-- /#description -->
                            <section id="property-features">
                                <?php
                                    // Because of the pipe separation style, every element from 1 - length-1 is a feature
                                    $features = explode("|", $data->features);

                                    //TODO: check if features is empty, and see what kind of string that outputs.
                                    // only print the header if thats okay
                                ?>
                                <header><h2>Features</h2></header>
                                <ul class="list-unstyled property-features-list">
                                    <?php 
                                        for($i=1;$i<count($features) - 1;$i++) {
                                            echo "<li>", $features[$i], "</li>";
                                        }
                                    ?>
                                </ul>
                            </section><!-- /#property-features -->
                            <section id="property-map">
                                <header><h2>Map</h2></header>
                                <div class="property-detail-map-wrapper">
                                    <div class="property-detail-map" id="property-detail-map"></div>
                                </div>
                            </section><!-- /#property-map -->
                        </div><!-- /.col-md-8 -->
                        <div class="col-md-12 col-sm-12">
                            <section id="contact-agent">
                                {{-- Must fill this out with just a request form. We receive requests and forward that to the landlord email provided on landlord registration. --}}
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
    // Need to debug why this doesn't show...
    var propertyId = 27;
    google.maps.event.addDomListener(window, 'load', initMap(propertyId, "{{ asset('/js/locations.js') }}", "{{ URL('/img/') }}"));
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
@endsection