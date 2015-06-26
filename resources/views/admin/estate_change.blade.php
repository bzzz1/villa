{{-- Page for adding new estate --}}

@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')
 
@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">
		Изменить объект
	</h1>
	<div class="admin_main_content">
		{{ Form::model($estate, ['url'=>l('change_estate'), 'class' => 'js_forms',  'method' => 'post']) }}
			<div class="main_block">
				<div class="general_float_left">
					<div>
						{{ Form::label('title', 'Название', ['class' => 'label_form']) }}
						{{ Form::text('title', null, ['required', 'class' => 'input_form univers']) }}
					</div>
					<div>
						<div class="general_float_left">
							{{ Form::label('commercial', 'Выбрать действие', ['class' => 'label_form']) }}
							{{ Form::select('commercial', ['sale' => 'Купля', 'rent' => 'Аренда'], null, ['class' => 'input_form commercial_estate']) }}
						</div>
						<div class="general_float_right">
							{{ Form::label('type', 'Тип недвижимости', ['class' => 'label_form label_class_form']) }}
							{{ Form::select('type', ['flat' => 'Квартира', 'cottage' => 'Коттедж', 'parcel' => 'Земельный участок', 'commercial' => 'Коммерческая'], null, ['class' => 'input_form']) }}
						</div>
					</div>
					<div>
						{{ Form::label('address', 'Адрес', ['class' => 'label_form']) }}
						{{ Form::text('address', null, ['class' => 'input_form univers', 'placeholder' => 'Московская обл., с. Калиновка, ул. Радужная 26']) }}
					</div>
					<div>
						<div class="general_float_right">
							{{ Form::label('longitude', 'Долгота', ['class' => 'label_form label_estate_width']) }}
							{{ Form::text('longitude', null, ['class' => 'input_form', 'placeholder' => '50.058734'])}}
						</div>
						<div class="general_float_left">
							{{ Form::label('latitude', 'Широта', ['class' => 'label_form']) }}
							{{ Form::text('latitude', null, ['class' => 'input_form', 'placeholder' => '36.758734']) }}
						</div>
					</div>
					<div>
						{{ Form::label('price', 'Цена (руб.)', ['class' => 'label_form']) }}
						<input type="number" id="price" name="price" class="input_form input_number_form_estate" value="{{ $estate->price }}">
					</div>
				</div>

				<div class="general_float_right">
					<div>
						<label for="house_area" name="house_area" class="label_form">Площадь помещения (м<sup>2</sup>)</label>
						<input type="number" id="house_area" name="house_area" value="{{ $estate->house_area }}" class="input_form input_number_form_estate">				
					</div>
					<div>
						{{ Form::label('rooms', 'Количество комнат', ['class' => 'label_form']) }}
						<input type="number" id="rooms" name="rooms" value="{{ $estate->rooms }}" class="input_form input_number_form_estate">
					</div>
					<div>
						<label for="yard_area" name="yard_area" class="label_form">Площадь участка (соток)</label>
						<input type="number" id="yard_area" name="yard_area" value="{{ $estate->yard_area }}" class="input_form input_number_form_estate">
					</div>
					<div>
						{{ Form::label('period', 'Период аренды', ['class' => 'label_form']) }}
						{{ Form::select('period', ['hourly' => 'Почасово', 'daily' => 'По дням', 'mounthly' => 'По месяцам'], null, ['class' => 'input_form_estate input_number_form_estate']) }}
					</div>
					<div>
						{{ Form::label('sea_dist', 'Удалённость от моря (м)', ['class' => 'label_form']) }}
						<input type="number" id="sea_dist" name="sea_dist" value="{{ $estate->sea_dist }}" class=" input_form input_number_form_estate">
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
	                	var data = "<?php echo trim($estate->description); ?>";
						CKEDITOR.instances['description'].setData(data);
	       	 		</script>
				</div>
			</div>
			<div>
				{{ Form::label('present', 'Активен', ['class' => 'label_form']) }}
				<input name="present" type="checkbox" id="present">
				{{-- {{ Form::checkbox('present', null, ['class' => 'input_form']) }} --}}
			</div>
			<div class="uni_display">
				{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
		{{ Form::close() }}

			{{ Form::open(['url' => l('delete_estate'), 'method' => 'post', 'class' => 'uni_display']) }}
				{{ Form::submit('Удалить', ['class'=>'btn admin_uni_button']) }}
				{{ Form::hidden('estate_id', $estate->estate_id) }} 
			{{ Form::close() }}
			<input type = "button" class="btn admin_uni_button js_button_clear" value = "Очистить" />
			</div>
		<div>
			<h4 class="title_dropzone">
				Поле для загрузки картинок. Клините на поле или перетащите картинку.
			</h4>
			<form action="upload.php" class="dropzone form_dropzone" id="my-awesome-dropzone">
			</form>
		</div>
	</div>
@stop
