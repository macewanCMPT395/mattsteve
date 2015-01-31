#Introduction To Software Engineering Facebook
-----------------------------------------------------------------------------------------------------------------------------
Introduction
-----------------------------------------------------------------------------------------------------------------------------
This is the source code for our web application "Introduction To Software Engineering Facebook". Users can create accounts on the application and as well as view the information of other users on the app.


Installing
-----------------------------------------------------------------------------------------------------------------------------
To begin, first download [Composer][1] globally. This is the dependency manager for php. If using a Unix machine, this can be done by running 'curl -sS https://getcomposer.org/installer | php'  in the terminal. Once it is installed, move it into your bin by running "mv composer.phar /usr/local/bin/composer" in the terminal. 

The next step is to get laravel installed. This can be done by running "composer create-project laravel/laravel learning". The program will then begin to compile all of the dependancies that laravel requires, and download them onto ur machine, and place them in a directory called "learning".


Lastly to begin using the app, go into the learning directory by running in the command "cd learning", then run the command "php artisan serve". This will boot up a server that can be accessed at http://localhost:8000. Enter that url into the browser and you will be brought to the Introduction to software engineering facebook home page.



[1]: https://getcomposer.org/






## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
