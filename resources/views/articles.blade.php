@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
	<div class="one_article">
		<div class="articles_img">
			{{HTML::image('img/photos/newa/alien.png', 'krim villa logo')}}
		</div>
		<div class="article_text">
			<h3>Lorem ipsum dolor sit.</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, atque.</p>
			<a href="#" class="more">Подробнее <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
@stop