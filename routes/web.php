<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is location routes which can access with the web browser. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('index');
    })
    ->name('user.root');

Route::get('/visi-misi', function () {
        return view('visi-and-misson');
    })
    ->name('user.visiAndMission');

Route::get('/home', 'HomeController@index')->name('home');

/*
| ------------------------------------
| Authentication Routes Configuration.
| ------------------------------------
*/
Auth::routes();

Route::group(['namespace' => 'User'], function () {
    Route::get('/hutan', 'ForestController@index')->name('user.forest');
    Route::get('/hutan/{id}', 'ForestController@show')->name('user.forest-detail');
    Route::get('/donasi/{id}', 'DonationController@show')
        ->middleware('auth')
        ->name('user.donation-detail');
    Route::get('/donasi', 'DonationController@index')->name('user.donation');
    Route::get('/kontak', 'ContactController@index')->name('user.contact');
});

Route::group([
    'namespace'  => 'Admin',
    'prefix'     => '/admin',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'RootController@index')->name('admin.root');
    Route::get('/hutan', 'ForestController@index')->name('admin.forest');
    Route::get('/hutan/add', 'ForestController@create')->name('admin.forest.add');
    Route::post('/hutan/new', 'ForestController@store')->name('admin.forest.new');
    Route::get('/hutan/edit/{id}', 'ForestController@edit')->name('admin.forest.edit');
    Route::get('/hutan/hapus/{id}', 'ForestController@destroy')->name('admin.forest.destroy');

    Route::get('/donation', 'DonationController@index')->name('admin.donation');
    Route::get('/donation/add', 'DonationController@create')->name('admin.donation.add');
    Route::post('/donation/add/new', 'DonationController@store')->name('admin.donation.new');
    Route::get('/donation/edit/{id}', 'DonationController@edit')->name('admin.donation.edit');
    Route::get('/donation/hapus/{id}', 'DonationController@edit')->name('admin.donation.destroy');

    Route::get('/message', 'MessageController@index')->name('admin.message');
    Route::get('/message/{id}', 'MessageController@show')->name('admin.message.detail');
    Route::get('/message/{id}/replay', 'MessageController@create')->name('admin.message.replay');

    Route::get('/volunteer', 'VolunteerController@index')->name('admin.volunteer');
    Route::get('/sumbangan', 'EndowmentController@index')->name('admin.endowment');
});
