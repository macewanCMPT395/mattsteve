@extends('layouts.default')

@section('content')

	<h1>All Users</h1>
	
	@if ($users->count())
	    @foreach ($users as $user)
	    	     <li>{{ link_to("/users/{$user->Name}", $user->Name) }}</li>
		     @endforeach
	@else
		<p>There are no users in the system at this time.</p>
	@endif

@stop
