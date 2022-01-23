<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/movies','App\\Http\\Controllers\\MovieController@index')->name('movies.index');
Route::get('/actors','App\\Http\\Controllers\\ActorController@index')->name('actors.index');
Route::get('/awards','App\\Http\\Controllers\\AwardController@index')->name('awards.index');
Route::get('/genres','App\\Http\\Controllers\\GenreController@index')->name('genres.index');
Route::get('/producers','App\\Http\\Controllers\\ProducerController@index')->name('producers.index');
Route::get('/directors','App\\Http\\Controllers\\DirectorController@index')->name('directors.index');

Route::get('/movies/delete/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::get('/moviesAdd','App\\Http\\Controllers\\MovieController@create')->name('moviesAdd.create');
Route::post('/moviesAdd','App\\Http\\Controllers\\MovieController@store')->name('moviesAdd.store');

Route::get('/moviesEdit','App\\Http\\Controllers\\MovieController@edit')->name('moviesEdit.edit');
Route::post('/moviesEdit','App\\Http\\Controllers\\MovieController@update')->name('moviesEdit.update');



