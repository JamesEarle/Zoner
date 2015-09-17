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
                <h3>Account Type</h3>
                <form role="form" id="form-create-account" method="post" >
                    <div class="radio" id="create-account-user">
                        <label>
                            <input type="radio" id="account-type-user" name="account-type" required>Student
                        </label>
                    </div>
                    <div class="radio" id="agent-switch" data-agent-state="">
                        <label>
                            <input type="radio" id="account-type-agent" name="account-type" required>Landlord
                        </label>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="form-create-account-full-name">Full Name:</label>
                        <input type="text" class="form-control" id="form-create-account-full-name" required>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="form-create-account-email">Email:</label>
                        <input type="email" class="form-control" id="form-create-account-email" required>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="form-create-account-password">Password:</label>
                        <input type="password" class="form-control" id="form-create-account-password" required>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="form-create-account-confirm-password">Confirm Password:</label>
                        <input type="password" class="form-control" id="form-create-account-confirm-password" required>
                    </div><!-- /.form-group -->
                    <div class="form-group clearfix">
                        <button type="submit" class="btn pull-right btn-default" id="account-submit">Create an Account</button>
                    </div><!-- /.form-group -->
                </form>
                <hr>
                <div class="center">
                    <figure class="note">By clicking the “Create an Account” button you agree with our <a href="terms-conditions.html">Terms and conditions</a></figure>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

@endsection