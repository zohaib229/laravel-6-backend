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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//For user Management System  

Route::get('users/index','UserController@index')->name('user_management');
Route::get('/users/load_data', 'UserController@data');
Route::get('/user/edit/{id}','UserController@edit')->name('user_edit');
Route::delete('/user/delete/{id}','UserController@delete')->name('user_delete');
Route::patch('/user/update/{id?}',['as'=>'users.update','uses'=>'UserController@update']);


// For content management system 

 Route::get('/cms/index','CmsController@index')->name('cms');
 Route::get('/cms/edit/{id}','CmsController@edit')->name('cms_edit');
 Route::patch('/cms/update/{id?}',['as'=>'cms.update','uses'=>'CmsController@update']);
 Route::delete('/cms/delete/{id}','CmsController@delete')->name('cms_delete');
 Route::get('/cms/load_data','CmsController@data');
 
//for Menu Management System

Route::get('/menu/index','CmsController@menu')->name('menu');
Route::get('/menu/edit/{id}','CmsController@menu_edit')->name('menu_edit');
Route::patch('/menu/update/{id?}',['as'=>'menu.update' ,'uses'=>'CmsController@menu_update']);
Route::delete('/menu/delete/{id}','CmsController@menu_delete')->name('menu_delete');
Route::get('/menu/load_data','CmsController@menu_data');




// For Slider Management  System
Route::get('/sliders/index','CmsController@slider')->name('sliders');
Route::get('/sliders/edit/{id}','CmsController@slider_edit')->name('slider_edit');
Route::patch('/sliders/update/{id?}',['as'=>'slider.update' ,'uses'=>'CmsController@slider_update']);
Route::delete('/sliders/delete/{id}','CmsController@slider_delete')->name('slider_delete');
Route::get('/sliders/load_data','CmsController@slider_data');

// For Gallery Management System
Route::get('/gallery/index','CmsController@gallery')->name('Gallery');
Route::get('/gallery/edit/{id}','CmsController@gallery_edit')->name('gallery_edit');
Route::patch('/gallery/update/{id?}',['as'=>'gallery.update' ,'uses'=>'CmsController@gallery_update']);
Route::delete('/gallery/delete/{id}','CmsController@gallery_delete')->name('gallery_delete');
Route::get('/gallery/load_data','CmsController@gallery_data');

//Social Media

Route::get('/socialmedia/index','CmsController@social_media')->name('social_media');
Route::get('/socialmedia/edit/{id}','CmsController@Social_edit')->name('social_edit');
Route::patch('/socialmedia/update/{id?}',['as'=>'social.update' ,'uses'=>'CmsController@social_update']);
Route::delete('/socialmedia/delete/{id}','CmsController@social_delete')->name('social_delete');
Route::get('/socialmedia/load_data','CmsController@social_data');

// For Configuration

Route::get('/configuration/index','CmsController@configuration')->name('configuration');
Route::get('/configuration/edit/{id}','CmsController@configuration_edit')->name('configuration_edit');
Route::patch('/configuration/update/{id?}',['as'=>'configuration.update' ,'uses'=>'CmsController@configuration_update']);
Route::delete('/configuration/delete/{id}','CmsController@configuration_delete')->name('configuration_delete');
Route::get('/configuration/load_data','CmsController@configuration_data');
