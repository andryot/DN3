<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('posts/create');
    }

    public function post() {
        $data = request()->validate([
           'description' => 'required',
           'img' => 'required|image',
        ]);


        $path = request('img')->store('wwwdata', 'public');

        $image = Image::make(public_path("storage/{$path}"))->fit(1200, 1200);

        $image->save();

        auth()->user()->posts()->create([
            'description' => $data['description'],
            'img' => $path,
        ]);

        return redirect('/profile/' . auth()->user()->id);

    }

    public function show(Post $post) {
        return view('posts/show', compact('post'));
    }
}
