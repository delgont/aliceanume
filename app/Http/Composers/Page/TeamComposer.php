<?php
namespace App\Http\Composers\Page;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class TeamComposer
{
    protected $team;
    public function __construct()
    {
        $this->team = Post::where('post_type', 'team')->paginate(8);
    }
    public function compose(View $view)
    {
        $view->with('team', $this->team);
    }
}