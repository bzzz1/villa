@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')

@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">Все города</h1>
	<div class="admin_main_content">
		<div class="admin_catalog_category">
			<div class="uni_display">
				<h4 class="admin_one_cat_heading uni_title">Города</h4>
			</div>
			<div class="block_marg uni_display">
				<span class="admin_one_town_add admin_town_style district_townModal">
					<i class="fa fa-plus">&nbsp</i>
					Добавить город
				</span>
			</div>
			<div class="uni_block_main">
				<ul class="first_column uni_description_block">
				@foreach (columnize($towns, 3, 1) as $town)
					@include('partials/town_block')
			 	@endforeach
			 	</ul>
			 	<ul class="second_column uni_description_block">
				@foreach (columnize($towns, 3, 2) as $town)
					@include('partials/town_block')
			 	@endforeach
			 	</ul>
				<ul class="Tthird_column uni_description_block">
				@foreach (columnize($towns, 3, 3) as $town)
					@include('partials/town_block')
			 	@endforeach
			 	</ul>
			</div>
			@include('partials/town_popup_blocks')
		</div>
	</div>
@stop
