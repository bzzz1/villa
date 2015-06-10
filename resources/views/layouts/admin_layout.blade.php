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
	
	{{ HTML::style('css/admin.css') }}

	{{ HTML::script('js/vendor/jquery.min.js') }}
	{{ HTML::script('js/vendor/bootstrap.min.js') }}
	{{ HTML::script('js/vendor/jBox.min.js') }}
	{{ HTML::script('ckeditor/ckeditor.js') }}

	@yield('css')
</head>

<body>
	@yield('header')
	@yield('left_sidebar')
	<div class="container_main">
		@yield('body')
	</div>	
	@yield('footer')


	{{ HTML::script('js/admin.js') }}
	{{ HTML::script('js/admin_modals.js') }}
	<script>
		@yield('js')
	</script>
</body>
</html>