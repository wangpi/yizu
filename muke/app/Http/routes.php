<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//路由  首页
Route::get('/', function () {
    return view('welcome');
});

//课程
Route::get('learn',"HelloController@learn");
//分类
Route::get('fenlei',"HelloController@fenlei");
//登陆
Route::post('login',"HelloController@login");
//退出
Route::get('layout','HelloController@layout');
//忘记密码
Route::get('forgot','HelloController@forget');
//验证码
Route::get('hello/captcha/{tmp}', 'HelloController@captcha');
//验证
Route::post('yanzheng','HelloController@yanzheng');
//重置密码
//Route::get('hello/zhao/{name}','HelloController@zhao');
Route::get('zhao','HelloController@zhao');
//发送邮件常见问题
Route::get('question1','HelloController@question');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
