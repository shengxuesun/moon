<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;
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
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', function () {
    // echo "Moon Project: April 2020";
    // $device_id = "goodluck";


    // // Redis::setex($device_id, 300, $send);

    // $auth_info = Redis::get($device_id);

    // echo $auth_info;

    // $server_mobile = Str::before($auth_info, '-'
    // $server_code = Str::after($auth_info, '-');

    // // echo(Redis::get($device_id));
    // echo $server_code;

});
