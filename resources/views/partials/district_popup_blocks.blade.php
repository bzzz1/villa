<div id="grabMe" class="uni_popup_block">
	{{ Form::open(['url'=>l('create_district'), 'method' => 'post']) }}
		<h2 class="uni_title_popup">
			Добавить район
		</h2>
		<div>
			<div class="uni_display">
				{{ Form::label('district', 'Название', ['class' => 'label_form popup_label']) }}
			</div>
			<div class="uni_display">
				{{ Form::text('district', null, ['required', 'class' => 'form-control popup_input']) }}
			</div>
			<div class="form_block_marg">
				{{ Form::label('town_id', 'Выбрать город', ['class' => 'label_form popup_label']) }}
				{{ Form::select('town_id', make_options($towns, 'town_id', 'town'), null, ['class' => 'input_form select_town']) }}
			</div>
		</div>
		{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
	{{ Form::close() }}
</div>

<div id="change_district_town" class="uni_popup_block">
	{{ Form::open(['url'=>l('update_district'), 'method' => 'post']) }}
		<h2 class="uni_title_popup">
			Изменить район
		</h2>
		<div>
			<div class="uni_display block_bottom_marg">
				{{ Form::label('district', 'Название', ['class' => 'label_form popup_label']) }}
			</div>
			<div class="uni_display block_bottom_marg">
				{{ Form::text('district', null, ['required', 'class' => 'form-control popup_input js_popup_input']) }}
			</div>
			<div class="form_block_marg">
				{{ Form::label('town_id', 'Выбрать город', ['class' => 'label_form popup_label']) }}
				{{ Form::select('town_id', make_options($towns, 'town_id', 'town'), null, ['class' => 'input_form select_town']) }}
			</div>
		</div>
		{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
	{{ Form::close() }}
</div>