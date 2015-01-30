<?php

class SessionsController extends \BaseController {

	public function create() {
	       return View::make('sessions.create');
	}

	public function store() {
	       if (Auth::attempt(Input::only('Name', 'Password'))) {
	       	  return 'Success';
		  //return Auth::user();
	       }
	       return Redirect::back()->withInput();
	}
	
	public function destroy() {
	       Auth::logout();
	       return Redirect::to('/');
	}

}
