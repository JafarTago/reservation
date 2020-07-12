<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'IndexController@index');

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('register', ['as' => 'register', 'uses' => 'AuthController@register']);
Route::post('reservation', ['as' => 'reservation', 'uses' => 'ReservationController@reservation']);


//目前沒有用到的
Route::get('/checkIn/{userId}', ['as' => 'checkIn', 'uses' => 'CheckInController@checkIn']);

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//
//Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
//    Route::get('/logout', 'Auth\LoginController@logout');
//
//    Route::group(['prefix' => 'paymentInfo'], function () {
//        Route::get('/', ['as' => 'paymentInfo', 'uses' => 'PaymentController@index']);
//    });
//
//    Route::group(['prefix' => 'enroll'], function () {
//        Route::get('/', ['as' => '/', 'uses' => 'EnrollController@index']);
//        Route::get('edit/{playerNumber}', ['as' => 'edit', 'uses' => 'EnrollController@edit']);
//        Route::put('update', ['as' => 'update', 'uses' => 'EnrollController@update']);
//        Route::post('enroll', ['as' => 'enroll', 'uses' => 'EnrollController@enroll']);
//        Route::delete('cancel', ['as' => 'cancel', 'uses' => 'EnrollController@cancel']);
//    });
//
//    Route::group(['prefix' => 'account'], function () {
//        Route::get('/', 'AccountController@index');
//        Route::put('update', 'AccountController@update');
//    });
//
//    Route::group(['prefix' => 'player'], function () {
//        Route::get('ajaxGetPlayer/{playerSn}', 'PlayerController@ajaxGetPlayer');
//        Route::delete('deletePlayer', 'PlayerController@deletePlayer');
//    });
//
//
//    Route::group(['prefix' => 'paymentInfo'], function () {
//        Route::get('/', 'PaymentController@index');
//    });
//
//
//    Route::group(['prefix' => 'gameInfo'], function () {
//        Route::get('/leaderMeeting', 'GameInfoController@leaderMeeting');
//    });
//});

//<form action="{{ route('setting.update') }}" method="POST">

