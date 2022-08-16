<?php

use App\Http\Controllers\DegreeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\QuizController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix'=>'quizes'],function(){
    Route::get('/', [QuizController::class, 'index']);
    Route::get('/{id}', [QuizController::class, 'show']);
});

Route::group(['prefix'=>'questions'],function(){

    Route::post('/{doctor_id}/{quiz_id}', [DegreeController::class, 'nextQuestion']);
});

Route::group(['prefix'=>'doctors'],function(){

    Route::get('/{doctor_id}', [DoctorController::class, 'show']);
});
