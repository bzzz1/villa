<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=1200'>
		
		<link rel="shortcut icon" href="{{ asset('img/layout/favicon.ico') }}">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,100,300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

		{{ HTML::style('css/vendor/bootstrap.min.css') }}
		{{ HTML::style('css/vendor/font-awesome.min.css') }}
		{{ HTML::style('css/vendor/jquery.nouislider.min.css') }}
		{{ HTML::style('css/style.css') }}

		{{ HTML::script('js/vendor/jquery.min.js') }}
		{{ HTML::script('js/vendor/bootstrap.min.js') }}
		{{ HTML::script('js/vendor/jquery.nouislider.all.min.js') }}

		@yield('css')
	</head>

	<body>
		@yield('header')
		{{-- <div class="main_content"> --}}
			@yield('body')
		{{-- </div> --}}
		@yield('footer')

		{{ HTML::script('js/script.js') }}
		{{ HTML::script('js/navigation.js') }}

		@yield('js')
	</body>
</html>