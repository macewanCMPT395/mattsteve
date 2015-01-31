@extends('layouts.default')


@section('header')
        {{ HTML::style('css/default.css') }}
        <title>ISEF Create User</title>
	<h1>Create User Profile</h1>
@stop


@section('content')

<div class="content">
	{{ Form::open(['route' => 'users.store']) }}
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

	   <div>
	   {{ Form::label('email', 'Email: ') }}
	   {{ Form::text('email') }}
	   {{ $errors->first('email') }}
	   </div>

	   <div>
	   {{ Form::label('favos', 'Favourite Operating System: ') }}
	   {{ Form::text('favos') }}
	   {{ $errors->first('favos') }}
	   </div>

	   <div>
	   {{ Form::label('favbrowser', 'Favourite Browser: ') }}
	   {{ Form::text('favbrowser') }}
	   {{ $errors->first('favbrowser') }}
	   </div>

	   <div> {{ Form::submit('Create User') }} </div>

	{{ Form::close() }}
</div>

@stop
