@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
	<div class="estate_block">
		<div class="left_block">
			<div class="fotorama">
				<img src="http://s.fotorama.io/1.jpg">
				<img src="http://s.fotorama.io/2.jpg">
			</div>
			<div class="map">
				{{-- insert map here --}}
			</div>
		</div>
		<div class="text_block">
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
			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta labore recusandae illum neque officiis quidem natus, voluptas beatae. Eos magnam culpa sapiente dolore repellendus minus dignissimos veniam consectetur iusto reprehenderit?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quidem, eveniet voluptatibus, nesciunt neque accusantium similique saepe facilis consequatur, ratione deleniti illum magnam quas aut dolores molestiae eligendi beatae ullam.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem eveniet delectus vero, repellat sequi non ipsum libero beatae maiores iste quasi debitis itaque, perspiciatis rem fuga explicabo magnam harum. Necessitatibus!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, magni, non! Voluptatem quas minima provident labore, ullam a cum earum ut aliquam, dignissimos sit molestiae eveniet asperiores tempora perspiciatis voluptates.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quibusdam, ad recusandae pariatur veritatis numquam, earum repellat totam laborum tenetur blanditiis praesentium voluptatibus itaque eaque error quo ut, officiis saepe.</p>
			</div>
		</div>
		<div class="bottom">
			<a class="btn">Добавить в избранные</a>
			<p>Позвоните нам прямо сейчас</p>
			<p>по телефону +7 (812) 954-11-09</p>
		</div>
	</div>
@stop