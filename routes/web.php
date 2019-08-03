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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');
// 创建用户
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
// 编辑用户
Route::get('/user/{user}/edit', 'UserController@edit');
Route::put('/user/{user}', 'UserController@update');
// 删除用户
Route::get('/user/{user}/delete', 'UserController@delete');
// 个人设置
Route::get('/user/me/setting', 'UserController@setting');
// 个人设置行为
Route::post('/user/me/setting', 'UserController@settingStore');
Route::get('/foo', function(){
    $exitCode = \Illuminate\Support\Facades\Artisan::call('email:send chl --queue=default');
});

// 聊天室
Route::get('/messages', function () {
    return \App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function (\Illuminate\Http\Request $request) {
    $message = $request->user()->message()->create($request->all());
    $message->load('user');

    broadcast(new \App\Events\PushMessageEvent($request->user(), $message))->toOthers();

    return $message;
})->middleware('auth');