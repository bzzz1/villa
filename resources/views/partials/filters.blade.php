<div class="filters">
	<h3>поиск объекта</h3>
	<div class="btn-group">
		{{HTML::link('/', 'Купить', ['class' => 'btn btn-default'])}}
		{{HTML::link('/', 'Арендовать', ['class' => 'btn btn-default'])}}
	</div>
	<div class="city_and_district">
		{{ Form::label('city', 'Выбирите город', ['class'=>'']) }}
		{{ Form::select('city', ['df'=>'dfs'], null, ['class'=>'form-control', 'required']) }}
		{{ Form::label('district', 'Выбирите район', ['class'=>'']) }}
		{{ Form::select('district', ['dfвыава'=>'dfавыаываs'], null, ['class'=>'form-control']) }}	
	</div>
	<div class="draggers">
		<div class="area">
			{{ Form::label('area', 'от', ['class'=>'']) }}
			{{ Form::text('area')}}
		</div>
	</div>
</div>