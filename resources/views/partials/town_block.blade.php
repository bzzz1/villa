<li class="oneitem">
	<div class="li_div">
		<div>
			<p class="fl js_item_title">
				{{ $town->town }}
			</p>
		</div>
	 	<div class="fr">
			<span  class="town_districtModal">
				<i class="fa fa-pencil js_change" data-town-id = "{{ $town->town_id }}">
				</i>
			</span>
			<div class="uni_display">
				{{  Face::delete('town', $town->town_id, true, ['class'=>'delete_items_group_icon']) }}
			</div>
		</div>
	</div>
</li>