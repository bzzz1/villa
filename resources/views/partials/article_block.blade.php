<div class="article_one_block">
	@if (true == $article->preview ) 
		<div class="block_img">
			<img src="{{ url_path('articles')."/$article->preview" }}" alt="{{$article->title}}" class="admin_article_minimg article_image article_image">		
		</div>
	@else 
		<div class="block_img">
			<img src="{{ url_path('articles')."/alien.png" }}" alt="{{$article->title}}" class="admin_article_minimg article_image article_image">		
		</div>
	@endif	
	<div class="admin_article_title height_overflow">
		<a href='{{URL::to("admin/change_article/$article->article_id")}}' class="admin_article_title_1">{{$article->title}}
		</a>
	</div> 						
	<div class="admin_article_date">
		{{$article->time}}&nbsp&nbsp&nbsp
		<div class="uni_display">
			<a href='{{URL::to("admin/change_article/$article->article_id")}}' class="admin_article_title_1">
				<i class="fa fa-pencil change_article_icon"></i>
			</a>
		</div> 
		<div class="uni_display">
			{{  Face::delete('article', $article->article_id, true, ['class'=>'delete_items_group_icon']) }}
		</div>
	</div>
</div>