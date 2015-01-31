@extends('layouts.default')

@section('header')
        {{ HTML::style('css/default.css') }}
        <title>ISEF Profile</title>
	<h1>Profile</h1>
@stop

@section('content')

<div class="content">
     <h1>{{Auth::user()->username}}</h1>
     <p>Email: {{Auth::user()->email}}</p>
     <p>Favourite Operating System: {{Auth::user()->favos}}</p>
     <p>Favourite Browser: {{Auth::user()->favbrowser}}</p>

     <div class="updateform">
     	  {{ Form::open(['route' => 'sessions.update']) }}

     	  <div>
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username') }}
     	  </div>

     	  <div>
		{{ Form::label('password', 'Password: ') }}
		{{ Form::password('password') }}
     	  </div>

      	  <div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::text('email') }}
      	  </div>

      	  <div>
		{{ Form::label('favos', 'Favourite Operating System: ') }}
       		{{ Form::text('favos') }}
      	  </div>

      	  <div>
		{{ Form::label('favbrowser', 'Favourite Browser: ') }}
       		{{ Form::text('favbrowser') }}
      	  </div>

      	  <div> {{ Form::submit('Update Profile') }} </div>

	  {{ Form::close() }}
     </div>

</div>

@stop
