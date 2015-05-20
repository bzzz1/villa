@section('navbar')
<nav class="navbar navbar-default">
	<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
     		</button>
      		<a class="navbar-brand" href="#">Brand</a>
    	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav">
        	<li class="active">
        		<a href="#">Link <span class="sr-only">(current)</span></a>
        	</li>
       		<li>
       			<a href="#">Link</a>
       		</li>
       		{{-- UNKOMMENT FOR DROPDOWN --}}
       		
        	{{-- <li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          		<ul class="dropdown-menu" role="menu">
            		<li><a href="#">Action</a></li>
            		<li><a href="#">Another action</a></li>
            		<li><a href="#">Something else here</a></li>
            		<li class="divider"></li>
            		<li><a href="#">Separated link</a></li>
            		<li class="divider"></li>
            		<li><a href="#">One more separated link</a></li>
          		</ul>
        	</li> --}}
      	</ul>

      	{{-- UKOMMENT FOR SEARCH --}}
      	{{-- {{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'header_search navbar-form navbar-left')) }}
			{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control input_search', 'id' =>'search']) }} 
		{{ Form::close() }}	

      	{{-- UNKOMMENT FOR A SECOND PART OF NAVBAR --}}
      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="#">Link</a></li>
        	<li class="dropdown">
        	  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
        	  	<ul class="dropdown-menu" role="menu">
        	    	<li><a href="#">Action</a></li>
        	    	<li><a href="#">Another action</a></li>
        	    	<li><a href="#">Something else here</a></li>
        	    	<li class="divider"></li>
        	    	<li><a href="#">Separated link</a></li>
        	  	</ul>
        	</li>
      	</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{{-- UNKOMMENT FOR A SIMPLE STATIC NAVBAR insert name of navbar link into if statement class="@if ($env == 'name') active @end if --}}
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
@stop