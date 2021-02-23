<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', "StudentController@index");

// Route::get('/post/{id}', "StudentController@index");

// Route::resource('/school', "StudentController");

// Route::get('/m1', function () {
//     // return view("m1", ["name"=>"Miko", "age"=>19]);
//     return view("/m1")->with("name", "Maksat")->with("age",25)->with("date", "2002-01-03");
// });

Route::get('/m1/{name}/{age}', function ($name, $age) {
    return view("/m1", compact('name', 'age')); 
});


// Route::get('/user5/{number1}/{sign}/{number2}', "CalculatorController@operation");

Route::get('/details/{student}', 'StudentController@get_students');


Route::get('/sdate/{date}', 'StudentController@date');