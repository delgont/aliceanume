<?php
namespace App\Http\Composers\Page;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class FacilitiesComposer
{
    protected $facilities;
    
    public function __construct()
    {
        $this->facilities = Post::where('post_type', 'facility')->paginate(4);
    }

    public function compose(View $view)
    {
        $view->with('facilities', $this->facilities);
    }
}