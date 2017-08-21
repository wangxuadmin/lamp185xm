<?php


/**
 *      前台路由组
 */

Route::group(['namespace'=>'Homes'],function(){
    //首页路由
    Route::get('/','IndexController@index');
    //列表页路由
    Route::get('/cate/{id}','IndexController@cate');
    //详情页路由
    Route::get('/a/{id}','IndexController@article');
});

//注册
//手机号的
//Route::get('register','RegisterController@mobileRegister');
//Route::post('sendcode','RegisterController@sendCode');
//Route::post('register','RegisterController@doRegister');

//邮箱的
//Route::get('emailreg','RegisterController@emailRegister');
//Route::post('emailreg','RegisterController@doemailRegister');

//邮箱激活
//Route::get('active','RegisterController@active');

//忘记密码
//Route::get('forget','RegisterController@forget');
//Route::post('forget','RegisterController@doforget');

//找回密码（重置密码）
//Route::get('reset','RegisterController@reset');
//Route::post('reset','RegisterController@doreset');

//Route::get('test','Admin\LoginController@test');
//后台的登录页面路由
//Route::get('admin/login','Admin\LoginController@login');
//验证码
//Route::get('admin/yzm','Admin\LoginController@yzm');
//组件验证码路由
//Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');

//后台用户登录的业务逻辑路由
//Route::post('admin/login','Admin\LoginController@dologin');

//加密
//Route::get('admin/crypt','Admin\LoginController@crypt');



/**
 * 后台路由组
 */

//Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'hasrole'],function(){
Route::group(['prefix'=>'admin','namespace'=>'Admins'],function(){
    //后台首页路由
    Route::get('index','IndexController@index');
//    Route::get('info','IndexController@info');

//    //退出登录
//    Route::get('quit','IndexController@quit');
//    //修改密码
//    Route::get('pass','IndexController@pass');
//    //修改密码业务逻辑
//    Route::post('pass','IndexController@dopass');
//
//
////    用户模块
//    Route::resource('user','UserController');
//    //    给相应的用户赋予角色
//    Route::get('user/auth/{id}','UserController@auth');
////    保存给角色添加权限的路由
//    Route::post('user/doauth/','UserController@doauth');
//
//    分类模块
    Route::resource('cate','CateController');
    Route::post('cate/changeorder','CateController@changeOrder');//分类排序
    Route::post('cate/showart','CateController@showArt');//显示当前分类下文章


//   文章模块
    Route::resource('article','ArticleController');
//    Route::post('upload','ArticleController@fileUpload');
//
//    友情链接
    Route::resource('links','LinksController');
//
//   网站配置
    Route::resource('config','ConfigController');
    // Route::post('config/changecontent','ConfigController@changeContent');
//
   // Route::get('putfile','ConfigController@putFile');
//
//
//    角色管理
//    Route::resource('role','RoleController');
//    给相应的角色赋予权限
//    Route::get('role/auth/{id}','RoleController@auth');
//    保存给角色添加权限的路由
//    Route::post('role/doauth/','RoleController@doauth');
//    权限管理
//
//    Route::resource('permission','PermissionController');

 });




