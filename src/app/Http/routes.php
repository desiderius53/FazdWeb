<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::get('/', function() {
	return Redirect::to("index.htm");
});
Route::resource("book","bookController",["except" =>["create, edit"]]);
Route::resource("recipe","recipeController",["except" =>["create, edit"]]);

