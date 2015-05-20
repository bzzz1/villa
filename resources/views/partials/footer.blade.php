@section ("footer")
	<div class="full_screen">	
		<div class="logo_footer">
			<a href="/" class="logo_footer">
				{{ HTML::image("img/markup/logo_footer.jpg", "logo", ['class'=>'logo']) }}
			</a>	
		</div>
		{{-- UNKOMMENT FOR A SIMPLE NAVBAR IN FOOTER --}}
		{{-- <nav class="navbar navbar-default">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">Name_1</a></li>
				<li class=""><a href="/price">Name_2</a></li>
				<li class=""><a href="/delivery">Name_3</a></li>
				<li class=""><a href="/specials">Name_4</a></li>
				<li class=""><a href="/about">Name_5</a></li>
				<li class=""><a href="/contacts">Name_6</a></li>
				<li class=""><a href="/contacts">Name_7</a></li>
				<li class=""><a href="/contacts">Name_8</a></li>
				<li class=""><a href="/contacts">Name_9</a></li>
				<li class=""><a href="/contacts">Name_10</a></li>
			</ul>
		</nav> --}}
		<div class="copyright">
			<div class="client_copy">
				<p>
					<i class="fa fa-copyright"></i>2015. Company Name
				</p>
				<p>All rights reserved</p>
			</div>
			<div class="our_link">
				<p>made by</p>
				<a href="http://www.dev.bzzz.biz.ua">bzzz! web development studio</a>
			</div>
		</div>	
	</div>
@stop