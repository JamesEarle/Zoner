<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Request from {{ $name }} for {{ $landlord_name }}</h2>

		<div>
		</div>
		<div>
			<h4>Student Information</h4>
			<p>
				<ul>
					<li>{{ $name }}</li>
					<li>{!! $email !!}</li>
				</ul>
			</p>
		</div>
		</br>
		<div>
			<h2>Message</h2>
			<p>{{ $body }}</p>
		</div>
		<br>
		<hr>
		<br>
		<div>
			<h2>Additional Information</h2>
			<p>
				<ul>
					<li>Landlord Name: {{ $landlord_name }}</li>
					<li>Landlord email: {!! $landlord_email !!}</li>
					<li>Property ID: {{ $property_id }}</li>
					<li>Property Address: {{ $property_address }}</li>
				</ul>
			</p>
		</div>
		<br>
		<hr>
		<br>
		<footer>
			{{ $footer }}
		</footer>
	</body>
</html>