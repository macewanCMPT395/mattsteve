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

	public function edit() {
	       return View::make('sessions.edit');
	}

	public function update() {
               //$input = Input::all();

               //if (! $this->user->fill($input)->isValid()) {
                  //return Redirect::back()->withInput()->withErrors($this->user->errors);
               //}

	       //$user = Auth::user();
	       //$user = User::where('username', '=', Auth::user()->username);

	       //$user->username = Input::get('username');
               //$user->password = Hash::make(Input::get('password'));
	       //$user->email = Input::get('email');
	       //$user->favos = Input::get('favos');
	       //$user->favbrowser = Input::get('favbrowser');

               //$user->save();

               //return Redirect::route('users.show');
	}

}
