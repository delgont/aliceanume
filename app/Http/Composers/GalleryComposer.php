<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Delgont\Cms\Models\Post\Post;

class GalleryComposer
{
    public function compose(View $view)
    {
        $post = Post::where('post_key', 'gallery')->first();
        //$gallery = ($post) ? $post->media : [];
        $gallery = [];
        $view->with('gallery',$gallery);
    }
}