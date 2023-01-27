<?php
namespace App\Http\Composers\Page;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class CoursesComposer
{
    protected $programs;
    public function __construct()
    {
        $this->programs = Post::where('post_type', 'course')->paginate(8);
    }
    public function compose(View $view)
    {
        $view->with('programs', $this->programs);
    }
}