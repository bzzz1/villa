<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=1200'>
		
		<link rel="shortcut icon" href="{{ asset('img/markup/favicon.ico') }}">

		{{ HTML::style('css/vendor/bootstrap.min.css') }}
		{{ HTML::style('css/vendor/font-awesome.min.css') }}
		{{ HTML::style('css/style.css') }}

		{{ HTML::script('js/vendor/jquery.min.js') }}
		{{ HTML::script('js/vendor/bootstrap.min.js') }}

		@yield('css')
	</head>

	<body>
		@yield('header')
		<div class="main_content">
			@yield('catalog')
		</div>
		@yield('footer')

		{{ HTML::script('js/script.js') }}
		{{ HTML::script('js/navigation.js') }}

		@yield('js')
	</body>
</html>