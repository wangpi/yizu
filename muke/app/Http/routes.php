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
Route::post('xiugai','HelloController@xiugai');
//发送邮件常见问题
Route::get('question1','HelloController@question');
//注册
Route::get('register','HelloController@register');

Route::get('register1','HelloController@register1');

Route::post('zhu','HelloController@zhuce');
//筛选
Route::get('shai','HelloController@shai');
//体验学习
Route::get('aaa',"HelloController@Index");
//开始学习
Route::get('bbb',"HelloController@Go");
//开始学习点击效果
Route::post('bl',"HelloController@Golist");
//判断登录session弹出登陆框
Route::get('oo',"HelloController@Beg");
//判断用户观看视频登录
Route::post('pl',"HelloController@Log");
//用户观看视频评论
Route::get('co',"HelloController@Com");
//用户头像
Route::get('poh',"HelloController@pohion");
//登陆
Route::get('denglu',"HelloController@denglu");
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
