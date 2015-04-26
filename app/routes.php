<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/ajax/post/data/',['as' => 'ajaxpost', 'uses' => 'AjaxController@postData']);

Route::get('/ajax/get/data/',['as' => 'ajaxget', 'uses' => 'AjaxController@getData']);

Route::get('/ajax/delete/data/',['as' => 'ajaxdelete', 'uses' => 'AjaxController@deleteData']);

Route::get('/ajax/delete/task/',['as' => 'ajaxdelete', 'uses' => 'AjaxController@deleteTask']);

Route::get('/ajax/delete/group/',['as' => 'ajaxdeletegroup', 'uses' => 'AjaxController@deleteTaskGroup']);




Route::get('/test', function (){

    $tasks = ["1", "2", "3"];
    var_dump($tasks);
});
