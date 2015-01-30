@extends('layouts.default')

@section('header')
        {{ HTML::style('css/profile.css') }}
        <title>ISEF Profile</title>
	<h1>Profile</h1>
@stop

@section('content')

<div class="content">
     <h1>{{$user->username}}</h1>
     <p>Email: {{$user->email}}</p>
     <p>Favourite Operating System: {{$user->favos}}</p>
     <p>Favourite Browser: {{$user->favbrowser}}</p>

</div>

@stop
