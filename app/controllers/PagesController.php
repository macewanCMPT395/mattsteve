<?php

class PagesController extends BaseController {

      public function home() {

      	$name = 'Joe';

	$users = DB::table('Users')->get();
	//$users = DB::table('Users')->where('Name', '=', 'Tom')->get();
        //return View::make('home')->with('name', $name);

	return $users;

      }

      public function about() {

        return View::make('about');
      
      }

      public function users() {
      
      	//$users = DB::table('Users')->get();

        $users = User::all();     
        return View::make('users.index', ['users' => $users]);
      }


}