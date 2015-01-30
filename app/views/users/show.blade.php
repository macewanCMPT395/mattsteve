@extends('layouts.default')

@section('header')
        {{ HTML::style('css/profile.css') }}
        <title>ISEF Profile</title>
	<h1>Profile</h1>
@stop

@section('content')

<div class="content">
     <h1>{{$user->Name}}</h1>
     <p>Email: {{$user->Email}}</p>
     <p>Favourite Operating System: {{$user->FavOS}}</p>
     <p>Favourite Browser: {{$user->FavBrowser}}</p>

</div>

@stop
