{{-- Page to changing article --}}

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
		{{ Form::model($article, ['url'=>l('update_article'), 'method' => 'post', 'class' => 'js_forms', 'files'=> true]) }}
			{{ Form::hidden('article_id', $article->article_id) }}
			<div class="estate_blocks">
				{{ Form::label('title', 'Название', ['class' => 'label_form fl label_estate_width']) }}
				{{ Form::text('title', null, ['required', 'class' => 'input_form input_select_width fr']) }}
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
			<div class="miniature">
				{{ Form::label('preview', 'Добавить миниатюру для объекта', ['class'=>'label_form uni_display']) }}
				{{ Form::file('preview', null, 'multiple', ['class'=>'uni_display']) }}
			</div>
			<div class="button_display">
				{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
				{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
			</div>
		{{ Form::close() }}
	</div>
@stop