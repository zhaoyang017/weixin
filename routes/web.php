<?php

use App\Models\Vend_user;

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
Route::get('/test/{quantity}', function ($quantity) {
    return view('hs.result',compact('quantity'));
});

/**
 * vip提供vip用户注册页面(徐芳)
 */
Route::get('/vip','Vip\\VipController@index');
Route::post('/vip/create','Vip\\VipController@create');
Route::get('/vip/mobile', function (){
//    return view('mobile');
    return '很遗憾！报名时间已截止';
});
Route::post('/vip/mobile/create', 'Vip\\VipController@mobile');

/**
 * 惠氏答题活动
 */
Route::group(['middleware' => 'wechat.oauth', 'prefix' => 'hs'], function () {
    Route::get('/welcome','Hs\\QuestionController@index');
    Route::get('/result/{quantity}', 'Hs\\QuestionController@result');
    Route::get('/statistics','Hs\\QuestionController@statistics');
    Route::get('/draw','Hs\\QuestionController@draw');
    Route::get('/user', function () {
        $user = session('wechat.oauth_user');
        dd($user);
    });
});



Route::group(['namespace' => 'Vend'], function () {
    //自动贩卖机项目
    //入口
//    Route::any('/wechat', 'WechatController@serve');
    //上传二维码图片
//    Route::get('/wechat/image', 'MaterialController@image');
    //自定义菜单
//    Route::get('/wechat/menu', 'MenuController@menu');
});

Route::get('/', function (){
    return 'coming soon';
});