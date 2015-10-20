@extends('app')

@section('body-tag')
<body class="page-sub-page page-404 page-error" id="page-top">
@stop

@section('content')
<!-- Page Content -->
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">500</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <section id="500">
            <div class="error-page">
                <div class="title">
                    <img alt="" src="{{ asset('/img/error-page-background.png') }}" class="top">
                    <header>500</header>
                    <img alt="" src="{{ asset('/img/error-page-background.png') }}" class="bottom">
                </div>
                <h2 class="no-border">Internal Server Error</h2>
                <a href="" class="link-arrow back" onclick="history.back(-1)">Go Back</a>
            </div>
        </section>
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@endsection