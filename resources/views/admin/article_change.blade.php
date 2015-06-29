@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')

@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">
		Изменить новость
	</h1>
	<div class="admin_main_content">
		{{ Form::model($article, ['url'=>l('update_article'), 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'js_forms']) }}
			{{ Form::hidden('article_id', $article->article_id) }}
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
                	var data = "<?php echo trim($article->body); ?>";
						CKEDITOR.instances['description'].setData(data);
           	 	</script>
			</div>
			<div class="button_display">
				{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
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