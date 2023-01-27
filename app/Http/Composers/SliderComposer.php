<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Delgont\Cms\Models\Category\Category;

class SliderComposer
{
    public function compose(View $view)
    {
        $view->with('slider', Category::with(['posts'])->where('name', 'slider')->first());
    }
}