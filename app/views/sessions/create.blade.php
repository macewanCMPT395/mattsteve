@extends('layouts.default')

@section('header')
	{{ HTML::style('css/home.css') }}
	<title>ISEF Login</title>
	<h1>Login</h1>
@stop

@section('content')

<div class="content">
     {{ Form::open(['route' => 'sessions.store']) }}
           <div>
           {{ Form::label('username', 'Username: ') }}
           {{ Form::text('username') }}
           {{ $errors->first('username') }}
           </div>

           <div>
           {{ Form::label('password', 'Password: ') }}
           {{ Form::password('password') }}
           {{ $errors->first('password') }}
           </div>

	   <div>{{ Form::submit('Login') }}</div>

</div>

@stop
