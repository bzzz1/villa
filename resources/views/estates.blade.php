@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/flash_messages')
@extends('/partials/footer')

@section('body')
	<div class="main">
		<div id="carousel_estate" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel_estate" data-slide-to="0" class="active"></li>
				<li data-target="#carousel_estate" data-slide-to="1"></li>
				<li data-target="#carousel_estate" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="../img/layout/krim_villa_image.png" alt="Кредиты под залог драгметаллов">
					<div class="carousel-caption">
						<div class="top_left">
							<h1>Дома в аренду для Вас!</h1>
							<h3>Огромный выбор недвижимости для Вашего комфорта.</h3>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="../img/layout/krim_villa_image.png" alt="Кредиты под залог драгметаллов">
					<div class="carousel-caption">
						<div class="top_left">
							<h1>Дома в аренду для Вас!</h1>
							<h3>Огромный выбор недвижимости для Вашего комфорта.</h3>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="../img/layout/krim_villa_image.png" alt="Кредиты под залог драгметаллов">
					<div class="carousel-caption">
						<div class="top_left">
							<h1>Дома в аренду для Вас!</h1>
							<h3>Огромный выбор недвижимости для Вашего комфорта.</h3>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel_estate" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel_estate" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	@include('partials/filters')
	<div class="map_full">
		<div class="map">
			<h3>Результаты поиска</h3>
			<a>
				<i class="fa fa-map-marker fa-2x"></i>
				Посмотреть на карте
			</a>
		</div>
	</div>
	@include('partials/catalog_estate')
	<div class="full_blue">
		@include('partials/pagination')
	</div>
	<div class="pre_footer_full">
		<div class="pre_footer">
			{{-- {{HTML::image('img/layout/footer.png', 'krim villa photo')}} --}}
		</div>
	</div>

@stop