<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class TestimonialsComposer
{
    public function compose(View $view)
    {
        $view->with('testimonials', Post::where('post_type', 'testimonial')->get());
    }
}