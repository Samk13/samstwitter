<?php

// DB::listen(function ($query){
//     var_dump($query->sql,$query->bindings);
// });

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){

    // Tweets routes
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');

    // Profile routes
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update')->middleware('can:edit,user');

    // Explore routes
    Route::get('/explore', 'ExploreController@index');
});




Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');


