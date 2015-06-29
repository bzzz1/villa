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
				<div class="estate_blocks">
					{{ Form::label('title', 'Название', ['class' => 'label_form fl']) }}
					{{ Form::text('title', null, ['required', 'class' => 'input_form input_select_width fr']) }}
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl">
						{{ Form::label('commercial', 'Выбрать действие', ['class' => 'label_form fl']) }}
						{{ Form::select('commercial', ['sale' => 'Купля', 'rent' => 'Аренда'], null, ['class' => 'input_form estate_select_width', 'required']) }}
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('type', 'Тип недвижимости', ['class' => 'label_form label_class_form']) }}
						{{ Form::select('type', ['flat' => 'Квартира', 'cottage' => 'Коттедж', 'parcel' => 'Земельный участок', 'commercial' => 'Коммерческая'], null, ['class' => 'input_form estate_select_width', 'required']) }}
					</div>
				</div>
				<div class="fl js_period period_block">
					{{ Form::label('period', 'Период аренды', ['class' => 'label_form']) }}
					{{ Form::select('period', ['hourly' => 'Почасово', 'daily' => 'По дням', 'mounthly' => 'По месяцам'], null, ['class' => 'input_form estate_select_width', 'required']) }}
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl js_house_area">
						<label for="house_area" name="house_area" class="label_form">Площадь помещения (м<sup>2</sup>)</label>
						<input type="number" required id="house_area" name="house_area" class="input_form estate_select_width" value="{{ $estate->house_area }}">
					</div>
					<div class="estate_block_width fr js_rooms">
						{{ Form::label('rooms', 'Количество комнат', ['class' => 'label_form js_rooms']) }}
						<input type="number" required id="rooms" name="rooms" class="input_form estate_select_width js_rooms" value="{{ $estate->rooms }}">
					</div>
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl js_yard_area">
						<label for="yard_area" name="yard_area" class="label_form">Площадь участка (соток)</label>
						<input type="number" required id="yard_area" name="yard_area" class="input_form estate_select_width" value="{{ $estate->yard_area }}">
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('sea_dist', 'Удалённость от моря (м)', ['class' => 'label_form']) }}
						<input type="number" required id="sea_dist" name="sea_dist" class=" input_form estate_select_width" value="{{ $estate->sea_dist }}">
					</div>
				</div>
				<div class="estate_blocks">
					{{ Form::label('address', 'Адрес', ['class' => 'label_form']) }}
					{{ Form::text('address', null, ['class' => 'input_form input_select_width', 'placeholder' => 'Московская обл., с. Калиновка, ул. Радужная 26', 'required']) }}
				</div>
				<div class="estate_blocks">
					<div class="estate_block_width fl">
						{{ Form::label('longitude', 'Долгота', ['class' => 'label_form']) }}
						{{ Form::text('longitude', null, ['class' => 'input_form', 'placeholder' => '50.058734', 'required'])}}
					</div>
					<div class="estate_block_width fr">
						{{ Form::label('latitude', 'Широта', ['class' => 'label_form']) }}
						{{ Form::text('latitude', null, ['class' => 'input_form', 'placeholder' => '36.758734', 'required']) }}
					</div>
				</div>
				<div class="estate_blocks">
					{{ Form::label('price', 'Цена (руб.)', ['class' => 'label_form']) }}
					<input type="text" id="price" name="price" class="input_form" value="{{ $estate->price }}">
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
			<div class="uni_display">
				{{ Form::submit('Изменить', ['class' => 'btn admin_uni_button']) }}
		{{ Form::close() }}
				{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
			</div>

		<div>
			<h4 class="title_dropzone_form">
				Добавление файлов 
			</h4>
			<form action="upload.php" class="dropzone dz-clickable form_dropzone dropzone_form_block" id="my-awesome-dropzone">
				<div class="dz-default dz-message" data-dz-message>
					<p class="title_dropzone">						
						Перетащите файлы или кликните для загрузки здесь.
					</p>
				</div>
			</form>
		</div>
	</div>
@stop
