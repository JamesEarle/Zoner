<!DOCTYPE html>

<html lang="en">
<head>	
	@include('head')
</head>
@yield('body-tag')
	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Navigation -->
		@include('nav')

	    <!-- Page Content -->
		@yield('content')

		<!-- Footer -->
		@include('footer')

		<!-- JS Files -->
		@include('script')

	</div>
</body>
</html>