<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'Home\MasterController@index')->name('aamsnm.home');


    //About AAMSNM
    Route::get('/about', 'About\AboutController@index')->name('aamsnm.about');
    Route::view('/about/mission-vision-values', 'aamsnm::pages.about.mvv')->name('aamsnm.mvv');

    Route::get('/about/news', 'News\NewsController@index')->name('aamsnm.about.news');
    Route::get('/about/news/{post_key}', 'News\NewsController@show')->name('aamsnm.about.news.show');

    Route::get('/about/academic-programs', 'Course\CourseController@index')->name('aamsnm.about.programs');
    Route::get('/about/academic-programs/{program}', 'Course\CourseController@show')->name('aamsnm.about.programs.program');

    Route::get('/about/calendar/events',  'EventsController@index')->name('aamsnm.about.calendar.events');

    Route::get('/about/facilities', 'Facility\FacilityController@index')->name('aamsnm.about.facilities');
    Route::get('/about/facility/{facility_key}', 'Facility\FacilityController@show')->name('aamsnm.about.facilities.show');

    Route::get('/about/team', 'Team\TeamController@index')->name('aamsnm.about.team');
    Route::view('/about/team/{name}', 'pages.about.team.show')->name('aamsnm.about.team.show');

    //Admissions Routes
    Route::get('/admissions', 'Admission\AdmissionController@index')->name('aamsnm.admissions');
    Route::get('/admissions/why-aamsnm', 'Admission\WhyController@index')->name('aamsnm.admissions.whyaamsnm');
    Route::get('/admissions/requestinfo', 'RequestInfoController@index')->name('aamsnm.admissions.requestinfo');
    Route::post('/admissions/requestinfo', 'RequestInfoController@send')->name('aamsnm.admissions.requestinfo.send');
    Route::get('/admissions/requestinfo/view', 'RequestInfoController@view')->name('aamsnm.admissions.requestinfo.view');
    
    Route::view('/admissions/application-procedure', 'pages.admissions.procedure')->name('aamsnm.admissions.application.procedure');
    Route::view('/admissions/courses', 'pages.admissions.programs')->name('aamsnm.admissions.programs');

    Route::get('admissions/faqs', 'Faq\FaqController@index')->name('aamsnm.admissions.faqs');

    Route::get('/contact-us', 'Contact\ContactController@index')->name('aamsnm.contact');
    Route::post('/contact-us', 'Contact\ContactController@send');
    Route::get('/contact-us/markdown', 'Contact\ContactController@markdown');
    Route::get('/test', 'TestController@index');

    Route::get('/privacy-poliicy', 'Privacy\PrivacyPolicyController@index')->name('aamsnm.privacy.policy');

    Route::get('/compus-life/testimonials', 'Testimonial\TestimonialController@index')->name('aamsnm.testimonials');

    Route::get('/gallery', 'Gallery\GalleryController@index')->name('aamsnm.gallery');

    //The template dashboard
    Route::prefix(config('pagman.route_prefix'))->group(function(){
        Route::post('/customize/header', 'CustomizeController::class@header')->name('aamsnm.dashboard.customize.header');
        Route::post('/customize/contact', 'ustomizeController::class@contact')->name('aamsnm.dashboard.customize.contact');
        Route::post('/banner/create', 'BannerController::class@store')->name('aamsnm.dashboard.banner.create');
    });

    //Template unique functionality 
    Route::prefix(config('delgont.route_prefix', 'test'))->group(function(){
        Route::get('/events', 'Dashboard\Event\EventController@index')->name('aamsnm.dashboard.events');
        Route::get('/events/create', 'Dashboard\Event\EventController@create')->name('aamsnm.dashboard.events.create');
    });



    /**
     * Page URL Levels
     */
     Route::get('/{page_key}', 'Page\PageController@index')->name('aamsnm.page.lv1');
     Route::get('/{page_key}/{page_key1}', 'Page\PageController@index')->name('aamsnm.page.lv2');
     Route::get('/{page_key}/{page_key1}/{page_key2}', 'Page\PageController@index')->name('aamsnm.page.lv3');
     Route::get('/{page_key}/{page_key1}/{page_key2}/{page_key3}', 'Page\PageController@index')->name('aamsnm.page.lv4');