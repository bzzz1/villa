@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
	<div class="full_green">
		<h1>Контакты</h1>
	</div>
	<div class="left_block">
		@include('partials/contact_form')
	</div>
	<div class="right_contacts">
		<h3>Контактная информация агентства</h3>
		<div class="tel">
			<p>Единый телефон агентства:</p>
			<p class="value">+7 (812) 954-11-09</p>
		</div>
		<div class="email">
			<p>E-mail:</p>
			<p class="value">rent@spb-villa.ru</p>
		</div>
		<div class="individual">
			<p>Индивидуальные консультанты</p>
			<p class="value first">Кристина Лозовая</p>
			<p class="value second">+7 (812) 954-11-09</p>
		</div>
	</div>
@stop