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
            <li class="active">Sign In</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <header><h1>Sign In</h1></header>
        <p class=""> </p>
        <p class=""> </p>
            <p class=""> </p>
                <p class=""> </p>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                {!! Form::open(['url' => 'signin']) !!}
                    <div class="form-group">
                        <?php
                            // Checking session errors that are returned on invalid form input
                            switch(Session::get('message')) {
                                case 'not-found':
                                    echo '<p style="background-color:#ffcece;">It seems this email is not in our records.</p>';
                                    break;
                                case 'bad-pass':
                                    echo '<p style="background-color:#ffcece;">Incorrect email/password combination.</p>';
                                    break;
                            }
                        ?>
                        {!! Form::label('form-account-email', 'Email') !!}
                        {!! Form::email('form-account-email', null, ['class' => 'form-control']) !!}
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        {!! Form::label('form-account-password', 'Password') !!}
                        {!! Form::password('form-account-password', null, ['class' => 'form-control']) !!}
                    </div><!-- /.form-group -->
                    <div class="form-group clearfix">
                        {!! Form::submit('Sign In', ['class' => 'btn pull-right btn-default', 'id' => 'account-submit']) !!}
                    </div><!-- /.form-group -->
                {!! Form::close() !!}
                <hr>
                <div class="center"><a href="#">I don't remember my password</a></div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection