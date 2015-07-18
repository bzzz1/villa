<div class="article_one_block">
	@if (true == $article->preview ) 
		<div class="block_img">
			<a href='{{URL::to("admin/change_article/$article->article_id")}}' >
				<img src='{{ url_path('articles')."/$article->preview" }}' alt="{{$article->title}}" class="admin_article_minimg article_image article_image">	
			</a>	
		</div>
	@else 
		<div class="block_img">
			<img src="{{ url_path('articles')."/alien.png" }}" alt="{{$article->title}}" class="admin_article_minimg article_image article_image">		
		</div>
	@endif	
	<div class="article_text">
		<div class="article_heading">
			<a href="{{l('article', [$article->title, $article->article_id])}}" class="title_link">
				{{$article->title}}
			</a> 
			<a href="{{l('article', [$article->title, $article->article_id])}}" class="title_link full">
				{{$article->title}}
			</a> 
		</div> 	
		<div class="admin_article_date">
			{{str_limit($article->added_on, 10, '')}}&nbsp&nbsp&nbsp
			<div class="uni_display">
				<a href='{{URL::to("admin/change_article/$article->article_id")}}'>
					<i class="fa fa-pencil change_article_icon description_icon"></i>
				</a>
			</div> 
			<div class="uni_display">
				{{  Face::delete('article', $article->article_id, true, ['class'=>'delete_items_group_icon description_icon']) }}
			</div>
		</div>					
	</div>	
</div>