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
        } 
    ?>
    <div class="container">
        <div class="row">
            <!-- Property Detail Content -->
            <div class="col-md-9 col-sm-9">
                <section id="property-detail">
                    <header class="property-title">
                        <h1>{!! $data->address !!}</h1>
                        <figure>{!! $data->city . ', ' . $data->province !!}</figure>
                    </header>
                    <section id="property-gallery">
                        <div class="owl-carousel property-carousel">
                            {{-- There is always minimum one photo, enforced by form submission. --}}
                            <?php 
                                $all_images = scandir($data->image);

                                // echo var_dump($all_images);

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
                                        <dd><span class="tag price">${!! $data->price !!}</span></dd>
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
                        </div><!-- /.col-md-8 -->
                        <div class="col-md-12 col-sm-12">
                            <section id="contact-agent">
                                {{-- Must fill this out with just a request form. We receive requests and forward that to the landlord email provided on landlord registration. --}}

                                <?php 
                                    $email = $data->{'landlord-email'};
                                    $landlord = DB::select(constant("LANDLORD_BY_EMAIL") . "'$email'")[0];
                                    $landlord_name = $landlord->name;
                                ?>
                                <header><h2>Interested? Submit a Request!</h2></header>
                                <?php 
                                    $readonly = false;
                                    if(!Auth::check()) {
                                        // If the current user is not logged in, they cannot submit a request.
                                        echo "<h2 class=\"error\">You must be logged in as a student to submit a request.</h2>"; 
                                        $readonly = true;
                                    } else {
                                        $user = Auth::user();
                                        $all_landlords = DB::select(constant("USER_BY_LANDLORD"));

                                        // If the current users email matches any landlords, don't let them submit a request
                                        foreach($all_landlords as $i => $u) {
                                            if($user->email == $u->email) {
                                                $readonly = true;
                                                echo "<h2 class=\"error\">You must be logged in as a student to submit a request.</h2>"; 
                                            }
                                        }
                                    }
                                ?>
                                <div class="row">
                                    <section class="agent-form">
                                        <div class="col-md-7 col-sm-12">
                                            <aside class="agent-info clearfix">
                                                <div class="agent-contact-info">
                                                    <h3>Landlord Name: <span style="font-weight:bold;text-decoration:underline;">{!! $landlord_name !!}</span></h3>
                                                    <p>We will connect you with the landlord for this property, and let them know that you are interested! When contacting the landlord, please feel free to request any extras you'd like considered. We at Cross Border Housing will always do our best to guarantee you a smooth experience when choosing your new home.</p>
                                                    <hr>
                                                </div>
                                            </aside><!-- /.agent-info -->
                                        </div><!-- /.col-md-7 -->
                                        <div class="col-md-5 col-sm-12">
                                            <div class="agent-form">
                                                {!! Form::open(['url' => 'contact-landlord', 'class' => 'clearfix']) !!}
                                                    <div class="form-group">
                                                        {!! Form::label('form-contact-agent-name', 'Your Name*')!!}
                                                        <?php
                                                            // Defines if the user should be able to submit a request, or be prompted to login
                                                            if(!$readonly) {
                                                                echo Form::text('form-contact-agent-name', null, ['class' => 'form-control', 'required' => 'required']);
                                                            } else {
                                                                echo Form::text('form-contact-agent-name', null, ['class' => 'form-control', 'required' => 'required', 'readonly']);
                                                            }
                                                        ?>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        {!! Form::label('form-contact-agent-email', 'Your Email*') !!}
                                                        <?php
                                                            if(!$readonly) {
                                                                echo Form::email('form-contact-agent-email', null, ['class' => 'form-control', 'required' => 'required']);
                                                            } else {
                                                                echo Form::email('form-contact-agent-email', null, ['class' => 'form-control', 'required' => 'required', 'readonly']);
                                                            }
                                                        ?>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        {!! Form::label('form-contact-agent-message', 'Your Message*') !!}
                                                        <?php
                                                            if(!$readonly) {
                                                                echo Form::text('form-contact-agent-message', null, ['class' => 'form-control', 'rows' => '2', 'required' => 'required']);
                                                            } else {
                                                                echo Form::text('form-contact-agent-message', null, ['class' => 'form-control', 'rows' => '2', 'required' => 'required', 'readonly']);
                                                            }
                                                        ?>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <?php
                                                            if(!$readonly) {
                                                                echo Form::submit('Send a Message', ['class'=>'btn pull-right btn-default']);
                                                            } else {
                                                                echo Form::submit('Send a Message', ['class' => 'btn pull-right btn-default', 'disabled']);
                                                            }
                                                        ?>
                                                    </div><!-- /.form-group -->
                                                    <div id="form-contact-agent-status"></div>
                                                    {!! Form::token() !!}
                                                    {!! Form::hidden('landlord-name',"$landlord_name") !!}
                                                    {!! Form::hidden('landlord-email', "$email") !!}
                                                    {!! Form::hidden('property-id', "$data->id") !!}
                                                    {!! Form::hidden('property-address', "$data->address, $data->city $data->province") !!}
                                                {!! Form::close() !!}
                                            </div><!-- /.agent-form -->
                                        </div><!-- /.col-md-5 -->
                                    </section><!-- /.agent-form -->
                                </div><!-- /.row -->
                            </section><!-- /#contact-agent -->
                            <hr class="thick">
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </section><!-- /#property-detail -->
                 <?php 
                    if(Auth::check() && $email == $user->email) {
                        // Current user is the landlord of this property. Allow them the option of deletion.
                        echo "<h3>Landlord Options (Seen only by you)</h3>";
                         echo "<p>Select here if you wish to delete this property.<span style='font-weight:bold;text-decoration:underline;'>This will permanently delete your property. The only way to undo this is to upload it again via the Submit page.</span></p>";
                        ?>
                        {!! Form::open(['url' => 'delete-property', 'class' => 'clearfix']) !!}
                        {!! Form::label('confirm-email', 'Confirm your email address to delete this property.') !!}
                        {!! Form::text('confirm-email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
                        <div class="warning center">
                            {!! Form::submit('Delete Property', ['class' => 'warning btn center btn-default']) !!}
                        </div>
                        {!! Form::hidden('property-id', "$data->id") !!}
                        {!! Form::token() !!}
                        {!! Form::close() !!}
                        <?php
                    }
                ?>
            </div><!-- /.col-md-9 -->
            <!-- end Property Detail Content -->
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- page-content -->
@stop

@section('map-script')
<script type="text/javascript">
    // Initialize the Owl Carousel for the gallery of property photos.
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
@endsection