<div id="grabMe" class="uni_popup_block">
	{{ Form::open(['url'=>l('create_town'), 'method' => 'post']) }}
		<h2 class="uni_title_popup">
			Добавить город
		</h2>
		<div>
			<div class="uni_display">
				{{ Form::label('town', 'Название', ['class' => 'label_form popup_label']) }}
			</div>
			<div class="uni_display">
				{{ Form::text('town', null, ['required', 'class' => 'form-control popup_input']) }}
			</div>
		</div>
		{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
	{{ Form::close() }}
</div>

<div id="change_district_town" class="uni_popup_block">
	{{ Form::open(['url'=>l('update_town'), 'method' => 'post']) }}
		{{ Form::hidden('town_id', null, ['class' => 'js_town_id'] ) }}
		<h2 class="uni_title_popup">
			Изменить город
		</h2>
		<div>
			<div class="uni_display block_bottom_marg">
				{{ Form::label('town', 'Название', ['class' => 'label_form popup_label']) }}
			</div>
			<div class="uni_display block_bottom_marg">
				{{ Form::text('town', null, ['required', 'class' => 'form-control popup_input js_popup_input']) }}
			</div>
		</div>
		{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
	{{ Form::close() }}
</div>