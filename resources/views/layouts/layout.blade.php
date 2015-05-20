<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	{{ HTML::style('css/vendor/bootstrap.min.css') }}
	{{ HTML::style('css/vendor/font-awesome.min.css') }}
	{{ HTML::style('css/style.css') }}


	{{ HTML::script('js/vendor/jquery.min.js') }}
	{{ HTML::script('js/vendor/bootstrap.min.js') }}

	@yield('css')
</head>

<body>
	@yield('header')
	@yield('body')
	@yield('footer')

	{{ HTML::script('js/script.js') }}

	@yield('js')
</body>
</html>