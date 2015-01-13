<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Techs System :: @yield('title')</title>
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/master.css') }}

</head>
<body>
<div class="container-fluid techs-app">
	<div class="row-fluid header">
		<div class="span12">
			<h1>{{ HTML::image('img/techbods-logo.png', 'techbods', array('class' => 'logo')) }}Techs App</h1>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3">
			<ul class="nav nav-list well">
				@if(Auth::user())
					<li class="nav-header">{{ ucwords(Auth::user()->username) }}</li>
					<li>{{ HTML::link('users', 'Technicians') }}</li>
					<li>{{ HTML::link('jobs', 'Job List') }}</li>
					<li>{{ HTML::link('logout', 'Logout') }}</li>
				@else
					<li>{{ HTML::link('login', 'Login') }}</li>
				@endif
			</ul>
		</div>
		<div class="span9">
			
			@yield('content')
		
		</div>
	</div>
</div>
</body>
</html>