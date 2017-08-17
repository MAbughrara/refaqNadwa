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


Route::get('/','GustController@index');
Route::resource('gust','GustController');
//$faker = Faker\Factory::create();
//
//    for ($i = 0; $i < 40; $i++)
//    {
//        Gust::create([
//            'name' => $faker->userName,
//            'age' => $faker->numberBetween(18,60),
//        ]);
//    }