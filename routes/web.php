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

Auth::routes();


/**
| Here is where you can register web routes for your application.
|
 */
Route::get('/', function () {
    return view('index');
});

Route::get('/visi-misi', function () {
    return view('visi-and-misson' );
})->name('user.visiAndMission');

Route::get('/home', 'HomeController@index')->name('home');


/*
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'User'], function () {
    Route::get('/hutan', 'ForestController@index')
        ->name('user.forest');
    Route::get('/hutan/{id}', 'ForestController@show')
        ->name('user.forest-detail');

    Route::get('/donasi', 'DonationController@index')
        ->name('user.donation');
    Route::get('/donasi/{id}', 'DonationController@show')
        ->name('user.donation-detail');

    Route::get('/kontak', 'ContactController@index')
        ->name('user.contact');
});
