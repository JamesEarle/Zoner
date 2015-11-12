@extends('app')

@section('body-tag')
<body class="page-sub-page page-submit" id="page-top">
@stop

@section('content')
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}">Home</a></li>
            <li class="active">Add your property</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <header><h1>Add Your Property</h1></header>
        {!! Form::open(['url' => 'submit', 'files' => 'true']) !!}
            <div class="row">
                <div class="block">
                    <div class="col-md-9 col-sm-9">
                        <section id="submit-form">
                            <section id="basic-information">
                                <?php
                                    if(!Auth::check()) {
                                        echo "<p style=\"background-color:#ffcece;\">You must be logged in as a landlord to submit a property.</p>";
                                    } else {
                                        $email = Auth::user()->email;

                                        $isLandlord = DB::select(constant('USER_BY_EMAIL') . "'$email'")[0]->landlord;

                                        if(!$isLandlord) {
                                            echo "<p style=\"background-color:#ffcece;\">You must be logged in as a landlord to submit a property.</p>";
                                        }
                                    }
                                ?>
                                <header><h2>Basic Information</h2></header>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            {!! Form::label('submit-title', 'Title') !!}
                                            {!! Form::text('submit-title', null, ['class' => 'form-control', 'id' => 'submit-title', 'required' => 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="submit-price">Price</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$/mo.</span>
                                                {!! Form::text('submit-price', null, ['class' => 'form-control', 'id' => 'submit-price', 'pattern' => '\d*', 'required' => 'required']) !!}
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('submit-description', 'Description') !!}
                                    {!! Form::textarea('submit-description', null, ['class' => 'form-control', 'id' => 'submit-description', 'rows' => '8', 'placeholder' => 'Be descriptive! Giving as much detail as possible will increase the attention to your home. 150 characters minimum.', 'required' => 'required', 'pattern' => '.{150,}']) !!}
                                </div><!-- /.form-group -->
                            </section><!-- /#basic-information -->
                            <section>
                                <div class="row">
                                    <div class="block clearfix">
                                        <div class="col-md-6 col-sm-6">
                                            <section id="summary">
                                                <header><h2>Summary</h2></header>
                                                <div class="form-group">
                                                    {!! Form::label('submit-address', 'Address') !!}
                                                    {!! Form::text('submit-address', null, ['class' => 'submit-address', 'id' => 'submit-address']) !!}
                                                </div><!-- /.form-group -->
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-city', 'City') !!}
                                                            {!! Form::text('submit-city', null, ['class' => 'submit-city', 'id' => 'submit-city']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-province', 'Province') !!}
                                                            {!! Form::select('submit-province', 
                                                                ['AB' => 'Alberta', 
                                                                 'BC' => 'British Columbia', 
                                                                 'MB' => 'Manitoba', 
                                                                 'NB' => 'New Brunswick', 
                                                                 'NL' => 'Newfoundland & Labrador', 
                                                                 'NS' => 'Nova Scotia', 
                                                                 'NT' => 'Northwest Territories', 
                                                                 'NU' => 'Nunavut', 
                                                                 'ON' => 'Ontario', 
                                                                 'PE' => 'Prince Edward Island', 
                                                                 'QC' => 'Quebec', 
                                                                 'SK' => 'Saskatchewan', 
                                                                 'YT' => 'Yukon'], 
                                                                ['class' => 'submit-province', 'id' => 'submit-province', 'selected' => 'ON']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('submit-property-type', 'Property Type') !!}
                                                    {!! Form::select('submit-property-type',['house' => 'House', 'apartment' => 'Apartment', 'single room' => 'Single Room', 'other' => 'Other']) !!}
                                                </div><!-- /.form-group -->
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-distance-to-school', 'Distance to School') !!}
                                                            <div class="input-group">
                                                                {!! Form::text('submit-distance-to-school', null, ['class' => 'form-control', 'id' => 'submit-distance-to-school', 'pattern' => '\d*', 'required' => 'required']) !!}
                                                                <span class="input-group-addon">km</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-walk-to-bus','Walk to bus') !!}
                                                            <div class="input-group">
                                                                {!! Form::text('submit-walk-to-bus', null, ['class' => 'form-control', 'id' => 'submit-walk-to-bus','pattern' => '\d*', 'required' => 'required']) !!}
                                                                <span class="input-group-addon">min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-rooms', 'Rooms') !!}
                                                            {!! Form::text('submit-rooms', null, ['class' => 'form-control', 'id' => 'submit-rooms', 'pattern' => '\d*', 'placeholder'=>'e.g. 4', 'required' => 'required']) !!}
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-baths', 'Baths') !!}
                                                            {!! Form::text('submit-baths', null, ['class' => 'form-control', 'id' => 'submit-baths', 'pattern' => '\d*',  'placeholder'=>'e.g. 2', 'required' => 'required']) !!}
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                </div><!-- /.row -->
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-area', 'Area') !!}
                                                            <div class="input-group">
                                                                {!! Form::text('submit-area', null, ['class' => 'form-control', 'id' => 'submit-area', 'pattern' => '\d*', 'required' => 'required']) !!}
                                                                <span class="input-group-addon">ft<sup>2</sup></span>
                                                            </div>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-garage', 'Garage') !!}
                                                            {!! Form::select('submit-garage', ['no' => 'No', 'yes' => 'Yes'])!!}
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                </div><!-- /.row -->
                                            </section><!-- /#summary -->
                                        </div><!-- /.col-md-6 -->
                                         <div class="col-md-6 col-sm-6">
                                            <section class="block" id="gallery">
                                                <header><h2>Gallery</h2></header>
                                                <div class="center">
                                                    <div class="form-group">
                                                        <h3><strong>Featured Image</strong></h3>
                                                        <figure class="note">
                                                            Your featured image is the first picture people see of your home. Be sure it's something that represents your property well! <br><strong><emph>Square photos will render the best on our website.</emph></strong>
                                                        </figure> 
                                                        {!! 
                                                            Form::file('featured', [
                                                                'id' => 'file-upload', 
                                                                'type' => 'file',
                                                                'class' => 'file',
                                                                'data-show-upload' => 'false', 
                                                                'data-show-caption' => 'false', 
                                                                'data-show-remove' => 'false', 
                                                                'accept' => 'image/jpeg,image/png', 
                                                                'data-browse-class' => 'btn btn-default', 
                                                                'data-browse-label' => 'Featured Image',
                                                                'required' => 'required'
                                                            ])
                                                        !!}
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <h3><strong>Image Gallery</strong></h3>
                                                        {{-- Make the images below be images[] later, for now only accept one picture. Also add 'multiple=>true--}}
                                                        <figure class="note">
                                                            Your image gallery allows you to add any additional photos you like. Be sure that these photos provide a good perspective of your property.
                                                        </figure> 
                                                        {!! 
                                                            Form::file('images[]', [
                                                                'id' => 'file-upload', 
                                                                'type' => 'file',
                                                                'class' => 'file', 
                                                                'multiple' => 'true',
                                                                'data-show-upload' => 'false', 
                                                                'data-show-caption' => 'false', 
                                                                'data-show-remove' => 'false', 
                                                                'accept' => 'image/jpeg,image/png', 
                                                                'data-browse-class' => 'btn btn-default', 
                                                                'data-browse-label' => 'Browse Images'
                                                            ])
                                                        !!}
                                                        <figure class="note"><strong>PNG and JPG files only.</strong></figure> 
                                                    </div>
                                                </div>
                                            </section>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.block -->
                                </div><!-- /.row -->
                            </section>

                            <section id="property-features" class="block">
                                <section>
                                    <header><h2>Property Features</h2></header>
                                    <ul class="submit-features">
                                        <li><div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('ac-and-heat', 'Air Conditioning & Heating') !!}
                                                    Air Conditioning &amp; Heating
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('bedding', 'Bedding') !!}
                                                    Bedding
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('internet', 'Internet') !!}
                                                    Internet
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('microwave', 'Microwave') !!}
                                                    Microwave
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('smoking', 'Smoking Allowed') !!}
                                                    Smoking Allowed
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('pool-gym', 'Pool or Gym') !!}
                                                    Pool or Gym
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('toaster', 'Toaster') !!}
                                                    Toaster
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('pots-pans', 'Pots & Pans') !!}
                                                    Pots &amp; Pans
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('tv', 'Cable TV') !!}
                                                    Cable TV
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('park', 'Nearby Park') !!}
                                                    Nearby Park
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('balcony', 'Balcony') !!}
                                                    Balcony
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <label>
                                                    {!! Form::checkbox('washer-dryer', 'Washer & Dryer') !!}
                                                    Washer &amp; Dryer
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                            <hr>
                        </section>
                    </div><!-- /.col-md-9 -->
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="block">
                    <div class="col-md-9 col-sm-9">
                        <div class="center">
                            <div id="submit-form">
                                <div class="form-group">
                                    {!! Form::submit('Submit!', ['class' => 'btn btn-default large'])!!}
                                </div><!-- /.form-group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::token() !!}
        {!! Form::close() !!}
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@stop

