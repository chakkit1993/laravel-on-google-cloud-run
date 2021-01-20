<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LedaerboardApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



 Route::get('/divisions','Api\DivisionContorller@index')->name('admin.divi');
 Route::get('/players','PlayersController@getPlayers')->name('admin.playersJSON');

 Route::get('admin/leaderboards',[LedaerboardApiController::class,'index'])->name('api.leaderboards');

Route::put('admin/leaderboards/update/{id}',[LedaerboardApiController::class,'updateAll'])->name('api.Updateleaderboards');

Route::get('admin/{tournament}/leaderboard','LeaderboardsController@getindex');