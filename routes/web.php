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
    return view('front-end.home.home');
    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');



// Route::post('/admin/tournaments',[TournamentsController::class,'store'])->name('admin.tournaments.store');
// Route::put('/admin/tournaments/{tournament}',[TournamentsController::class,'update'])->name('tournaments.update');
// Route::patch('/admin/tournaments/{tournament}',[TournamentsController::class,'update'])->name('admin.tournaments.update');



Route::resource('/admin/tournaments','TournamentsController');
Route::get('/admin/tournaments/details/{tournament}',[TournamentsController::class,'details'])->name('tournaments.details');
// Route::put('/admin/tournaments/update/{tournament}',[TournamentsController::class,'update'])->name('tournaments.update');


Route::resource('/admin/divisions','DivisionsController');

Route::get('/admin/divisions/details/{division}',[DivisionsController::class,'details'])->name('divisions.details');
// Route::get('/admin/divisions',[DivisionsController::class,'index'])->name('admin.divisions');
// Route::get('/admin/divisions/create',[DivisionsController::class,'create'])->name('admin.divisions.create');
// Route::post('/admin/divisions','DivisionsController@create');



Route::resource('/admin/players','PlayersController');
Route::get('/admin/players/details/{player}',[PlayersController::class,'details'])->name('players.details');
Route::get('/admin/players/tournament-player/{tournament}/{player}',[PlayersController::class,'myedit'])->name('players.myedit');
Route::get('/admin/players/player-checkpoint/{player}',[PlayersController::class,'updateCheckpoint'])->name('players.updateCheckpoint');
// Route::get('/admin/players',[PlayersController::class,'index'])->name('admin.players');
//Route::post('/admin/players/create',[PlayersController::class,'create'])->name('admin.players.create');
// Route::post('/admin/players','PlayersController@create');


Route::resource('/admin/leaderboard','LeaderboardsController');

Route::get('/divisions/export/{tournament}', 'ImportExcelController@exportExcel')->name('divisions.export');
Route::post('/admin/divisions/import', 'ImportExcelController@import')->name('divisions.import');
