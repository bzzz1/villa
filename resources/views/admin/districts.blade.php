 {{-- Page to display districts --}}

@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')

@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">Все районы</h1>
	<div class="admin_main_content">
		<div class="admin_catalog_category">
			@foreach ($towns as $town)
				<?php $districts = $town->districts; ?>
				<div class="uni_display">
					<h4 class="admin_one_cat_heading uni_title">Районы города {{ $town->town }}</h4>
				</div>
				<div class="block_marg uni_display">
					<span class="admin_one_town_add admin_town_style district_townModal" data-town-id ="{{ $town-> town_id }}">
						<i class="fa fa-plus">&nbsp</i>
						Добавить район
					</span>
				</div>
				<div class="uni_block_main">
					<ul class="first_column uni_description_block">
					@foreach (columnize($districts, 3, 1) as $district)
						@include('partials/district_block')
				 	@endforeach
				 	</ul>
				 	<ul class="second_column uni_description_block">
					@foreach (columnize($districts, 3, 2) as $district)
						@include('partials/district_block')
				 	@endforeach
				 	</ul>
					<ul class="Tthird_column uni_description_block">
					@foreach (columnize($districts, 3, 3) as $district)
						@include('partials/district_block')
				 	@endforeach
				 	</ul>
				</div>
			@endforeach
			@include('partials/district_popup_blocks')
		</div>
	</div>
@stop