<div class="filters_full">
	<div class="filters">
		<h3>поиск объекта</h3>
		<div class="selects">
			<div class="btn-group">
				{{HTML::link('/', 'Купить', ['class' => 'btn btn-default active'])}}
				{{HTML::link('/', 'Арендовать', ['class' => 'btn btn-default'])}}
			</div>
			<div class="city_and_district">
				<div class="city">
					{{ Form::label('city', 'Выберите город', ['class'=>'filters_label']) }}
					{{ Form::select('city', ['df'=>'dfs'], null, ['class'=>'form-control select_place select_city', 'required']) }}
				</div>
				<div class="district">
					{{ Form::label('district', 'Выберите район', ['class'=>'filters_label']) }}
					{{ Form::select('district', ['dfвыава'=>'dfавыаываs'], null, ['class'=>'form-control select_place select_district']) }}	
				</div>
			</div>
		</div>
		<div class="draggers">
			<div class="area">
				{{ Form::label('area_from', 'от', ['class'=>'filters_label']) }}
				{{ Form::text('area_from', null, ['class'=>'form-control', 'id'=>'area_from'])}}
				{{ Form::label('area_to', 'до', ['class'=>'filters_label']) }}
				{{ Form::text('area_to', null, ['class'=>'form-control', 'id'=>'area_to'])}}
				<span>м<sup>2</sup></span>
				<div class="area_slider"></div>
			</div>
			<div class="yard_area">
				{{ Form::label('yard_area_from', 'от', ['class'=>'filters_label']) }}
				{{ Form::text('yard_area_from', null, ['class'=>'form-control', 'id'=>'yard_area_from'])}}
				{{ Form::label('yard_area_to', 'до', ['class'=>'filters_label']) }}
				{{ Form::text('yard_area_to', null, ['class'=>'form-control', 'id'=>'yard_area_to'])}}
				<span>соток</span>
				<div class="yard_area_slider"></div>
			</div>
			<div class="price">
				{{ Form::label('price_from', 'от', ['class'=>'filters_label']) }}
				{{ Form::text('price_from', null, ['class'=>'form-control', 'id'=>'price_from'])}}
				{{ Form::label('price_to', 'до', ['class'=>'filters_label']) }}
				{{ Form::text('price_to', null, ['class'=>'form-control', 'id'=>'price_to'])}}
				<span>рублей</span>
				<div class="price_slider"></div>
			</div>
		</div>
	</div>
</div>	