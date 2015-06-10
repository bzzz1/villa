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
	@if (r() == 'estates' || r() == 'admin_estates')
		@include('partials/filters')
	@endif
	@if(r() != 'admin_estates')	
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
				<div class="map_container js_map_canvas" id="js_map">
					
				</div>
			</div>
		</div>
	@else
		<h3>Результаты поиска</h3>
	@endif


	@include('partials/catalog_estate')
	<div class="full_blue">
		@include('partials/pagination')
	</div>
	@if(r() != 'admin_estates')
		<div class="pre_footer_full">
			<div class="pre_footer">
				{{-- {{HTML::image('img/layout/footer.png', 'krim villa photo')}} --}}
			</div>
		</div>
	@endif
@stop
@section ('js')
	TOWNS = <?php echo json_encode($towns) ?>;
	EXTREMES = <?php echo json_encode($extremes) ?>;
@stop