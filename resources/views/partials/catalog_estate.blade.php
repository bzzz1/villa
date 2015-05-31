<div class="catalog_full">
	<div class="catalog_blocks">
		@foreach ($estates as $estate)
			<div class="one_item">
				<div class="img">
					@if ($estate->image)
						<a href="{{l('estate', [$estate->estate_id])}}">
							{{ HTML::image("img/photos/estates/$estate->image", "$estate->title", ['class'=>'item_img']) }}
						</a> 
					@else
						<a href="{{l('estate', [$estate->estate_id])}}">
							{{ HTML::image("img/photos/estates/alien.png", "$estate->title", ['class'=>'item_img']) }}
						</a>
					@endif	
					<div class="add_to">
						<a>
							Добавить в избранные
							<i class="fa fa-heart-o fa-2x"></i> 
						</a> 
					</div>
					<div class="added_to">
						<a>
							Удалить из избранного
							<i class="fa fa-heart fa-2x"></i>
						</a>	 
					</div>
				</div>
				<div class="short_title">
					<h2 class="item_title">
						<a href="{{l('estate', [$estate->estate_id])}}">{{$estate->title}}</a>
					</h2>
					{{-- <h2 class="item_title second">
						<a href="#">Залупнинский район</a>
					</h2> --}}
				</div>
				<div class="short_descr">
					<div class="item_descr">
						<table>
							<tbody>
								<tr>
									<td>Площадь</td>
									<td>{{$estate->house_area}} м<sup>2</sup></td>
								</tr>
								<tr>
									<td>Площадь участка</td>
									<td>{{$estate->yard_area}} соток</td>
								</tr>
								<tr>
									<td>Коллическтво комнат</td>
									<td>{{$estate->rooms}}</td>
								</tr>
								<tr>
									<td>Удаленность от моря</td>
									<td>{{$estate->sea_dist}} м.</td>
								</tr>
								<tr>
									<td>Стоимость</td>
									<td>{{$estate->price}} рублей</td>
								</tr>
							</tbody>           
						</table>
					</div>
					<div class="item_descr full">
						<table>
							<tbody>
								<tr>
									<td>Площадь</td>
									<td>{{$estate->house_area}} м<sup>2</sup></td>
								</tr>
								<tr>
									<td>Площадь участка</td>
									<td>{{$estate->yard_area}} соток</td>
								</tr>
								<tr>
									<td>Коллическтво комнат</td>
									<td>{{$estate->rooms}}</td>
								</tr>
								<tr>
									<td>Удаленность от моря</td>
									<td>{{$estate->sea_dist}} м.</td>
								</tr>
								<tr>
									<td>Стоимость</td>
									<td>{{$estate->price}} рублей</td>
								</tr>
								<tr>
									<td>Тип аренды</td>
									<td>{{$estate->period}}</td>
								</tr>
								<tr>
									<td>Адресс</td>
									<td>{{$estate->address}}</td>
								</tr>
							</tbody>
						</table>
						<a class="btn more_btn" href="{{l('estate', [$estate->estate_id])}}">Подробнее</a>
					</div>	
				</div>
				<a class="btn more_btn" href="{{l('estate', [$estate->estate_id])}}">Подробнее</a>
			</div>
		@endforeach	
	</div>
</div>