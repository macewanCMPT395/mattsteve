<?php

class SessionsController extends \BaseController {

	public function create() {
	       if (Auth::check()) return Redirect::to('/admin');

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

}
