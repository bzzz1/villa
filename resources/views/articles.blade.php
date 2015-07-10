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
					@if (true == $article->preview ) 
						<div class="block_img">
							<a href='{{l('article', [$article->title, $article->article_id])}}' >
								<img src='{{ url_path('articles')."/$article->preview" }}' alt="{{$article->title}}" class="admin_article_minimg article_image article_image">	
							</a>	
						</div>
					@else 
						<div class="block_img">
							<img src="{{ url_path('articles')."/alien.png" }}" alt="{{$article->title}}" class="admin_article_minimg article_image article_image">		
						</div>
					@endif	
				</div>
				<div class="article_text">
					<div class="article_heading">
						<a href="{{l('article', [$article->title, $article->article_id])}}" class="admin_article_title  title_link">
							{{$article->title}}
						</a> 
						<a href="{{l('article', [$article->title, $article->article_id])}}" class="admin_article_title  title_link full">
							{{$article->title}}
						</a> 
					</div>
					<div class="text_itself"><p>{{$article->body}}</p></div>
					<a href="{{l('article', [$article->title, $article->article_id])}}" class="more">Подробнее <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		@endforeach	
	</div>
@stop