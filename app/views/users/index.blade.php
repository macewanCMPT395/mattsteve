@extends('layouts.default')

@section('header')
        {{ HTML::style('css/users.css') }}
        <title>ISEF Users</title>
	<h1>All Users</h1>
@stop

@section('content')

<div class="content">
	@if ($users->count())
	    @foreach ($users as $user)
	    	     <li>{{ link_to("/users/{$user->Name}", $user->Name) }}</li>
		     @endforeach
	@else
		<p>There are no users in the system at this time.</p>
	@endif
</div>

@stop
