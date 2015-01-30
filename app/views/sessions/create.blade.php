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
           {{ Form::label('Name', 'Username: ') }}
           {{ Form::text('Name') }}
           {{ $errors->first('Name') }}
           </div>

           <div>
           {{ Form::label('Password', 'Password: ') }}
           {{ Form::password('Password') }}
           {{ $errors->first('Password') }}
           </div>

	   <div>{{ Form::submit('Login') }}</div>

</div>

@stop
