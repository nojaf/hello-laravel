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

// Route::get('/', function () {
// 	$people = ['Taylor','Matt','Jeffrey'];

//    return view('welcome', compact('people'));
//    // return view('welcome')->withPeople($people);
//    // return view('welcome')->with('people', $people);
// });

Route::get('', 'PagesController@home');
Route::get('about', 'PagesController@about');