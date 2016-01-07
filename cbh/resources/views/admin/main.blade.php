@extends('app')

@section('body-tag')
<body class="page-sub-page page-sign-in page-account" id="page-top">
@stop

@include('admin.security')

@section('content')

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{URL('/')}}">Home</a></li>
            <li class="active">Admin Portal</li>
        </ol>
    </div>

    <!-- end Breadcrumb -->
    <div class="container">
        <header><h1>Admin Portal</h1></header>
        <div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
        <!-- <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="home active">Home</li>
                    <li class="landlords">Properties</li>
                    <li class="requests">Landlords</li>
                    <li class="properties">Users</li>
                <ul>
            </div>
        </div>--> <!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection
