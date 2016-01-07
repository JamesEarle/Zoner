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
                {!! Form::open(['url' => 'admin']) !!}
                    <div class="form-group">
                        <?php
                            // Checking session errors that are returned on invalid form input
                            switch(Session::get('message')) {
                                case 'not-found':
                                    echo '<h2 class="error">It seems this email is not in our records.</h2>';
                                    break;
                                case 'bad-pass':
                                    echo '<h2 class="error">Incorrect email/password combination.</p>';
                                    break;
                            }
                        ?>
                        {!! Form::label('form-admin-email', 'Email') !!}
                        {!! Form::email('form-admin-email', null, ['class' => 'form-control']) !!}
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        {!! Form::label('form-admin-password', 'Password') !!}
                        {!! Form::password('form-admin-password', null, ['class' => 'form-control']) !!}
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
