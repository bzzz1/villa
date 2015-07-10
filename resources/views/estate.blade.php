@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
	@include('partials/flash_messages')
	<div class="estate_block">
		<div class="photos_map">
			<div class="fotorama"
				 data-nav="thumbs"
				 data-arrows="true"
				 data-click="true"
				 data-swipe="true"
				 data-trackpad="true"
				 data-loop="true"
				 >
					@if(empty($images))
					 	@foreach($images as $image)
							{{HTML::image('img/photos/estates/'.$image->image, $estate->title)}}
						@endforeach
					@else
							{{HTML::image('img/photos/estates/alien.png')}}
					@endif
			</div>
			<div class="map_container_small">
				{{-- insert map here --}}
			</div>
		</div>
		<div class="text_block">
			<div class="item_descr">
				<div class="heading">
					<h1 class="estate_title">{{$estate->title}}</h1>
					<div class="icon">
						<i class="fa fa-heart fa-5x"></i>
					</div>
				</div>
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
							<td>Количество комнат</td>
							<td>{{$estate->rooms}}</td>
						</tr>
						<tr>
							<td>Удалённость от моря</td>
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
							<td>Адрес</td>
							<td>{{$estate->address}}</td>
						</tr>
					</tbody>
				</table>
			</div>	
			<div class="description">
				{{$estate->description}}
			</div>
		</div>
		<div class="bottom">
			<a class="btn favourite_btn">Добавить в избранные</a>
			<a class="btn favourite_btn_done">Удалить из избранных</a>
			<div class="call">
				<p>Позвоните нам прямо сейчас</p>
				<p class="phone_title">по телефону</p> 
				<p class="phone">+7 (812) 954-11-09</p>
			</div>
		</div>
	</div>
@stop