@section('map-script')
<script>
    var _latitude = 43.117614;
    var _longitude = -79.247684;

    google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
    function initSubmitMap(_latitude,_longitude){
        var mapCenter = new google.maps.LatLng(_latitude,_longitude);
        var mapOptions = {
            zoom: 15,
            center: mapCenter,
            disableDefaultUI: false,
            //scrollwheel: false,
            styles: mapStyles
        };
        var mapElement = document.getElementById('submit-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new MarkerWithLabel({
            position: mapCenter,
            map: map,
            icon: '{{ asset("/img/marker.png") }}',
            labelAnchor: new google.maps.Point(50, 0),
            draggable: true
        });
        $('#submit-map').removeClass('fade-map');
        google.maps.event.addListener(marker, "mouseup", function (event) {
            var latitude = this.position.lat();
            var longitude = this.position.lng();
            $('#latitude').val( this.position.lat() );
            $('#longitude').val( this.position.lng() );
        });

//      Autocomplete
        var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
            $('#latitude').val( marker.getPosition().lat() );
            $('#longitude').val( marker.getPosition().lng() );
            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }
        });

    }

    function success(position) {
        initSubmitMap(position.coords.latitude, position.coords.longitude);
        $('#latitude').val( position.coords.latitude );
        $('#longitude').val( position.coords.longitude );
    }

    $('.geo-location').on("click", function() {
        if (navigator.geolocation) {
            $('#submit-map').addClass('fade-map');
            navigator.geolocation.getCurrentPosition(success);
        } else {
            error('Geo Location is not supported');
        }
    });
</script>
@endsection