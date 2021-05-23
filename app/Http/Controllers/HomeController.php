<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }


    public function index() {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function search() {

        $username = request()->input('username');
        $user = User::where('username', $username)->get();
        if (count($user) == 1){
            return redirect("/profile/{$user[0]->id}");
        }
        else
            return redirect("/");
    }
}
