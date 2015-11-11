@extends('app')

@section('body-tag')
<body class="page-sub-page page-create-account page-account" id="page-top">
@stop

@section('content')

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}">Home</a></li>
            <li class="active">Create an Account</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <header><h1>Create an Account</h1></header>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <?php 
                    // Checking session errors that are returned on invalid form input
                    switch(Session::get('message')) {
                        case 'email-in-use':
                            echo '<p style="background-color:#ffcece;">It seems that email is in use, please try again.</p>';
                            break;
                        case 'confirm':
                            echo '<p style="background-color:#ffcece;">Please correctly confirm your password.</p>';
                            break;
                        case 'alt':
                            echo '<p style="background-color:#ffcece;">We\'ve encountered an error, please try again later.</p>';
                            break;
                    }
                ?>
                <h3>Account Type</h3>
                <!-- <form role="form" id="form-create-account" method="post" > -->
                {!! Form::open(['url' => 'create']) !!}
                    <div class="radio" id="create-account-user">
                        <label>
                            {!! 
                                Form::radio('account-type', 'student', 
                                ['id' => 'account-type-user', 'required' => 'required']) 
                            !!}
                            <span>Student</span>
                        </label>
                    </div>
                    <div class="radio" id="agent-switch" data-agent-state="">
                        <label>
                            {!! 
                                Form::radio('account-type', 'landlord', 
                                ['id' => 'account-type-landlord', 'required' => 'required']) 
                            !!}
                            <span>Landlord</span>
                        </label>
                    </div>
                    <hr>
                    <div class="form-group">
                        {!! Form::label('form-create-account-full-name', 'Full Name') !!}
                        {!! 
                            Form::text('form-create-account-full-name', 
                            null, ['class' => 'form-control', 'id' => 'form-create-account-full-name', 'required' => 'required'])
                        !!}
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        {!! Form::label('form-create-account-email', 'Email'); !!}
                        {!! Form::email('form-create-account-email', 
                                null, ['class' => 'form-control', 'id' => 'form-create-account-email', 'required' => 'required']); !!}
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        {!! Form::label('form-create-account-password', 'Password') !!}
                        {!! 
                            Form::password('form-create-account-password', 
                            null, ['class' => 'form-control', 'id' => 'form-create-account-password', 'required' => 'required']) 
                        !!}
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        {!! Form::label('form-create-account-confirm-password', 'Confirm Password') !!}
                        {!! Form::password('form-create-account-confirm-password', 
                            null, ['class' => 'form-control', 'id' => 'form-create-account-confirm-password', 'required' => 'required']); !!}
                    </div><!-- /.form-group -->
                    <div class="form-group clearfix">
                        {!! Form::submit('Create an Account', ['class' => 'btn pull-right btn-default', 'id' => 'account-submit']) !!}
                    </div><!-- /.form-group -->
                <!-- </form> -->
                {!! Form::close() !!}
                <hr>
                <div class="center">
                    <figure class="note">By clicking the “Create an Account” button you agree with our <a href="{{ URL('/tos.pdf') }}">Terms and conditions</a></figure>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

@endsection