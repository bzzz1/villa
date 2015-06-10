@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/flash_messages')
@extends('/partials/footer')

@section('body')
	<div class="main">
		@if (r() == 'estates')
			<div id="carousel_estate" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel_estate" data-slide-to="0" class="active"></li>
				<li data-target="#carousel_estate" data-slide-to="1"></li>
				<li data-target="#carousel_estate" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php $i = 0 ?>
				@foreach (read_dir(dir_path('carousel')) as $name)
					@if ($name != '.DS_Store')
						<div class="item @if ($i == 1) active @endif">
							{{ HTML::image('img/carousel/'.$name, "", ['class'=>'item_img']) }}
							<div class="carousel-caption">
								<div class="top_left">
									<h1>Дома в аренду для Вас!</h1>
									<h3>Огромный выбор недвижимости для Вашего комфорта.</h3>
								</div> 
							</div>
						</div>
					@endif	
					<?php $i++?>
				@endforeach	
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
		@endif	
	</div>
	@if (r() == 'estates')
		@include('partials/filters')
	@endif	
	<div class="map_full">
		<div class="map">
			@if (r() == 'estates')
				<h3>Результаты поиска</h3>
			@else 
				<h3>Избранные</h3>
			@endif		
			<a class="js_open_map">
				<i class="fa fa-map-marker fa-2x"></i>
				Посмотреть на карте
			</a>
			<div class="map_container js_map_canvas">
				
			</div>
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
@section ('js')
	TOWNS = <?php echo json_encode($towns) ?>;
	EXTREMES = <?php echo json_encode($extremes) ?>;

	$(".area_slider").noUiSlider({
		start: [EXTREMES.house_area_min,
		EXTREMES.house_area_max],
		connect: true,
		orientation: "horizontal",
		range: {
			"min": EXTREMES.house_area_min,
			"max": EXTREMES.house_area_max
		},
		format: wNumb({
			decimals: 0
		})
	});
	
	$(".area_slider").Link("lower").to($("#area_from"));
	$(".area_slider").Link("upper").to($("#area_to"));
	// yard_area
	$(".yard_area_slider").noUiSlider({
		start: [EXTREMES.yard_area_min,
		EXTREMES.yard_area_max],
		connect: true,
		orientation: "horizontal",
		range: {
			"min": EXTREMES.yard_area_min,
			"max": EXTREMES.yard_area_max
		},
		format: wNumb({
			decimals: 0
		})
	});
	$(".yard_area_slider").Link("lower").to($("#yard_area_from"));
	$(".yard_area_slider").Link("upper").to($("#yard_area_to"));
	// price
	$(".price_slider").noUiSlider({
		start: [EXTREMES.price_min,
		EXTREMES.price_max],
		connect: true,
		orientation: "horizontal",
		range: {
			"min": EXTREMES.price_min,
			"max": EXTREMES.price_max
		},
		format: wNumb({
			decimals: 0
		})
	});
	$(".price_slider").Link("lower").to($("#price_from"));
	$(".price_slider").Link("upper").to($("#price_to"));
	// rooms
	$(".rooms_slider").noUiSlider({
		start: [EXTREMES.rooms_min,
		EXTREMES.rooms_max],
		connect: true,
		orientation: "horizontal",
		range: {
			"min": EXTREMES.rooms_min,
			"max": EXTREMES.rooms_max
		},
		format: wNumb({
			decimals: 0
		})
	});
	$(".rooms_slider").Link("lower").to($("#rooms_from"));
	$(".rooms_slider").Link("upper").to($("#rooms_to"));
	// sea_dist
	$(".sea_dist_slider").noUiSlider({
		start: [EXTREMES.sea_dist_min,
		EXTREMES.sea_dist_max],
		connect: true,
		orientation: "horizontal",
		range: {
			"min": EXTREMES.sea_dist_min,
			"max": EXTREMES.sea_dist_max
		},
		format: wNumb({
			decimals: 0
		})
	});
	$(".sea_dist_slider").Link("lower").to($("#sea_dist_from"));
	$(".sea_dist_slider").Link("upper").to($("#sea_dist_to"));
@stop