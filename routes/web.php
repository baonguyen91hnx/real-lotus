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
Route::get('/index/location/{param}',['as' => 'index.location', 'uses' =>'IndexController@location']);
Route::get('/',['as' => 'index.home','uses' => 'IndexController@index']);
Route::get('/login',['as' => 'verify.login','uses' => 'VerifyController@login']);
Route::group(['middleware' => 'auth'], function(){

    // Route::get('/user/index',['as' => 'user.index','uses' => 'UserController@index']);
    // Route::get('/user/logout',['as' => 'user.logout','uses' => 'UserController@logout']);
    // Route::get('/user/add',['as' => 'user.getAdd','uses' => 'UserController@getAdd']);
    // Route::post('/user/add',['as' => 'user.postAdd','uses' => 'UserController@postAdd']);
    // Route::get('/user/edit/{id}',['as' => 'user.getEdit','uses' => 'UserController@getEdit']);
    // Route::post('/user/edit/{id}',['as' => 'user.postEdit' ,'uses' => 'UserController@postEdit']);
    // Route::get('/user/view/{id}',['as' => 'user.view' ,'uses' =>'UserController@view']);
    // Route::get('/user/delete/{id}',['as' => 'user.delete','uses'=>'UserController@delete']);
    // Route::get('/user/search/',['as'=>'user.getSearch','uses' =>'UserController@getSearch']);
    // Route::post('/user/search/',['as'=>'user.postSearch','uses' =>'UserController@postSearch']);
    // Route::get('/user/setting/{id}',['as' => 'user.getSetting','uses' =>'UserController@getSetting']);
    // Route::post('/user/setting/{id}',['as' => 'user.postSetting','uses' =>'UserController@postSetting']);
    // Route::get('/place/index',['as' =>'place.index' ,'uses'=>'PlaceController@index']);
    // Route::get('/place/add',['as' => 'place.getAdd','uses' =>'PlaceController@getAdd']);
    // Route::post('/place/add',['as' => 'place.postAdd','uses' =>'PlaceController@postAdd']);
    // Route::get('/place/edit/{id}',['as' =>'place.getEdit','uses'=>'PlaceController@getEdit']);
    // Route::post('/place/edit/{id}',['as' =>'place.postEdit','uses'=>'PlaceController@postEdit']);
    // Route::get('/place/delete/{id}',['as' =>'place.delete','uses' =>'PlaceController@delete']);
    // Route::get('/place/view/{id}',['as' =>'place.view','uses' => 'PlaceController@view']);
    // Route::get('/place/search/',['as' =>'place.getSearch','uses' =>'PlaceController@getSearch']);
    // Route::post('/place/search/',['as' =>'place.postSearch','uses'=>'PlaceController@postSearch']);
    // Route::get('/role/index',['as' =>'role.index','uses'=>'RoleController@index']);
    // Route::get('/role/add',['as'=>'role.getAdd','uses'=> 'RoleController@getAdd']);
    // Route::post('/role/add',['as'=>'role.postAdd','uses'=>'RoleController@postAdd']);
    // Route::get('/role/assign',['as' =>'role.assign','uses'=>'RoleController@assign']);
    // Route::get('/role/AddAssign',['as'=>'role.getAddAssign','uses'=> 'RoleController@getAddAssign']);
    // Route::post('/role/AddAssign',['as'=>'role.postAddAssign','uses'=>'RoleController@postAddAssign']);
    // Route::get('/role/edit/{id}',['as' => 'role.getEdit' ,'uses' => 'RoleController@getEdit']);
    // Route::post('/role/edit/{id}',['as' => 'role.postEdit','uses' => 'RoleController@postEdit']);
    // Route::get('/role/delete/{id}',['as'=> 'role.delete','uses' => 'RoleController@delete']);
    // Route::get('/role/editAssign/{id}',['as' => 'role.getEditAssign' ,'uses' => 'RoleController@getEditAssign']);
    // Route::post('/role/editAssign/{id}',['as' => 'role.postEditAssign','uses' => 'RoleController@postEditAssign']);
    // Route::get('/role/deleteAssign/{id}',['as'=> 'role.deleteAssign','uses' => 'RoleController@deleteAssign']);
    // Route::get('/role/view/{id}',['as'=>'role.getView','uses'=>'RoleController@view']);
    // Route::get('/role/search/',['as'=>'role.getSearch','uses' =>'UserController@getSearch']);
    // Route::post('/role/search/',['as'=>'role.postSearch','uses' =>'UserController@postSearch']);
    // Route::get('/order/index',['as'=>'order.index','uses'=>'OrderController@index']);
    // Route::get('/order/log',['as'=>'order.getLog','uses'=>'OrderController@getLog']);
    // Route::post('/order/log',['as'=>'order.postLog','uses'=>'OrderController@postLog']);
    // Route::get('/order/add',['as'=>'order.getAdd','uses'=>'OrderController@getAdd']);
    // Route::post('/order/add',['as'=>'order.postAdd','uses'=>'OrderController@postAdd']);
    // Route::get('/order/edit/{id}',['as'=>'order.getEdit','uses'=>'OrderController@getEdit']);
    // Route::post('/order/edit/{id}',['as'=>'order.postEdit','uses'=>'OrderController@postEdit']);
    // Route::get('/order/view/{id}',['as'=>'order.view','uses'=>'OrderController@view']);
    // Route::get('/order/delete/{id}',['as'=>'order.delete','uses'=>'OrderController@delete']);
    // Route::get('/order/export/{id}',['as'=>'order.exportExcel','uses' => 'OrderController@exportExcel']);
    // Route::get('/order/search',['as'=>'order.getSearch','uses'=>'OrderController@getSearch']);
    // Route::post('/order/search',['as'=>'order.postSearch','uses'=>'OrderController@postSearch']);
    // Route::get('/order/confirm/{id}',['as'=>'order.confirm','uses'=>'OrderController@confirm']);
    // Route::post('/order/find',['as'=>'order.postFind','uses'=>'OrderController@postFind']);
    // Route::get('/map/index',['as'=>'map.index','uses'=>'MapController@index']);
});
