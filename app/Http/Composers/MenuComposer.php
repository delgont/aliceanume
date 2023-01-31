<?php
namespace App\Http\Composers;

use Illuminate\View\View;

use Web\Services\MenuService;
use Delgont\Cms\Repository\Menu\MenuRepository;

class MenuComposer
{
    public function compose(View $view)
    {
        $view->with([
            'navBarMenuItems' => app( MenuRepository::class )->fromCache()->menuItems('main_menu', 2),
            'topBarMenuItems' => app( MenuRepository::class )->fromCache()->menuItems('top_bar_menu'),
            'footerMenuItems' => app( MenuRepository::class )->fromCache()->menuItems('footer_menu')
        ]);
    }
}