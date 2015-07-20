@if (Session::get('message'))
	<div id="js_flash_message">
		<p class="message_text">{{ Session::get('message') }}</p>
	</div>
@endif
@if ($errors->has())
	<div id="js_flash_message">
		<p class="message_text">
			@foreach ($errors->all() as $error)
				{{ $error }}<br>
			@endforeach
		</p>
	</div>
@endif