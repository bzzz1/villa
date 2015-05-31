<div class="form_block">
	<h3>Подать заявку</h3>
	{{-- <i class="fa fa-times fa-lg"></i> --}}
	<hr class="form_hr">
	<div class="form">
		{{ Form::open(['url'=>'/question', 'method'=>'POST', 'class'=>'contact_form']) }}
			<div class="inner_form_block">
				<div class="select">
					{{ Form::select('activity', ['dfвыава'=>'dfавыаываs'], null, ['class'=>'form-control', 'placeholder'=>'выбирите действие', 'reaqired']) }}
				</div>
				<div class="phone">
					{{ Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Телефон:'])}}
				</div>
				<div class="email">
					{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email:'])}}
				</div>
				<div class="company">
					{{ Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Компания:'])}}
				</div>
				<div class="subject">
					{{ Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Тема'])}}
				</div>
				<div class="text_message">
					{{ Form::textarea('text_message', null, ['class'=>'form-control', 'placeholder'=>'Сообщение'])}}
				</div>
			</div>
			{{ Form::submit('Отправить', ['class'=>'btn contact_form_submit']) }} 
		{{ Form::close() }}
	</div>
</div>	