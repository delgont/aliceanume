<?php
namespace App\Http\Composers\Page;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class NewsComposer
{
    protected $news;
    public function __construct()
    {
        $this->news = Post::with(['categories'])->where('post_type', 'news')->paginate(4);
    }

    public function compose(View $view)
    {
        $view->with('news', $this->news);
    }
}