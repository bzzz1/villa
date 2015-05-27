{{-- <div class="catalog_blocks">
	@foreach ($items as $item)
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/$item->photo_1", "$item->title", ['class'=>'item_img']) }}
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">{{$item->title}}</a>
				</h2>
				<h2 class="item_title full">
					<a href="#">{{$item->title}}</a>
				</h2>
			</div>
			<div class="short_descr">
				<p class="item_descr">{{$item->short_description}}</p>
				<p class="item_descr full">{{$item->short_description}}</p>
			</div>
			<div class="price">
				<p class="item_price">{{$item->price}}</p>
				<p class="item_currency" >руб.</p>
			</div>
		</div>
	@endforeach
</div> --}}
<div class="catalog_full">
	<div class="catalog_blocks">
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
		<div class="one_item">
			<div class="img">
				{{ HTML::image("img/photos/houses/villa.jpg", "photo", ['class'=>'item_img']) }}
				<div class="add_to"><p>Добавить в избранные</p> <i class="fa fa-heart-o fa-2x"></i> </div>
			</div>
			<div class="short_title">
				<h2 class="item_title">
					<a href="#">Item title</a>
				</h2>
				<h2 class="item_title second">
					<a href="#">Залупнинский район</a>
				</h2>
			</div>
			<div class="short_descr">
				<div class="item_descr">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
						</tbody>           
					</table>
				</div>
				<div class="item_descr full">
					<table>
						<tbody>
							<tr>
								<td>Площадь дома</td>
								<td>180 м<sup>2</sup></td>
							</tr>
							<tr>
								<td>Площадь участка</td>
								<td>2 соток</td>
							</tr>
							<tr>
								<td>Коллическтво комнат</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Удаленность от моря</td>
								<td>300 м.</td>
							</tr>
							<tr>
								<td>Стоимость</td>
								<td>5000000 рублей</td>
							</tr>
							<tr>
								<td>Тип аренды</td>
								<td>помесячно</td>
							</tr>
							<tr>
								<td>Адресс</td>
								<td>ул Залупинская д.33</td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			<a class="btn more_btn">Подробнее</a>
		</div>
	</div>
</div>