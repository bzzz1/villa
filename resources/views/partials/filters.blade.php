<div class="filters_full">
	<div class="filters">
		<h3>поиск объекта</h3>
		<?php $filters = 'house_area=120;380&district_id=2&town_id=3&pool=bool&producer=[asus;acer;lenovo;toshiba;sony]&price=10000;160000&yard_area=100;800&commercial=rent&period=daily&type=cottage&rooms=3;7'; ?>
		{{Form::open(['url'=>l('estates', $filters), 'method'=>'GET', 'class'=>'js_filters_form'])}}
			<div class="selects">
				<div class="btn-group">
				{{HTML::link(filter('commercial', 'sale'), 'Купить', ['class' => 'btn btn-default active'])}}
				{{HTML::link(filter('commercial', 'rent'), 'Арендовать', ['class' => 'btn btn-default'])}}
			</div>
			<div class="city_and_district">
				<div class="city">
						{{ Form::label('city', 'Выберите город', ['class'=>'filters_label']) }}
						{{ Form::select('city', array_merge(['null'=>'Любой город'], make_options($towns, 'town_id', 'town')), null, ['class'=>'form-control select_place select_city js_select_town', 'required']) }}
					{{-- {{Form::close()}} --}}
				</div>
				<div class="district">
					{{ Form::label('district', 'Выберите район', ['class'=>'filters_label']) }}
					{{ Form::select('district',[] , null, ['class'=>'form-control select_place select_district js_select_district']) }}	
				</div>
			</div>
			<div class="type_and_period">
				<div class="type">
					{{ Form::label('type', 'Выберите тип', ['class'=>'filters_label']) }}
					{{ Form::select('type', ['flat'=>'Квартира', 'cottage'=>'Коттедж', 'parcel'=> 'Земельный участок', 'commercial'=>'Коммерческая' ], null, ['class'=>'form-control select_type js_select_type', 'required']) }}
				</div>
				<div class="period">
					{{ Form::label('period', 'Выберите период', ['class'=>'filters_label']) }}
					{{ Form::select('period', ['hourly'=>'Почасово', 'daily'=>'По дням', 'monthly'=> 'По месяцам'], null, ['class'=>'form-control select_period js_select_period', 'required']) }}
				</div>
			</div>
			</div>
			<div class="draggers">
			{{-- @if() --}}
				<div class="area">
					{{ Form::label('area_from', 'от', ['class'=>'filters_label']) }}
					{{ Form::text('area_from', null, ['class'=>'form-control js_range_house_area_from', 'id'=>'area_from'])}}
					{{ Form::label('area_to', 'до', ['class'=>'filters_label']) }}
					{{ Form::text('area_to', null, ['class'=>'form-control js_range_house_area_to', 'id'=>'area_to'])}}
					<span>м<sup>2</sup></span>
					<div class="area_slider"></div>
				</div>
			{{-- @endif	 --}}
			{{-- @if() --}}
				<div class="yard_area">
					{{ Form::label('yard_area_from', 'от', ['class'=>'filters_label']) }}
					{{ Form::text('yard_area_from', null, ['class'=>'form-control js_range_yard_area_from', 'id'=>'yard_area_from'])}}
					{{ Form::label('yard_area_to', 'до', ['class'=>'filters_label']) }}
					{{ Form::text('yard_area_to', null, ['class'=>'form-control js_range_yard_area_to', 'id'=>'yard_area_to'])}}
					<span>соток</span>
					<div class="yard_area_slider"></div>
				</div>
			{{-- @endif	 --}}
			<div class="price">
				{{ Form::label('price_from', 'от', ['class'=>'filters_label']) }}
				{{ Form::text('price_from', null, ['class'=>'form-control js_range_price_from', 'id'=>'price_from'])}}
				{{ Form::label('price_to', 'до', ['class'=>'filters_label']) }}
				{{ Form::text('price_to', null, ['class'=>'form-control js_range_price_to', 'id'=>'price_to'])}}
				<span>рублей</span>
				<div class="price_slider"></div>
			</div>
			{{-- @if() --}}
				<div class="rooms">
					{{ Form::label('rooms_from', 'от', ['class'=>'filters_label']) }}
					{{ Form::text('rooms_from', null, ['class'=>'form-control js_range_rooms_from', 'id'=>'rooms_from'])}}
					{{ Form::label('rooms_to', 'до', ['class'=>'filters_label']) }}
					{{ Form::text('rooms_to', null, ['class'=>'form-control js_range_rooms_to', 'id'=>'rooms_to'])}}
					<span>комнат</span>
					<div class="rooms_slider"></div>
				</div>
			{{-- @endif	 --}}
			<div class="sea_dist">
				{{ Form::label('sea_dist_from', 'от', ['class'=>'filters_label']) }}
				{{ Form::text('sea_dist_from', null, ['class'=>'form-control js_range_sea_dist_from', 'id'=>'sea_dist_from'])}}
				{{ Form::label('sea_dist_to', 'до', ['class'=>'filters_label']) }}
				{{ Form::text('sea_dist_to', null, ['class'=>'form-control js_range_sea_dist_to', 'id'=>'sea_dist_to'])}}
				<span>метров</span>
				<div class="sea_dist_slider"></div>
			</div>
			{{Form::submit('Применить', ['class'=>'btn sort_btn'])}}
		{{Form::close()}}	
		</div>
	</div>
</div>	