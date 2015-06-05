@extends('layouts/admin_layout')
@extends('admin/header')
@extends('admin/sidebar')
@extends('admin/footer')


@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">Панель управления</h1>
	<div class="admin_main_content">
		{{-- <div class="admin_panel_import_div">
		</div> --}}
		<div class="blocks">
			<div class="icon">
				<a href="{{l('admin')}}" class="@if (r() == 'admin') active_my @endif admin_icon_block"><i class="fa fa-wrench fa-5x"></i>Панель управления</a>
			</div>
			<div class="icon">
				<a href="{{l('create_estate')}}" class="@if (r() == 'create_estate' || r() == 'change_estate') active_my @endif admin_icon_block"><i class="fa fa-home fa-5x"></i>Добавить объект</a>
			</div>
			<div class="icon">
				<a href="{{l('admin_estates')}}" class="@if (r() == 'admin_estates') active_my @endif admin_icon_block"><i class="fa fa-list fa-5x"></i>Все объекты</a>
			</div>
			<div class="icon">
				<a href="{{l('create_article')}}" class="@if (r() == 'create_article' || r() == 'change_article') active_my @endif admin_icon_block"><i class="fa fa-bullhorn fa-5x"></i>Добавить новость</a>
			</div>
			<div class="icon">
				<a href="{{l('admin_articles')}}" class="@if (r() == 'admin_articles') active_my @endif admin_icon_block"><i class="fa fa-list-alt fa-5x"></i>Новости</a>
			</div>
			<div class="icon">
				<a href="{{l('admin_towns')}}" class="@if (r() == 'admin_towns') active_my @endif admin_icon_block"><i class="fa fa-book fa-5x"></i>Список городов</a>
			</div>
			<div class="icon">
				<a href="{{l('admin_districts')}}" class="@if (r() == 'admin_districts') active_my @endif admin_icon_block"><i class="fa fa-sitemap fa-5x"></i>Список районов</a>
			</div>
		</div>
	</div>
@stop
