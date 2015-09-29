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
                        <a href="agent-detail.html" class="image"><img alt="" src="{{ asset('/img/portraits/alex.jpg') }}"></a>
                        <a href="agent-detail.html"><h3>Alex Mohr</h3></a>
                        <figure class="subtitle">CEO</figure>
                        <div class="background-image"><img alt="" src="{{ asset('/img/about-us-bg.jpg') }}"></div>
                    </section><!-- /#ceo-section -->
                    <div class="divider-image center"><img alt="" src="{{ asset('/img/sine-wave.png') }}"></div>
                    <section id="our-team">
                        <header class="center"><h2 class="no-border">Our Team</h2></header>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-5 col-sm-offset-1 col-sm-5">
                                <div class="member">
                                    <a href="agent-detail.html" class="image"><img alt="" src="{{ asset('/img/client-01.jpg') }}"></a>
                                    <div class="tag">CFO</div>
                                    <div class="wrapper">
                                        <a href="agent-detail.html"><h3>Cody Murdoch</h3></a>
                                        <figure class="subtitle">Student</figure>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>(123) 456 789</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                            <dt>Skype:</dt>
                                            <dd>john.doe</dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-5 col-sm-5">
                                <div class="member">
                                    <a href="agent-detail.html" class="image"><img alt="" src="{{ asset('/img/portraits/preston.jpg') }}"></a>
                                    <div class="tag">CTO</div>
                                    <div class="wrapper">
                                        <a href="agent-detail.html"><h3>Preston Engstrom</h3></a>
                                        <figure class="subtitle">Student</figure>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>(123) 456 789</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                            <dt>Skype:</dt>
                                            <dd>john.doe</dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-5 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member">
                                    <a href="agent-detail.html" class="image"><img alt="" src="{{ asset('/img/portraits/james.jpg') }}"></a>
                                    <div class="tag">Lead Developer</div>
                                    <div class="wrapper">
                                        <a href="agent-detail.html"><h3>James Earle</h3></a>
                                        <figure class="subtitle">Student</figure>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>+1 (647) 404-3067</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:j_earle@hotmail.com">j_earle@hotmail.com</a></dd>
                                            <dt>Skype:</dt>
                                            <dd>james_earle1</dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member">
                                    <a href="agent-detail.html" class="image"><img alt="" src="{{ asset('/img/member-03.jpg') }}"></a>
                                    <div class="wrapper">
                                        <a href="agent-detail.html"><h3>Harrison Olajos</h3></a>
                                        <figure class="subtitle">Student</figure>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>(123) 456 789</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                            <dt>Skype:</dt>
                                            <dd>john.doe</dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member">
                                    <a href="agent-detail.html" class="image"><img alt="" src="{{ asset('/img/member-04.jpg') }}"></a>
                                    <div class="wrapper">
                                        <a href="agent-detail.html"><h3>Madi Fuller</h3></a>
                                        <figure class="subtitle">Agent</figure>
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>(123) 456 789</dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                            <dt>Skype:</dt>
                                            <dd>john.doe</dd>
                                        </dl>
                                    </div>
                                </div><!-- /.member -->
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
                    </section><!-- /#our-tem -->

                    <section id="fun-facts" class="block counting-numbers">
                        <header class="center"><h2 class="no-border">Fun Facts</h2></header>
                        <div class="row">
                            <div class="fun-facts">
                                <div class="col-md-3">
                                    <div class="number-wrapper">
                                        <div class="number" data-from="1" data-to="136">136</div>
                                        <figure>Properties Listed</figure>
                                    </div><!-- /.number-wrapper -->
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-3">
                                    <div class="number-wrapper">
                                        <div class="number" data-from="1" data-to="2145">2145</div>
                                        <figure>Satisfied Clients</figure>
                                    </div><!-- /.number-wrapper -->
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-3">
                                    <div class="number-wrapper">
                                        <div class="number" data-from="1" data-to="468">468</div>
                                        <figure>Properties Sold</figure>
                                    </div><!-- /.number-wrapper -->
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-3">
                                    <div class="number-wrapper">
                                        <div class="number" data-from="1" data-to="5475">5475</div>
                                        <figure>Days Spent Helping You</figure>
                                    </div><!-- /.number-wrapper -->
                                </div><!-- /.col-md-3 -->
                            </div><!-- /.fun-facts -->
                        </div><!-- /.row -->
                    </section><!-- /#fun-facts -->
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