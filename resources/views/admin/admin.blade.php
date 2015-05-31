@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')


@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">Панель управления</h1>
	<div class="admin_main_content">
		<div class="admin_panel_import_div">
		</div>
	</div>
@stop
