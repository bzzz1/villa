{{-- Page to add new article --}}

@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')

@section('body')
	<h1 class="admin_uni_heading">
		Добавить Новость
	</h1>
	@include('partials/flash_messages')
	<div class="admin_main_content">
		{{ Form::open(['url'=>l('create_article'), 'method' => 'post', 'class' => 'js_forms', 'files'=> true]) }}
			<div class="estate_blocks">
				{{ Form::label('title', 'Название', ['class' => 'label_form fl']) }}
				{{ Form::text('title', null, ['required', 'class' => 'input_form input_select_width fr']) }}
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
			<div class="miniature">
				{{ Form::label('preview', 'Добавить миниатюру для объекта', ['class'=>'label_form uni_display']) }}
				{{ Form::file('preview', null, 'multiple', ['class'=>'uni_display']) }}
			</div>
			<div class="button_display">
				{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
				{{ Form::button('Очистить', ['class' => 'btn admin_uni_button js_button_clear']) }}
			</div>
		{{ Form::close() }}
	</div>
@stop