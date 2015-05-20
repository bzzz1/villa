@section('header')
	<header>
		<div class="container_header">
			{{-- insert header makup --}}
			@yield('authorization') {{-- here will be inserted authorization and enterenace --}}
		</div>
		<div class="container_navbar">
			@yield('navbar')
		</div>	
	</header>
@stop
