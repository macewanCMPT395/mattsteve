<?php

class SessionsController extends \BaseController {

	public function create() {
	       if (Auth::check()) return Redirect::route('users.show', Auth::user()->username);

	       return View::make('sessions.create');
	}

	public function store() {
	       if (Auth::attempt(Input::only('username', 'password'))) {
		  return Redirect::route('users.show', Auth::user()->username);
	       }
	       return 'Failure';
	}
	
	public function destroy() {
	       Auth::logout();
	       return Redirect::to('/');
	}

	public function edit() {
	       return View::make('sessions.edit');
	}

	public function updateinfo() {
               $input = Input::all();

	       $user = User::find(Auth::user()->id);

	       $user->username = Input::get('username');
               $user->password = Hash::make(Input::get('password'));
	       $user->email = Input::get('email');
	       $user->favos = Input::get('favos');
	       $user->favbrowser = Input::get('favbrowser');

               $user->save();

	       return Redirect::route('users.show', $user->username);

	}

}
