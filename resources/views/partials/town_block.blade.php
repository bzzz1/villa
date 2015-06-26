<li class="oneitem" data-id = {{ $town->town_id }}>
	<div class="li_div">
		<div>
			<p class="general_float_left js_item_title">
				{{ $town->town }}
			</p>
		</div>
	 	<div class="general_float_right">
			<span  class="town_districtModal">
				<i class="fa fa-pencil js_change">
				</i>
			</span>
			<div class="uni_display">
				{{  Face::delete('town', $town->town_id, true, ['class'=>'delete_items_group_icon']) }}
			</div>
		</div>
	</div>
</li>