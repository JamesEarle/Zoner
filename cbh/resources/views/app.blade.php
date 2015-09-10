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

		<!-- Simple footer bar with copyright -->
		@include('footer-simp')

		<!-- JS Files -->
		@include('script')
	</div>
</body>
</html>