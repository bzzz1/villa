<li class="oneitem" data-id = {{ $district->district_id }}>
	<div class="district_block_aling">
		<div class="general_float_left block_size">
			<p class=" js_example_div js_item_title">
				{{ $district->district }}
			</p>
		</div>
	 	<div class="general_float_right marg_block_icons">
			<span class="town_districtModal">
				<i class="fa fa-pencil js_change" data-town-id ="{{ $town-> town_id }}">
				</i>
			</span>
			<div class="uni_display">
				{{  Face::delete('district', $district->district_id, true, ['class'=>'delete_items_group_icon']) }}
			</div>
		</div>
	</div>
</li>