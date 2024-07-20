<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Posts;

class WebsiteController extends Controller
{
    public function home(){
        $posts = Posts::where('is_publish', Posts::Published)-> get();
        return view('website.blog.index', ['posts' => $posts]);
    }

    public function show(Posts $post){

        return view('website.blog.single', ['post' => $post]);
    }
}
