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
				{{ Form::text('title', null, ['class' => 'input_form uni_input_select_width', 'required']) }}
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