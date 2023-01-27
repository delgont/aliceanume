<?php

namespace Web\Aamsnm\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AliceAnumeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'web.includes.topbar'
        ], 'App\Http\Composers\MenuComposer');

        View::composer('includes.sections.testimonials', 'Web\Aamsnm\Http\Composers\TestimonialsComposer');
        View::composer('includes.sections.team', 'Web\Aamsnm\Http\Composers\TeamComposer');

        View::composer('includes.sections.newsevents', 'Web\Aamsnm\Http\Composers\LatestNewsComposer');
        View::composer('pages.news.index', 'Web\Aamsnm\Http\Composers\Page\NewsComposer');

        View::composer('pages.team.index', 'Web\Aamsnm\Http\Composers\Page\TeamComposer');
        View::composer('pages.facilities.index', 'Web\Aamsnm\Http\Composers\Page\FacilitiesComposer');
        View::composer('pages.programs.index', 'Web\Aamsnm\Http\Composers\Page\CoursesComposer');
        View::composer('pages.faqs.index', 'Web\Aamsnm\Http\Composers\Page\FaqsComposer');

        View::composer('includes.columns.courses', 'Web\Aamsnm\Http\Composers\CoursesComposer');
        View::composer('includes.columns.gallery', 'App\Http\Composers\GalleryComposer');

    }
}
