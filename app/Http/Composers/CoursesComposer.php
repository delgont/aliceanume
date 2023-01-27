<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Delgont\Cms\Models\Post\Post;

class CoursesComposer
{
    public function compose(View $view)
    {
        $view->with('courses', Post::where('post_type', 'course')->limit(4)->get());
    }
}