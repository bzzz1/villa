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
			<div class="icon @if (r() == 'admin') active_icon_block @endif ">
				<a href="{{l('admin')}}" class="@if (r() == 'admin') active_my @endif admin_icon_block ico"><i class="fa fa-wrench fa-5x"></i><br />Панель управления</a>
			</div>
			<div class="icon @if (r() == 'create_estate' || r() == 'change_estate') active_icon_block @endif">
				<a href="{{l('create_estate')}}" class="@if (r() == 'create_estate' || r() == 'change_estate') active_my @endif admin_icon_block ico"><i class="fa fa-home fa-5x"></i><br />Добавить объект</a>
			</div>
			<div class="icon @if (r() == 'admin_estates') active_icon_block @endif">
				<a href="{{l('admin_estates')}}" class="@if (r() == 'admin_estates') active_my @endif admin_icon_block ico"><i class="fa fa-list fa-5x"></i><br />Все объекты</a>
			</div>
			<div class="icon @if (r() == 'create_article' || r() == 'change_article') active_icon_block @endif">
				<a href="{{l('create_article')}}" class="@if (r() == 'create_article' || r() == 'change_article') active_my @endif admin_icon_block ico"><i class="fa fa-bullhorn fa-5x"></i><br />Добавить новость</a>
			</div>
			<div class="icon @if (r() == 'admin_articles') active_icon_block @endif">
				<a href="{{l('admin_articles')}}" class="@if (r() == 'admin_articles') active_my @endif admin_icon_block ico"><i class="fa fa-list-alt fa-5x"></i><br />Новости</a>
			</div>
			<div class="icon @if (r() == 'admin_towns') active_icon_block @endif">
				<a href="{{l('admin_towns')}}" class="@if (r() == 'admin_towns') active_my @endif admin_icon_block ico"><i class="fa fa-book fa-5x"></i><br />Список городов</a>
			</div>
			<div class="icon @if (r() == 'admin_districts') active_icon_block @endif">
				<a href="{{l('admin_districts')}}" class="@if (r() == 'admin_districts') active_my @endif admin_icon_block ico"><i class="fa fa-sitemap fa-5x"></i><br /> Список районов</a>
			</div>
		</div>
	</div>
@stop
