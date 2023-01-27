<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => config('delgont.route_prefix', 'dashboard'), 'middleware' => 'web'], function(){
   

    

});

Route::get('/', 'HomeController@index')->name('web.home');

Route::get('{slug}', 'WebController@view')->where('slug', '([A-Za-z0-9\-\/]+)')->name('web.page');