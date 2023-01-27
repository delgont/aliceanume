<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class TeamComposer
{
    public function compose(View $view)
    {
        $view->with('team', Post::where('post_type', 'team')->limit(6)->get());
    }
}