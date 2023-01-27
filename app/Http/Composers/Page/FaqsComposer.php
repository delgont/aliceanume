<?php
namespace App\Http\Composers\Page;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class FaqsComposer
{
    public function compose(View $view)
    {
        $view->with('faqs', Post::where('post_type', 'faq')->limit(4)->get());
    }
}