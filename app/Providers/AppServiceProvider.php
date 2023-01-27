<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('core.includes.footer.footer', 'App\Http\Composers\FooterComposer');
        View::composer('includes.sections.testimonials', 'App\Http\Composers\TestimonialsComposer');
        View::composer('includes.sections.team', 'App\Http\Composers\TeamComposer');
        View::composer('includes.sections.newsevents', 'App\Http\Composers\LatestNewsComposer');
        View::composer('pages.team.index', 'App\Http\Composers\Page\TeamComposer');

        View::composer(['includes.sections.news','pages.news.index'], 'App\Http\Composers\Page\NewsComposer');

        View::composer('pages.programs.index', 'App\Http\Composers\Page\CoursesComposer');
        View::composer('pages.faqs.index', 'App\Http\Composers\Page\FaqsComposer');

        View::composer('pages.facilities.index', 'App\Http\Composers\Page\FacilitiesComposer');
        View::composer('core.includes.sections.facilities', 'App\Http\Composers\FacilitiesComposer');


        View::composer('includes.columns.courses', 'App\Http\Composers\CoursesComposer');
        View::composer('includes.columns.gallery', 'App\Http\Composers\GalleryComposer');

        View::composer('includes.sections.slider', 'App\Http\Composers\SliderComposer');

    }
}
