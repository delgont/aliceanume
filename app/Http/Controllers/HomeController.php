<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Delgont\Cms\Repository\Post\PostRepository;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    protected $repository = null;

    public function __construct()
    {
        $this->repository = app(PostRepository::class)->setKey('slug');
    }
    public function index()
    {
        $post = $this->repository->fromCache()->find('home');
        return view('web.index', compact(['post']));
    }

}