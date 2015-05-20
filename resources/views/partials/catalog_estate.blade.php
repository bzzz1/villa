@section('catalog')
	<div class="catalog_blocks">
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
	</div>
@stop	