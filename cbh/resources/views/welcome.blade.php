@extends('app')

@section('body-tag')
<body class="page-homepage navigation-fixed-top map-google" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
@stop

@section('content')

{{-- Include PHP named constants for DB queries --}}
<?php include_once(app_path()."\\queries.php") ?>

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
                                    <select name="city">
                                        <option value="">City</option>
                                        <?php 
                                            $results = DB::select(constant('ALL_LOCATIONS'));
                                            $ctr = 1;
                                            foreach($results as $data) {
                                                echo "<option value=\"$ctr\">" . $data->city . "</option>";
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
    </div>
</div>

@include('footer-big')

@endsection

@section('map-script')
<script>
    //Brock U
    _latitude = 43.117614;
    _longitude = -79.247684;

    //Main screen map
    createHomepageGoogleMap(_latitude,_longitude,'{{ asset('/js/locations.js') }}', '{{ URL('/img/') }}', '{{ URL('/property-detail/') }}');
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
@endsection