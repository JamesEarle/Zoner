@extends('app')

@section('body-tag')
<body class="page-sub-page page-contact" id="page-top">
@stop

@section('content')

<div id="content">
<!-- Page Content -->
	<div id="page-content">
	    <!-- Breadcrumb -->
	    <div class="container">
	        <ol class="breadcrumb">
	            <li><a href="#">Home</a></li>
	            <li class="active">Contact</li>
	        </ol>
	    </div>
	    <!-- end Breadcrumb -->

	    <div class="container">
	        <div class="row">
	            <!-- Contact -->
	            <div class="col-md-9 col-sm-9">
	                <section id="agent-detail">
	                    <header><h1>Contact Us</h1></header>
	                    <section id="contact-information">
	                        <div class="row">
	                            <div class="col-md-4 col-sm-5">
	                                <section id="address">
	                                    <header><h3>Address</h3></header>
	                                    <address>
	                                        <strong>Cross Border Housing Inc.</strong>
	                                        <br>
	                                        	1812 Isaac Brock Boulevard
	                                        <br>
	                                        	St. Catharines, ON L2S 3A1
	                                    </address>
	                                    +1 (647) 404-3067<br>
	                                    <a href="mailto:info@cbhousing.ca">info@cbhousing.ca</a><br>
	                                </section><!-- /#address -->
	                                <section id="social">
	                                    <header><h3>Social Profiles</h3></header>
	                                    <div class="agent-social">
	                                        <a href="https://twitter.com/CBHBrock" class="fa fa-twitter btn btn-grey-dark"></a>
	                                        <a href="https://www.facebook.com/Crossborderhousing" class="fa fa-facebook btn btn-grey-dark"></a>
	                                        <a href="https://www.linkedin.com/company/cross-border-housing-inc-?trk=company_logo" class="fa fa-linkedin btn btn-grey-dark"></a>
	                                    </div>
	                                </section><!-- /#social -->
	                            </div><!-- /.col-md-4 -->
	                            <div class="col-md-8 col-sm-7">
	                                <header><h3>Where We Are</h3></header>
	                                <div id="contact-map"></div>
	                            </div><!-- /.col-md-8 -->
	                        </div><!-- /.row -->
	                    </section><!-- /#agent-info -->
	                    <hr class="thick">
	                    <section id="form">
	                        <header><h3>Send Us a Message</h3></header>
	                        {!! Form::open(['url' => 'contact', 'class' => 'clearfix']) !!}
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                    	{!! Form::label('form-contact-name', 'Your Name*', ['required' => 'required']) !!}
	                                    	{!! Form::text('form-contact-name', null, ['class' => 'form-control', 'id' => 'form-contact-name'])!!}
	                                    </div><!-- /.form-group -->
	                                </div><!-- /.col-md-6 -->
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                    	{!! Form::label('form-contact-email', 'Your Email*', ['required' => 'required']) !!}
	                                    	{!! Form::text('form-contact-email', null, ['class' => 'form-control', 'id' => 'form-contact-email'])!!}
	                                    </div><!-- /.form-group -->
	                                </div><!-- /.col-md-6 -->
	                            </div><!-- /.row -->
	                            <div class="row">
	                                <div class="col-md-12">
	                                    <div class="form-group">
	                                    	{!! Form::label('form-contact-message', 'Your Message*', ['required' => 'required']) !!}
	                                    	{!! Form::textarea('form-contact-message', null, ['class' => 'form-control', 'id' => 'form-contact-message'])!!}
	                                    </div><!-- /.form-group -->
	                                </div><!-- /.col-md-12 -->
	                            </div><!-- /.row -->
	                            <div class="form-group clearfix">
	                            	{!! Form::submit('Send a Message', ['class' => 'btn pull-right btn-default', 'id' => 'form-contact-submit']) !!}
	                            </div><!-- /.form-group -->
	                            <div id="form-status"></div>
	                        	{!! Form::token() !!}
	                        {!! Form::close() !!}
	                    </section>
	                </section><!-- /#agent-detail -->
	            </div><!-- /.col-md-9 -->
	            <!-- end Contact -->

	            @include('sidebar-search');
	            
	        </div><!-- /.row -->
	    </div><!-- /.container -->
	</div>
</div>
<!-- end Page Content -->

@endsection

{{-- Any pages that use an interactive map need to yield this portion, but app.blade.php yields AFTER script.blade.php,
	that is an important order. --}}
@section('map-script')
<script>
    //Brock U
    _latitude = 43.118324;
    _longitude = -79.247684;

    //Contact map
    google.maps.event.addDomListener(window, 'load', contactUsMap(_latitude,_longitude, "{{ URL('/img/') }}"));
</script>
@endsection