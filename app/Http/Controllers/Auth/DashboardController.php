<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $postsCount = Posts::count();
        $categoryCount = Category::count();
        $usersCount = User::count();
        return view('auth.dashboard', compact('postsCount', 'categoryCount', 'usersCount'));
    }

}
