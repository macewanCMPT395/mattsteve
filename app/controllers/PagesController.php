<?php

class PagesController extends BaseController {

      public function home() {

      	$name = 'New User';

        return View::make('home')->with('name', $name);

      }

      public function about() {

        return View::make('about');
      
      }

}