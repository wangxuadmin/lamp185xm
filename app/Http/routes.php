<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/**
 * 后台路由组
 */
Route::group(['prefix'=>'admin','namespace'=>'Admins'], function(){
    //后台首页路由
    Route::get('index', 'IndexController@index');
//    //退出登录
//    Route::get('quit', 'IndexController@quit');
//    //修改密码
//    Route::get('pass', 'IndexController@pass');
//    //修改密码业务逻辑
//    Route::post('pass', 'IndexController@dopass');
//
//    //用户模块
//    Route::resource('user', 'UserController');
//
//    //分类模块
//    Route::resource('cate', 'CateController');
//    Route::post('cate/changeorder','CateController@changeOrder');//排序路由
//
//    //商品模块
//    Route::resource('goods', 'GoodsController');
//
//    //商品分类模块
//    Route::resource('goodscategory', 'GoodsCategoryController');

});


