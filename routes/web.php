<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\PlayersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentsController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');


Route::get('/admin/tournaments',[TournamentsController::class,'index'])->name('admin.tournaments');
Route::get('/admin/tournaments/create',[TournamentsController::class,'create'])->name('admin.tournaments.create');


Route::get('/admin/divisions',[DivisionsController::class,'index'])->name('admin.divisions');
// Route::get('/admin/divisions/create',[DivisionsController::class,'create'])->name('admin.divisions.create');
Route::post('/admin/divisions','DivisionsController@create');


Route::get('/admin/players',[PlayersController::class,'index'])->name('admin.players');
//Route::post('/admin/players/create',[PlayersController::class,'create'])->name('admin.players.create');
Route::post('/admin/players','PlayersController@create');
