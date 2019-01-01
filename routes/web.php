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

// Route::get('/', function () {
    // return view('welcome');
// });


Route::get('/', ['uses'=>'HomeController@index','as'=>'home']);
Route::get('/about-us', ['uses'=>'AboutusController@index','as'=>'about-us']);
Route::get('/blog', ['uses'=>'BlogController@index','as'=>'blog','as'=>'blog']);
Route::get('/carrriers', ['uses'=>'CarriersController@index','carrriers'=>'carrriers']);
Route::get('/life-income', ['uses'=>'LifeincomeController@index',''=>'life-income']);
Route::get('/retirement-basics', ['uses'=>'RetirementbasicsController@index','as'=>'retirement-basics']);
Route::get('/solution', ['uses'=>'SolutionController@index','as'=>'solution']);
Route::get('/life-basics', ['uses'=>'LifebasicsController@index','as'=>'life-basics']);
