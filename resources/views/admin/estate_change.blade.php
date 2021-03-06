{{-- Page for changing estate --}}

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
		{{ Form::model($estate, ['url'=>l('update_estate'), 'class' => 'js_forms',  'method' => 'post', 'files'=> true]) }}
			{{ Form::hidden('estate_id', $estate->estate_id) }}
			<div class="main_block">
				<div class="estate_blocks">
					{{ Form::label('title', 'Название', ['class' => 'label_form fl label_estate_width']) }}
					{{ Form::text('title', null, ['required', 'class' => 'input_form input_select_width fr']) }}
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl">
						{{ Form::label('commercial', 'Выбрать действие', ['class' => 'label_form fl width_label_uni']) }}
						{{ Form::select('commercial', ['sale' => 'Купля', 'rent' => 'Аренда'], $estate->commercial, ['class' => 'input_form estate_select_width fr', 'required']) }}
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('type', 'Тип недвижимости', ['class' => 'label_form label_class_form width_label_uni']) }}
						{{ Form::select('type', ['flat' => 'Квартира', 'cottage' => 'Коттедж', 'parcel' => 'Земельный участок', 'commercial' => 'Коммерческая'], null, ['class' => 'input_form estate_select_width fr', 'required']) }}
					</div>
				</div>
				<div class="js_period period_block">
					<div class="period_form">
						{{ Form::label('period', 'Период аренды', ['class' => 'label_form label_uni_marg width_label_uni']) }}
						{{ Form::select('period', ['hourly' => 'Почасово', 'daily' => 'По дням', 'mounthly' => 'По месяцам'], null, ['class' => 'input_form estate_select_width js_period_form']) }}
					</div>
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl js_house_area">
						<label for="house_area" name="house_area" class="label_form width_label_uni">Площадь помещения (м<sup>2</sup>)</label>
						<input type="number" id="house_area" name="house_area" class="input_form estate_select_width fr js_house_area_form" value="{{ $estate->house_area }}">
					</div>
					<div class="estate_block_width fr js_rooms">
						{{ Form::label('rooms', 'Количество комнат', ['class' => 'label_form width_label_uni js_rooms']) }}
						<input type="number" id="rooms" name="rooms" class="input_form estate_select_width js_rooms_form fr" value="{{ $estate->rooms }}">
					</div>
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl js_yard_area">
						<label for="yard_area" name="yard_area" class="label_form width_label_uni">Площадь участка (соток)</label>
						<input type="number" id="yard_area" name="yard_area" class="input_form estate_select_width fr js_yard_area_form" value="{{ $estate->yard_area }}">
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('sea_dist', 'Удалённость от моря (м)', ['class' => 'label_form width_label_uni']) }}
						<input type="number" id="sea_dist" name="sea_dist" class=" input_form estate_select_width fr" value="{{ $estate->sea_dist }}">
					</div>
				</div>
				<div class="estate_blocks">
					{{ Form::label('address', 'Адрес', ['class' => 'label_form fl label_estate_width']) }}
					{{ Form::text('address', null, ['class' => 'input_form input_select_width fr', 'placeholder' => 'Московская обл., с. Калиновка, ул. Радужная 26', 'required']) }}
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl">
						{{ Form::label('longitude', 'Долгота', ['class' => 'label_form fl width_label_uni']) }}
						<input type="number" id="longituide" required name="longitude" placeholder="50.058734" step="0.00001" class="input_form estate_select_width fr" value="{{ $estate->longitude }}">
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('latitude', 'Широта', ['class' => 'label_form width_label_uni']) }}
						<input type="number" id="latitude" required name="latitude" placeholder="36.758734" step="0.00001" class="input_form estate_select_width fr" value="{{ $estate->latitude }}">
					</div>
				</div>
				<div class="estate_blocks">
					<div class="price_form">
						{{ Form::label('price', 'Цена (руб.)', ['class' => 'label_form label_uni_marg']) }}
						<input type="number" id="price" required name="price" class="input_form estate_select_width" value="{{ $estate->price }}">
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
	                	var data = "<?php echo trim($estate->description); ?>";
						CKEDITOR.instances['description'].setData(data);
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
				{{ Form::hidden('old_img', $estate->preview) }}

			</div>
			<div class="uni_display">
				{{ Form::submit('Изменить', ['class' => 'btn admin_uni_button']) }}
		{{ Form::close() }}
			{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
		</div>
		<div class="image_upload">
			{{ Form::model($estate, ['url'=>l('mult_upload'), 'class' => 'js_forms',  'method' => 'post', 'files'=> true]) }}
				{{ Form::hidden('estate_id', $estate->estate_id) }}
				{{ Form::label('images[]', 'Добавить фото для объекта (одно или несколько)', ['class'=>'label_form uni_display']) }}
				{{ Form::file('images[]', ['class' => 'images_input', 'multiple', 'accept'=>'image']) }}
				{{ Form::submit('Загрузить', ['class' => 'btn admin_uni_button']) }}
			{{ Form::close() }}
			
		</div>
	</div>
@stop