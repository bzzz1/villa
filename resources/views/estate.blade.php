@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('meta')
	<title>Крым-Вилла - {{ $estate->title }}</title>
	<meta name='keywords' content='{{ $estate->title }} в Крыму, аренда недвижимости в Крыму.'>
	<meta name='description' content='{{ $estate->title }}. {{ $estate->description }}'>
@stop

@section('body')
	<div class="estate_block">
		<div class="photos_map">
			<div class="fotorama"
				 data-nav="thumbs"
				 data-arrows="true"
				 data-click="true"
				 data-swipe="true"
				 data-trackpad="true"
				 data-loop="true"
				 data-width="100%"
			     data-ratio="800/600"
				 >
					@if(count($images) > 0)
						{{HTML::image('img/photos/estates/'.$estate->preview, $estate->title)}}
						@foreach($images as $image)
							{{HTML::image('img/photos/estates/'.$image->image, $estate->title)}}
						@endforeach
					@else 
						@if(empty($estate->preview))
							{{HTML::image('img/photos/estates/alien.png', '')}}
						@else
							{{HTML::image('img/photos/estates/'.$estate->preview, $estate->title)}}
						@endif
					@endif
			</div>
			<div class="map_container_small" id="map_one_elem">
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
			<a class="btn favourite_btn js_select add_to">Добавить в избранные</a>
			<a class="btn favourite_btn_done js_select added_to">Удалить из избранных</a>
			<div class="call">
				<p>Позвоните нам прямо сейчас</p>
				<p class="phone_title">по телефону</p> 
				<p class="phone">+7 (812) 954-11-09</p>
			</div>
		</div>
	</div>
	<script>
		var lat = "{{$estate->latitude}}";
		var lng = "{{$estate->longitude}}";
		var latLng = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
		var image = '/img/layout/marker_b.png';
		var title = "{{$estate->title}}"
		// console.log('just test' + lat);


		function initialize() {
			var mapOptions = {
			  center: latLng,
			  zoom: 6
			  
			};
			var map = new google.maps.Map(document.getElementById('map_one_elem'), mapOptions);

			var marker = new google.maps.Marker({
				draggable:true,
   				animation: google.maps.Animation.DROP,
			    position: latLng,
			    map: map,
			    title: title,
			    icon: image
			 });
			function toggleBounce() {

			  if (marker.getAnimation() != null) {
			    marker.setAnimation(null);
			  } else {
			    marker.setAnimation(google.maps.Animation.BOUNCE);
			  }
			}
			// marker.setMap(map)
		};
		google.maps.event.addDomListener(window, 'load', initialize);

	</script>
@stop