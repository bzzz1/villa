@extends('/layouts/layout')
@extends('/partials/header')
@extends('partials/footer')

@section('body')
	<div class="main_page container">
		@include('partials/flash_messages')
		{{ Form::open(['url'=>'/add_stock', 'method'=>'POST', 'class'=>'add_stock']) }}
			{{ Form::text('code', null, ['class'=>'form-control', 'required']) }}
			{{ Form::submit('Add Stock', ['class'=>'form-control']) }}
		{{ Form::close() }}

		<table class="stocks table table-striped">
			<thead>
				<tr>
					<td>#stock_id</td>
					<td>code</td>
					<td>title</td>
					<td>currency</td>
					<td>#subsector_id</td>
					<td>added on</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				@foreach($stocks as $stock)
					<tr>
						<td>{{ $stock->stock_id }}</td>
						<td>{{ $stock->code }}</td>
						<td>{{ $stock->name }}</td>
						<td>{{ $stock->currency }}</td>
						<td>{{ $stock->subsector_id }}</td>
						<td>{{ Carbon::parse($stock->added_on)->format('Y-m-d') }}</td>
						<td>
							{{ Form::open(['url'=>'/remove_stock/$stock->stock_id', 'method'=>'POST', 'class'=>'add_stock']) }}
								<i aria-hidden="true" class="fa fa-times form_submit delete_stock"></i>
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop