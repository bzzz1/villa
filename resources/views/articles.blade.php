@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
	<div class="full_green">
		<h1>новости</h1>
	</div>
	<div class="articles">
		@foreach($articles as $article)
			<div class="one_article">
				<div class="articles_img">
					{{-- @if ($article->image) --}}
						{{-- <a href="{{l('article', [$atrticle->article_id])}}"> --}}
							{{-- {{HTML::image('img/photos/articles/$article->image', '$article->title')}} --}}
						{{-- </a> --}}
					{{-- @else	 --}}
						<a href="{{l('article', [$article->article_id])}}">
							{{HTML::image('img/photos/articles/alien.png', '$article->title')}}
						</a>
					{{-- @endif	  --}}
				</div>
				<div class="article_text">
					<h3>Lorem ipsum.</h3>
					<div class="text_itself">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet vel, cumque quos saepe blanditiis sint. Nihil placeat atque culpa aperiam sequi, voluptate molestiae quibusdam soluta tempora fugiat laudantium in.</p>
					</div>
					<a href="#" class="more">Подробнее <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
					<a href="{{l('article', [$article->article_id])}}">
							<h3>{{$article->title}}</h3>
					</a> 
					<div class="text_itself">{{$article->body}}</div>
					<a href="{{l('article', [$article->article_id])}}" class="more">Подробнее <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		@endforeach	
	</div>
@stop