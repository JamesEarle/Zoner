@extends('app')

@section('body-tag')
<body class="page-sub-page page-sign-in page-account" id="page-top">
@stop

@include('admin.security')

@section('content')

<?php include_once(app_path()."/queries.php"); ?>

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}">Home</a></li>
            <li class="active">Admin Portal</li>
        </ol>
    </div>

    <!-- end Breadcrumb -->
    <div class="container">
        <header><h1>Admin Portal</h1></header>
        <div class="admin">
            <ul class="nav nav-tabs">
                <li><a href="{{ URL('/admin/main') }}">Home</a></li>
                <li><a href="{{ URL('/admin/users')}}">Users</a></li>
                <li class="active"><a href="{{ URL('/admin/properties') }}">Properties</a></li>
            </ul>
        </div>
        <div class="admin-body">
            @include('admin.partials.properties')
        </div>
    </div><!-- /.container -->

</div>
<!-- end Page Content -->

@endsection
