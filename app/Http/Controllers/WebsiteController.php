<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;

class WebsiteController extends Controller
{
    public function home(){
        $latestPosts = Posts::where('is_publish', Posts::Published)->orderBy('id', 'desc')->take(5)->get();
$categories = Category::all();
        $posts = Posts::where('is_publish', Posts::Published)-> simplePaginate(1);
        return view('website.blog.index', ['posts' => $posts, 'latestPosts' => $latestPosts,
    'categories' => $categories]);
    }

    public function show(Posts $post){

        return view('website.blog.single', ['post' => $post]);
    }


}
