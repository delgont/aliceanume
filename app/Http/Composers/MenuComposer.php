<?php
namespace App\Http\Composers;

use Illuminate\View\View;

use Web\Services\MenuService;

class MenuComposer
{
    public function compose(View $view)
    {
        $view->with([
            'navBarMenuItems' => app(MenuService::class)->get('main_menu', 1),
            'topBarMenuItems' => app(MenuService::class)->get('top_bar_menu', 1),
            'footerMenuItems' => app(MenuService::class)->get('footer_menu', 1)
        ]);
    }
}