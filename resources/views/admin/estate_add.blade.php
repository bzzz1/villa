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
		{{ Form::open(['url'=>l('create_estate'), 'class' => 'js_forms', 'method' => 'post']) }}
			<div class="main_block">
				<div class="general_float_left">
					<div>
						{{ Form::label('title', 'Название', ['class' => 'label_form']) }}
						{{ Form::text('title', null, ['required', 'class' => 'input_form univers']) }}
					</div>
					<div class="city_and_district">
						<div>
							{{ Form::label('city', 'Выберите город', ['class'=>'label_form']) }}
							{{ Form::select('city', array_replace([''=>'Любой город'], make_options($towns, 'town_id', 'town')), null, ['class'=>'js_filter_change input_form select_place_uni js_select_town', 'required', 'form'=>'other']) }}
						</div>
						<div class="district">
							{{ Form::label('district_id', 'Выберите район', ['class'=>'label_form']) }}
							{{ Form::select('district_id', [] , null, ['class'=>'js_filter_change input_form select_place_uni js_select_district', 'required']) }}	
						</div>
					</div>
					<div>
						<div class="general_float_left">
							{{ Form::label('commercial', 'Выбрать действие', ['class' => 'label_form']) }}
							{{ Form::select('commercial', ['sale' => 'Купля', 'rent' => 'Аренда'], null, ['class' => 'input_form commercial_estate active', 'required']) }}
						</div>
						<div class="general_float_right">
							{{ Form::label('type', 'Тип недвижимости', ['class' => 'label_form label_class_form']) }}
							{{ Form::select('type', ['flat' => 'Квартира', 'cottage' => 'Коттедж', 'parcel' => 'Земельный участок', 'commercial' => 'Коммерческая'], null, ['class' => 'input_form', 'required']) }}
						</div>
					</div>
					<div>
						{{ Form::label('address', 'Адрес', ['class' => 'label_form']) }}
						{{ Form::text('address', null, ['class' => 'input_form univers', 'placeholder' => 'Московская обл., с. Калиновка, ул. Радужная 26', 'required']) }}
					</div>
					<div>
						<div class="general_float_right">
							{{ Form::label('longitude', 'Долгота', ['class' => 'label_form label_estate_width']) }}
							{{ Form::text('longitude', null, ['class' => 'input_form', 'placeholder' => '50.058734', 'required'])}}
						</div>
						<div class="general_float_left">
							{{ Form::label('latitude', 'Широта', ['class' => 'label_form']) }}
							{{ Form::text('latitude', null, ['class' => 'input_form', 'placeholder' => '36.758734', 'required']) }}
						</div>
					</div>
					<div class="general_float_left">
						{{ Form::label('price', 'Цена (руб.)', ['class' => 'label_form']) }}
						<input type="text" id="price" name="price" value="" class="input_form input_number_form_estate">
					</div>
					<div class="general_float_right js_period period_block">
						{{ Form::label('period', 'Период аренды', ['class' => 'label_form']) }}
						{{ Form::select('period', ['hourly' => 'Почасово', 'daily' => 'По дням', 'mounthly' => 'По месяцам'], null, ['class' => 'input_form_estate input_number_form_estate', 'required']) }}
					</div>
				</div>

				<div class="general_float_right">
					<div class="js_house_area">
						<label for="house_area" name="house_area" class="label_form">Площадь помещения (м<sup>2</sup>)</label>
						<input type="number" required id="house_area" name="house_area" class="input_form input_number_form_estate">				
					</div>
					<div class="js_rooms">
						{{ Form::label('rooms', 'Количество комнат', ['class' => 'label_form js_rooms']) }}
						<input type="number" required id="rooms" name="rooms" class="input_form input_number_form_estate js_rooms">
					</div>
					<div class="js_yard_area">
						<label for="yard_area" name="yard_area" class="label_form">Площадь участка (соток)</label>
						<input type="number" required id="yard_area" name="yard_area" class="input_form input_number_form_estate">
					</div>
					<div>
						{{ Form::label('sea_dist', 'Удалённость от моря (м)', ['class' => 'label_form']) }}
						<input type="number" required id="sea_dist" name="sea_dist" class=" input_form input_number_form_estate">
					</div>
				</div>
			</div>
			<div>
				{{ Form::label('description', 'Описание', ['class' => 'label_form']) }}
				<div class="input_form_description form_block_marg">
					<textarea name="description" id="description">
	        		</textarea>
	        		<script>                
	            		var editor = CKEDITOR.replace( 'description');
	                	CKFinder.setupCKEditor(editor, '/packages/ckfinder/');
	       	 		</script>
				</div>
			</div>
			<div>
				{{ Form::label('present', 'Активен', ['class' => 'label_form']) }}
				{{ Form::checkbox('present', true, true, ['required']) }}
			</div>
			<div class="uni_display">
				{{ Form::submit('Добавить', ['class' => 'btn admin_uni_button']) }}
		{{ Form::close() }}
				{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
			</div>
		<div>
			<h4 class="title_dropzone">
				Поле для загрузки картинок. Кликните на поле или перетащите картинку.
			</h4>
			<form action="upload.php" class="dropzone form_dropzone" id="my-awesome-dropzone">
			</form>
		</div>
	</div>
@stop
