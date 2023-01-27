routebck<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('aamsnm.home');
Route::get('/home', 'HomeController@index')->name('aamsnm.home');

Route::get('/calendar/events', 'EventController@index')->name('aamsnm.events');
Route::get('/calendar/events/{id}', 'EventController@show')->name('aamsnm.events.show');

Route::get('/contact-us', 'Contact\ContactController@index')->name('aamsnm.contact');
Route::post('/contact-us', 'Contact\ContactController@send');
Route::get('/contact-us/markdown', 'Contact\ContactController@markdown');

Route::get('/latest-news', 'News\NewsController@index')->name('aamsnm.latest.news');
Route::get('/latest-news/{post_key}', 'News\NewsController@show')->name('aamsnm.latest.news.show');

Route::get('/team', 'Team\TeamController@index')->name('aamsnm.team');


Route::get('/{page_key}', 'PageController@index')->name('aamsnm.page');


Route::prefix(config('delgont.route_prefix', 'dashboard'))->group(function(){
    Route::group(['middleware' => ['auth']], function(){
        Route::get('/events', 'Dashboard\Event\EventController@index')->name('aamsnm.dashboard.events');
        Route::get('/events/create', 'Dashboard\Event\EventController@create')->name('aamsnm.dashboard.events.create');
        Route::post('/events/create', 'Dashboard\Event\EventController@store')->name('aamsnm.dashboard.events.store');
        Route::get('/events/destroy/{id}', 'Dashboard\Event\EventController@destroy')->name('aamsnm.dashboard.events.destroy');

        Route::get('/web/settings', 'Dashboard\SettingController@index')->name('aamsnm.dashboard.settings');
        Route::post('/web/settings', 'Dashboard\SettingController@store');
        Route::get('/web/settings/contactinfo', 'Dashboard\ContactInfoController@index')->name('aamsnm.dashboard.settings.contactinfo');
        Route::post('/web/settings/contactinfo', 'Dashboard\ContactInfoController@store');

    });
});

