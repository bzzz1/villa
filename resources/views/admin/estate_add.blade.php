{{-- Page for adding new estate --}}

@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')
@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">
		Добавить объект
	</h1>
	<div class="admin_main_content">
		{{ Form::open(['url'=>l('create_estate'), 'class' => 'js_forms', 'method' => 'post', 'files'=> true]) }}
			<div class="main_block">
				<div class="estate_blocks">
					{{ Form::label('title', 'Название', ['class' => 'label_form fl label_estate_width']) }}
					{{ Form::text('title', null, ['required', 'class' => 'input_form input_select_width fr']) }}
				</div>
				<div class="estate_blocks">
					{{ Form::label('city', 'Выберите город', ['class'=>'label_form fl label_estate_width']) }}
					{{ Form::select('city', array_replace([''=>'Любой город'], make_options($towns, 'town_id', 'town')), null, ['class'=>'input_form input_select_width fr js_filter_change js_select_town', 'required', 'form'=>'other']) }}
				</div>
				<div class="district estate_blocks">
					{{ Form::label('district_id', 'Выберите район', ['class'=>'label_form fl label_estate_width']) }}
					{{ Form::select('district_id', [] , null, ['class'=>'input_form input_select_width fr js_filter_change  js_select_district', 'required']) }}	
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl">
						{{ Form::label('commercial', 'Выбрать действие', ['class' => 'label_form fl width_label_uni']) }}
						{{ Form::select('commercial', ['sale' => 'Купля', 'rent' => 'Аренда'], null, ['class' => 'input_form estate_select_width fr']) }}
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('type', 'Тип недвижимости', ['class' => 'label_form label_class_form width_label_uni']) }}
						{{ Form::select('type', ['flat' => 'Квартира', 'cottage' => 'Коттедж', 'parcel' => 'Земельный участок', 'commercial' => 'Коммерческая'], null, ['class' => 'input_form estate_select_width fr']) }}
					</div>
				</div>
				<div class="js_period period_block">
					<div class="period_form">
						{{ Form::label('period', 'Период аренды', ['class' => 'label_form label_uni_marg width_label_uni']) }}
						{{ Form::select('period', ['hourly' => 'Почасово', 'daily' => 'По дням', 'mounthly' => 'По месяцам'], null, ['class' => 'input_form estate_select_width js_period_form', 'required']) }}
					</div>
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl js_house_area">
						<label for="house_area" name="house_area" class="label_form width_label_uni">Площадь помещения (м<sup>2</sup>)</label>
						<input type="number" id="house_area" name="house_area" class="input_form estate_select_width fr">
					</div>
					<div class="estate_block_width fr js_rooms">
						{{ Form::label('rooms', 'Количество комнат', ['class' => 'label_form width_label_uni js_rooms']) }}
						<input type="number" id="rooms" name="rooms" class="input_form estate_select_width js_rooms fr">
					</div>
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl js_yard_area yard_block">
						<label for="yard_area" name="yard_area" class="label_form width_label_uni">Площадь участка (соток)</label>
						<input type="number" id="yard_area" name="yard_area" class="input_form estate_select_width fr js_yard_area_req">
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('sea_dist', 'Удалённость от моря (м)', ['class' => 'label_form width_label_uni']) }}
						<input type="number" id="sea_dist" name="sea_dist" class=" input_form estate_select_width fr">
					</div>
				</div>
				<div class="estate_blocks">
					{{ Form::label('address', 'Адрес', ['class' => 'label_form fl label_estate_width']) }}
					{{ Form::text('address', null, ['class' => 'input_form input_select_width fr', 'placeholder' => 'Московская обл., с. Калиновка, ул. Радужная 26', 'required']) }}
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl">
						{{ Form::label('longitude', 'Долгота', ['class' => 'label_form fl width_label_uni']) }}
						<input type="number" id="longituide" required name="longitude" placeholder="50.058734" step="0.000001" class="input_form estate_select_width fr">
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('latitude', 'Широта', ['class' => 'label_form width_label_uni']) }}
						<input type="number" id="latitude" required name="latitude" placeholder="36.758734" step="0.000001" class="input_form estate_select_width fr">
					</div>
				</div>
				<div class="estate_blocks">
					<div class="price_form">
						{{ Form::label('price', 'Цена (руб.)', ['class' => 'label_form label_uni_marg']) }}
						<input type="number" id="price" required name="price" class="input_form estate_select_width">
					</div>
				</div>
			</div>
			<div class="CKEditor">
				{{ Form::label('description', 'Описание', ['class' => 'label_form']) }}
				<div class="form_block_marg">
					<textarea name="description" id="description">
	        		</textarea>
	        		<script>                
	            		var editor = CKEDITOR.replace( 'description');
	                	CKFinder.setupCKEditor(editor, '/packages/ckfinder/');
	       	 		</script>
				</div>
			</div>
			<div class="estate_present">
				{{ Form::label('present', 'Активен', ['class' => 'label_form_present']) }}
				{{ Form::checkbox('present', true, true, ['required']) }}
			</div>
			<div class="miniature">
				{{ Form::label('preview', 'Добавить миниатюру для объекта', ['class'=>'label_form uni_display']) }}
				{{ Form::file('preview', null, 'multiple', ['class'=>'uni_display']) }}
			</div>
			<div class="estate_blocks">
				{{ Form::submit('Добавить', ['class' => 'btn admin_uni_button']) }}
		{{ Form::close() }}
			{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
		</div>
	</div>
@stop