@extends('app')

@section('body-tag')
<body class="page-sub-page page-about-us" id="page-top">
@stop

@section('content')

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}">Home</a></li>
            <li class="active">About Us</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- About Us -->
            <div class="col-md-12 col-sm-12">
                <section id="about-us">
                    <header><h1>About Us</h1></header>
                    <section id="ceo-section" class="center">
                        <header class="center"><div class="cite-title">Serving you since 2015</div></header>
                        <div class="cite no-bottom-margin">
                        	A startup from St. Catharines, Ontario, and winner of entrepeneurship competitions like Monster Pitch and Scotiabank's Startup Weekend, our goal is to make off campus living as easy as possible for international or non-local students. 
                        </div>
                        <hr class="divider">
                        <img alt="" class="image circle" src="{{ asset('/img/portraits/alex.jpg') }}">

                        <div class="wrapper">
                            <h3>Alex Mohr</h3>
                            <dl>
                                <dt>Phone:</dt>
                                <dd>+1 (705) 440-8237</dd>
                                <dt>Email:</dt>
                                <dd><a href="mailto:alex@cbhousing.ca">alex@cbhousing.ca</a></dd>
                            </dl>
                        </div>
                        <div class="background-image"><img alt="" src="{{ asset('/img/about-us-bg.jpg') }}"></div>
                    </section><!-- /#ceo-section -->
                    <div class="divider-image center"><img alt="" src="{{ asset('/img/sine-wave.png') }}"></div>
                    <section id="our-team">
                        <header class="center"><h2 class="no-border">Our Team</h2></header>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member">
                                    <img alt="" class="image circle" src="{{ asset('/img/portraits/cody-140x140.png') }}"></a>
                                    <div class="wrapper">
                                        <h3>Cody Murdoch</h3>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>+1 (705) 794-5837</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:cody@cbhousing.ca">cody@cbhousing.ca</a></dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member">
                                <img alt="" class="image circle" src="{{ asset('/img/portraits/james.jpg') }}"></a>
                                    <div class="wrapper">
                                        <h3>James Earle</h3>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>+1 (647) 404-3067</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:james@cbhousing.ca">james@cbhousing.ca</a></dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member">
                                    <img alt="" class="image circle" src="{{ asset('/img/portraits/preston.jpg') }}">
                                    <div class="wrapper">
                                        <h3>Preston Engstrom</h3>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>+1 (905) 931-0355</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:preston@cbhousing.ca">preston@cbhousing.ca</a></dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
                    </section><!-- /#our-tem -->
                    <br><hr><br>
                    {{-- make testimonials work  --}}
                    {{-- <section id="testimonials" class="block"> --}}
                        {{-- <header class="center"><h2 class="no-border">What other said about us</h2></header> --}}
                        
                        {{-- @include('testimonials') --}}

                    {{-- </section>/#testimonials --}}
                </section><!-- /#about-us -->
            </div><!-- /.col-md-12 -->
            <!-- end About Us -->
            <!-- Sidebar goes here -->
            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection