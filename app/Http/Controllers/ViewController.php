<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request): View
    {
        $posts = Post::latest()->paginate(9);

        return view('users.index', compact('posts'));
    }

    public function laravel(Request $request): View
    {
        $posts = Post::Where('category', 'like', 'Laravel')->latest()->paginate(9);

        return view('users.laravelPage', compact('posts'));
    }

    public function flutter(Request $request): View
    {
        $posts = Post::Where('category', 'like', 'Flutter')->latest()->paginate(9);

        return view('users.flutterPage', compact('posts'));
    }

    public function bootstrap(Request $request): View
    {
        $posts = Post::Where('category', 'like', 'Bootstrap')->latest()->paginate(9);

        return view('users.bootstrapPage', compact('posts'));
    }

    public function react(Request $request): View
    {
        $posts = Post::Where('category', 'like', 'React')->latest()->paginate(9);

        return view('users.reactPage', compact('posts'));
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('users.show', compact('post'));
    }
}
