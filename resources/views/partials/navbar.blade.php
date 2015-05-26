@section('navbar')
{{-- UNKOMMENT FOR A SIMPLE STATIC NAVBAR insert name of navbar link into if statement class="@if ($env == 'name') active @end if --}}
<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<li class="active"><a href="/">поиск объектов</a></li>
		<li class=""><a href="/articles">новости</a></li>
		<li class=""><a href="/how_to">как орендовать</a></li>
		<li class=""><a href="/rent_sale">сдать/продать</a></li>
		<li class=""><a href="/selected">избранные</a></li>
		<li class=""><a href="/contacts">контакты</a></li>
	</ul>
</nav>
@stop