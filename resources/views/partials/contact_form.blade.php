<div class="form_block_separate" id="contact_form" style="display:none">
	<h3>Задать вопрос</h3>
	{{-- <i class="fa fa-times fa-lg"></i> --}}
	<div class="form">
		<hr class="form_hr">
		{{ Form::open(['url'=>l('feedback'), 'method'=>'POST', 'class'=>'contact_form', 'data-parsley-validate']) }}
			<div class="inner_form_block">
				<div class="name">
					{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Имя:', 'required'])}}
					<i class="fa fa-chevron-right"></i>
				</div>
				<div class="phone">
					{{ Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Телефон:'])}}
					<i class="fa fa-chevron-right"></i>
				</div>
				<div class="email">
					{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email:', 'required'])}}
					<i class="fa fa-chevron-right"></i>
				</div>
				<div class="company">
					{{ Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Компания'])}}
					<i class="fa fa-chevron-right"></i>
				</div>
				<div class="subject">
					{{ Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Тема'])}}
					<i class="fa fa-chevron-right"></i>
				</div>
				<div class="text_message">
					{{ Form::textarea('text_message', null, ['class'=>'form-control', 'placeholder'=>'Сообщение', 'required'])}}
					<i class="fa fa-chevron-right"></i>
				</div>
				<div class="send btn js_send_contact_form">
					<i class="fa fa-envelope-o fa-2x"></i>
				</div>
			</div>
			{{ Form::submit('Отправить', ['class'=>'btn contact_form_submit']) }} 
		{{ Form::close() }}
	</div>
</div>	