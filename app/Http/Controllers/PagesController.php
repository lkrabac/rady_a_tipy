<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\User;

class PagesController extends Controller
{
    public function home()
    {

        return view('posts.index', [
            'title' => 'Rady do Záhrady',
            'posts' => Post::latest()->limit(7)->get(),
            'postsmain' => Post::inRandomOrder()->limit(4)->get(),
            'postsaddon' => Post::inRandomOrder()->limit(3)->get(),
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
