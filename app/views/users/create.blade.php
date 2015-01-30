@extends('layouts.default')


@section('header')
        {{ HTML::style('css/create.css') }}
        <title>ISEF Create User</title>
	<h1>Create User Profile</h1>
@stop


@section('content')

<div class="content">
	{{ Form::open(['route' => 'users.store']) }}
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

	   <div>
	   {{ Form::label('Email', 'Email: ') }}
	   {{ Form::text('Email') }}
	   {{ $errors->first('Email') }}
	   </div>

	   <div>
	   {{ Form::label('FavOS', 'Favourite Operating System: ') }}
	   {{ Form::text('FavOS') }}
	   {{ $errors->first('FavOS') }}
	   </div>

	   <div>
	   {{ Form::label('FavBrowser', 'Favourite Browser: ') }}
	   {{ Form::text('FavBrowser') }}
	   {{ $errors->first('FavBrowser') }}
	   </div>

	   <div> {{ Form::submit('Create User') }} </div>

	{{ Form::close() }}
</div>

@stop
