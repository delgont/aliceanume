<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Stephendevs\Pagman\Models\Post\Post;

class FacilitiesComposer
{
    protected $facilities;
    
    public function __construct()
    {
        $this->facilities = Post::with(['icon'])->where('post_type', 'facility')->paginate(3);
    }

    public function compose(View $view)
    {
        $view->with('facilities', $this->facilities);
    }
}