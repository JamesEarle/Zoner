@extends('app')

@section('body-tag')
<body class="page-sub-page page-sign-in page-account" id="page-top">
@stop

@section('content')

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{URL('/')}}">Home</a></li>
            <li class="active">Admin Sign In</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <header><h1>Admin Sign In</h1></header>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <?php
                    if(!Auth::check()) return redirect('/');

                    $user = Auth::user();

                    $trusted = array(
                        'alex@cbhousing.ca',
                        'cody@cbhousing.ca',
                        'j_earle@hotmail.com'
                    );

                    if(in_array($user->email, $trusted)) {
                        // Display everything
                        echo "Hello everybody!";
                    } else {
                        // Unwanted user, redirect home.
                        header("Location: http://");
                        die(1);
                    }
                ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection
