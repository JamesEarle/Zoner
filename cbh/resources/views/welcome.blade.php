@extends('app')

@section('body-tag')
<body class="page-homepage navigation-fixed-top map-google" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
@stop

@section('content')

{{-- Include PHP named constants for DB queries --}}
<?php include_once(app_path()."/queries.php"); ?>

<div id="content">

    {{--<div class="container">
        <div class="geo-location-wrapper">
            <span class="btn geo-location"><i class="fa fa-map-marker"></i><span class="text">Find My Position</span></span>
        </div>
    </div> --}}
    

    <!-- Map -->
    <div id="map" class="has-parallax"></div>
    <!-- end Map -->

    <!-- Search Box -->
    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="search-box map">
                            <form role="form" id="form-map" class="form-map form-search">
                                <h2>Search Your Property</h2>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search-box-property-id" placeholder="Property ID">
                                </div>
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Status</option>
                                        <option value="1">Rent</option>
                                        <option value="2">Sale</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="province">
                                        <option value="">Province</option>
                                        <option value="1">ON</option>
                                        <option value="2">BC</option>
                                        <option value="3">QC</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="city">
                                        <option value="">City</option>
                                        <?php 
                                            // $prov = ''; //define a variable based on the selected province
                                            $results = DB::select(constant('ALL_LOCATIONS'));
                                            $ctr = 1;
                                            foreach($results as $data) {
                                                echo "<option value='$ctr'>" . $data->city . "</option>";
                                                $ctr++;
                                            }
                                        ?>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="property-type">
                                        <option value="">Property Type</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condominium</option>
                                        <option value="5">House</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="price-range">
                                        <input id="price-input" type="text" name="price" value="1000;299000">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Search Now</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </div><!-- /.search-box.map -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.search-box-inner -->
    </div>
    <!-- end Search Box -->

    <!-- Page Content -->
    <div id="page-content">
        <section id="banner">
            <div class="block has-dark-background background-color-default-darker center text-banner">
                <div class="container">
                    <h1 class="no-bottom-margin no-border"> Experience off campus living <b>the right way</b></h1>
                </div>
            </div>
        </section><!-- /#banner -->
        <section id="our-services" class="block">
            <div class="container">
                <header class="section-title"><h2>Our Services</h2></header>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <a href="{{ URL('list-lines') }}">
                                <figure class="icon"><i class="fa fa-folder"></i></figure>
                            </a>
                            <aside class="description">
                                <header><h3>Options</h3></header>
                                <p>Explore our wide range of properties</p>
                                <a href="{{ URL('list-lines') }}" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <a href="{{ URL('contact') }}">                        
                                <figure class="icon"><i class="fa fa-users"></i></figure>
                            </a>
                            <aside class="description">
                                <header><h3>Trusted Service</h3></header>
                                <p>You can count on our reliable support, any day of the week.</p>
                                <a href="{{ URL('contact') }}" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <a href="{{ URL('about') }}">
                                <figure class="icon"><i class="fa fa-money"></i></figure>
                            </a>
                            <aside class="description">
                                <header><h3>Quality Guarantee</h3></header>
                                <p>We provide a quality guarantee for each and every home you live in.</p>
                                <a href="{{ URL('about') }}" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /#our-services -->
        <aside id="advertising" class="block">
            <div class="container">
                <a href="{{ URL('submit') }}">
                    <div class="banner">
                        <div class="wrapper">
                            <span class="title">Do you want your property to be listed here?</span>
                            <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                        </div>
                    </div><!-- /.banner-->
                </a>
            </div>
        </aside><!-- /#adveritsing-->
        
        @include('testimonials')

        <section id="partners" class="block">
            <div class="container">
                <header class="section-title"><h2>Our Partners</h2></header>
                <div class="logos">
                    <div class="logo"><a href=""><img src="{{ asset('/img/logo-partner-01.png') }}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{ asset('/img/logo-partner-02.png') }}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{ asset('/img/logo-partner-03.png') }}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{ asset('/img/logo-partner-04.png') }}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{ asset('/img/logo-partner-05.png') }}" alt=""></a></div>
                </div>
            </div><!-- /.container -->
        </section><!-- /#partners -->
    </div>
</div>
<?php

    // $properties = DB::select(constant('ALL_PROPERTIES'));
    // $file = fopen("js/locations.js", "w") or die("Cannot create file!!");
    // $client = curl_init();
    // fwrite($file, 
    //     "shortGlobalImgUrl = globalImgUrl.substring(0, globalImgUrl.length - 3);\nvar locations = [");

    // // Need a track on the number of rows so when creating the file we can put right number of commas. 
    // $count = count($properties);
    // $i = 0;

    // foreach ($properties as $row) {
    //     // Pass the address to the Google Maps API. Returns JSON object with details.
    //     $address = urlencode("{$row->address} {$row->city} {$row->province}");
    //     $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Canada";

    //     // Set curl exec options.
    //     curl_setopt($client, CURLOPT_URL, $url);
    //     curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($client, CURLOPT_PROXYPORT, 3128);
    //     curl_setopt($client, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($client, CURLOPT_SSL_VERIFYPEER, 0);

    //     $response_as_json = curl_exec($client);
    //     $response = json_decode($response_as_json);

    //     // Get lat and lng for interactive map pin.
    //     $lat = ($response->results[0]->geometry->location->lat);
    //     $lng = ($response->results[0]->geometry->location->lng);

    //     $f_image = $row->{'featured-image'};

    //     // Append comma to string if not the last element.
    //     $append = ++$i == $count ? "" : ", "; 

    //     $curr_prop = "\n\t['{$row->address}', '{$row->city}, {$row->province}', '\${$row->price}', $lat, $lng, globalPropertyDetailUrl, shortGlobalImgUrl.concat('/$f_image'), globalImgUrl.concat(\"/property-types/home.png\")]$append";

    //     fwrite($file, $curr_prop);
    // }

    // fwrite($file, "\n];");
    // fclose($file);
?>
@include('footer-big')

@endsection

@section('map-script')
<script>
    //Brock U
    _latitude = 43.117614;
    _longitude = -79.247684;

    //Main screen map
    createHomepageGoogleMap(_latitude,_longitude,"{{ asset('/js/locations.js') }}", "{{ URL('/img/') }}", "{{ URL('/property-detail/') }}");
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
@endsection