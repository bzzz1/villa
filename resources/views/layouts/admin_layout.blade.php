<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=1200'>
	@yield('meta')
	<title>Крым-Вилла административный доступ</title>
	<link rel="shortcut icon" href="{{ asset('img/markup/favicon_admin.ico') }}">
	{{ HTML::style('http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&subset=latin,cyrillic-ext') }}
	{{ HTML::style('css/vendor/bootstrap.min.css') }}
	{{ HTML::style('css/vendor/font-awesome.min.css') }}
	{{ HTML::style('css/vendor/jBox/jBox.css') }}
	{{ HTML::style('css/vendor/dropzone.css') }}
	{{ HTML::style('css/vendor/jquery.nouislider.min.css') }}
	
	{{ HTML::style('css/admin.css') }}

	{{ HTML::script('js/vendor/dropzone.js') }}
	{{ HTML::script('js/vendor/jquery.min.js') }}
	{{ HTML::script('js/vendor/bootstrap.min.js') }}
	{{ HTML::script('js/vendor/jBox.min.js') }}
	{{ HTML::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAPItNtZn6wxRNqm0wp1Eg6ujAsJy33tN0') }}


	{{ HTML::script('js/vendor/jquery.nouislider.all.min.js') }}

	{{ HTML::script('packages/ckeditor/ckeditor.js') }}
	{{ HTML::script('packages/ckfinder/ckfinder.js') }}
	{{ HTML::script('js/vendor/translit.js') }}
	{{ HTML::script('js/vendor/jquery.scrollUp.min.js') }}


	@yield('css')
</head>

<body>
	@yield('header')
	@yield('left_sidebar')
	<div class="container_main">
		@yield('body')
	</div>	
	@yield('footer')
	{{Form::token()}}


	{{ HTML::script('js/admin.js') }}
	{{ HTML::script('js/admin_modals.js') }}
	<script>
		@include('partials/js_globals')
		@yield('js')
	</script> 
	{{ HTML::script('js/script.js') }}
</body>
</html>