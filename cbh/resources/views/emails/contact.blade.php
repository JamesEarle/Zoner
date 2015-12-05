<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Contact Questions from {{ $name }}</h2>

		<div>
			{!! $email !!}
		</div>
		<div>
			{{ $name}}
		</div>
		</br>
		<div>
			{{ $body }}
		</div>
		<br>
		<hr>
		<br>
		<footer>
			{{ $footer }}
		</footer>
	</body>
</html>