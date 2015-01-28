<?php

class UsersController extends \BaseController {

	public function index()	{
               $users = User::all();
               return View::make('users.index', ['users' => $users]);
	}

	public function show($username)	{
	       $user = User::where('Name', $username)->first();
               return View::make('users.show', ['user' => $user]);
	}

	public function create() {
	       return View::make('users.create');
	}
	
	public function store() {

	       $user = new User;
	       $user->Name = Input::get('Name');
	       $user->Password = Hash::make(Input::get('Password'));
	       // Problem with save line, could be lines above and how user instance data is stored by name
	       $user->save();

	       return Redirect::route('users.index');
	}

}
