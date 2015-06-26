{{-- Page to add new article --}}

@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')

@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">
		Добавить Новость
	</h1>
	<div class="admin_main_content">
		{{ Form::open(['url'=>l('create_article'), 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'js_forms']) }}
			<div>
				{{ Form::label('title', 'Заголовок', ['class' => 'label_form']) }}
				{{ Form::text('title', null, ['class' => 'input_form univers', 'required']) }}
			</div>
			<div class="form_block_marg">
				{{ Form::label('body', 'Описание', ['class' => 'label_form']) }}
				<textarea name="body" id="description">
            	</textarea>
            	<script>                
                	var editor = CKEDITOR.replace( 'description');
                	CKFinder.setupCKEditor(editor, '/packages/ckfinder/');
           	 	</script>
			</div>
			<div class="button_display">
				{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
				{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
			</div>
		{{ Form::close() }}
		<div>
			<h4 class="title_dropzone">
				Поле для загрузки картинок. Кликните на поле или перетащите картинку.
			</h4>
			<form action="upload.php" class="dropzone form_dropzone" id="my-awesome-dropzone">
			</form>
		</div>
	</div>
@stop