<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		@yield('header')
	</head>

	<body>

	  <div class="nav">
	    <ul>
              <li> {{ HTML::link('/', 'Home') }} </li>
              <li> {{ HTML::linkRoute('users.index', 'Users') }} </li>
              <li> {{ HTML::linkRoute('users.create', 'Create User') }} </li>
              <li> {{ HTML::link('/about', 'About') }} </li>
	    </ul>
	  </div>

	  @yield('content')

	</body>
</html>
