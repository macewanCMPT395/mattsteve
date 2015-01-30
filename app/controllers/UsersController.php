<?php

class UsersController extends \BaseController {

      protected $user;

      	public function __construct(User $user) {
	       $this->user = $user;
      }

	public function index()	{
               $users = $this->user->all();
               return View::make('users.index', ['users' => $users]);
	}

	public function show($username)	{
	       $user = $this->user->where('username', $username)->first();
	       return View::make('users.show', ['user' => $user]);
	}

	public function create() {
	       return View::make('users.create');
	}
	
	public function store() {

	       $input = Input::all();

	       if (! $this->user->fill($input)->isValid()) {
	       	  return Redirect::back()->withInput()->withErrors($this->user->errors);
	       }

	       $this->user->password = Hash::make(Input::get('password'));
	       $this->user->remember_token = 'default';
	       $this->user->save();

	       return Redirect::route('users.show', Input::get('username'));
	}

}
