@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')

@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">Список новостей</h1>
	<div class="admin_main_content">
		<div class="uni_display">
			<h4 class="admin_one_cat_heading uni_title">Новости</h4>
		</div>
		<div class="uni_block_main">
			<div class="center">
				<div class="first_column first_colum_article uni_description_block">
					@foreach (columnize($articles, 3, 1) as $article)
						@include('partials/article_block')
					@endforeach
				</div>
				<div class="second_column uni_description_block">
					@foreach (columnize($articles, 3, 2) as $article)
						@include('partials/article_block')
					@endforeach
				</div>
				<div class="third_column uni_description_block">
					@foreach (columnize($articles, 3, 3) as $article)
						@include('partials/article_block')
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop