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
        <div class="row">
            <!-- Submit-->
            <div class="col-md-9 col-sm-9">
                <section id="submit" class="submit">
                    <section id="select-package">
                        <div class="table-responsive submit-pricing">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Your Package:</th>
                                    <th class="title">Free</th>
                                    <th class="title">Silver</th>
                                    <th class="title">Gold</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="prices">
                                    <td></td>
                                    <td>$0</td>
                                    <td>$20</td>
                                    <td>$40</td>
                                </tr>
                                <tr>
                                    <td>Property Submit Limit</td>
                                    <td>1</td>
                                    <td>20</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <td>Agent Profiles</td>
                                    <td>1</td>
                                    <td>10</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <td>Agency Profiles</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td>5</td>
                                    <td>Unlimited</td>
                                </tr>
                                <tr>
                                    <td>Featured Properties</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr class="buttons">
                                    <td></td>
                                    <td class="package-selected" data-package="free"><button type="button" class="btn btn-default small">Select</button></td>
                                    <td data-package="silver"><button type="button" class="btn btn-default small">Select</button></td>
                                    <td data-package="gold"><button type="button" class="btn btn-default small">Select</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.submit-pricing -->
                    </section><!-- /#select-package -->
                </section><!-- /#submit -->
            </div><!-- /.col-md-9 -->
            <aside class="col-md-3 col-sm-3">
                <div class="submit-step">
                    <figure class="step-number">1</figure>
                    <div class="description">
                        <h4>Select Your Price Package</h4>
                        <p>Choose from price packages one that suit your need. If you have chosen package before,
                            it will be automatically selected.
                        </p>
                    </div>
                </div><!-- /.submit-step -->
            </aside><!-- /.col-md-3 -->
        </div><!-- /.row -->
        {!! Form::open(['url' => 'submit', 'files' => 'true']) !!}
            <div class="row">
                <div class="block">
                    <div class="col-md-9 col-sm-9">
                        <section id="submit-form">
                            <section id="basic-information">
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
                                                {!! Form::text('price', null, ['class' => 'form-control', 'id' => 'submit-price', 'pattern' => '\d*', 'required' => 'required']) !!}
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('submit-description', 'Submit Description') !!}
                                    {!! Form::textarea('submit-description', null, ['class' => 'form-control', 'id' => 'submit-description', 'rows' => '8', 'required' => 'required']) !!}
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
                                                            {!! Form::text('submit-province', null, 
                                                            ['class' => 'submit-province', 'id' => 'submit-province']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('submit-property-type', 'Property Type') !!}
                                                    {!! Form::select('submit-property-type',['single room' => 'Single Room', 'apartment' => 'Apartment', 'house' => 'House']) !!}
                                                </div><!-- /.form-group -->
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-distance-to-school', 'Distance to School') !!}
                                                            <div class="input-group">
                                                                {!! Form::text('submit-distance-to-school', null, ['class' => 'form-control', 'id' => 'submit-distance-to-school', 'required' => 'required']) !!}
                                                                <span class="input-group-addon">km</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-walk-to-bus','Walk to bus') !!}
                                                            <div class="input-group">
                                                                {!! Form::text('submit-walk-to-bus', null, ['class' => 'form-control', 'id' => 'submit-walk-to-bus', 'required' => 'required']) !!}
                                                                <span class="input-group-addon">min</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-rooms', 'Rooms') !!}
                                                            {!! Form::text('submit-rooms', null, ['class' => 'form-control', 'id' => 'submit-rooms', 'pattern' => '\d*', 'required' => 'required']) !!}
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::label('submit-baths', 'Baths') !!}
                                                            {!! Form::text('submit-baths', null, ['class' => 'form-control', 'id' => 'submit-baths', 'pattern' => '\d*', 'required' => 'required']) !!}
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
                                                        {{-- Make the images below be images[] later, for now only accept one picture. Also add 'multiple=>true--}}
                                                        {!! 
                                                            Form::file('image', [
                                                                'id' => 'file-upload', 
                                                                'type' => 'file',
                                                                'class' => 'file', 
                                                                'data-show-upload' => 'false', 
                                                                'data-show-caption' => 'false', 
                                                                'data-show-remove' => 'false', 
                                                                'accept' => 'image/jpeg,image/png', 
                                                                'data-browse-class' => 'btn btn-default', 
                                                                'data-browse-label' => 'Browse Images'
                                                            ])
                                                        !!}
                                                        <figure class="note">You can upload all images at once!</figure> 
                                                        <hr>
                                                        <figure class="note"><strong>Must remain below 3mb total.</strong></figure>
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
                    <div class="col-md-3 col-sm-3">
                        <aside class="submit-step">
                            <figure class="step-number">2</figure>
                            <div class="description">
                                <h4>Enter Information About Property</h4>
                                <p>Type information about your property. Be descriptive.
                                </p>
                            </div>
                        </aside><!-- /.submit-step -->
                    </div><!-- /.col-md-3 -->
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="block">
                    <div class="col-md-9 col-sm-9">
                        <div class="center">
                            <div class="form-group">
                                {!! Form::submit('Submit!', ['class' => 'btn btn-default large'])!!}
                            </div><!-- /.form-group -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <aside class="submit-step">
                            <figure class="step-number">3</figure>
                            <div class="description">
                                <h4>Review Information and Submit!</h4>
                                <p>Carefully check entered information and then your submission is complete.
                                </p>
                            </div>
                        </aside><!-- /.submit-step -->
                    </div><!-- /.col-md-3 -->
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