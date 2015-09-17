<!DOCTYPE html>

<html lang="en">
<head>	
	@include('head')
</head>
@yield('body-tag')
	{{-- TODO: Make it so when you select waterloo, st kitts, etc. the _long and _lat JS variables are changed --}}

	<!-- Wrapper -->
	<div class="wrapper">
		{{-- Nav bar --}}
		@include('nav')  

	    {{-- Page Content --}}
		@yield('content')

		{{-- Simple footer bar with copyright --}}
		@include('footer-simp')

		{{-- JS Files --}}
		@include('script')

		{{-- Any pages using google maps must yield their independent map script at the bottom. --}}
		@yield('map-script')
	</div>
</body>
</html>