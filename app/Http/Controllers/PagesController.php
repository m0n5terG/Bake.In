<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->first();
        return view('pages.index')
            ->with('posts', $posts);
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
