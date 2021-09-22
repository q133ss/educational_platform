<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Theme;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts_count = Post::all()->count();
        $category_count = Category::all()->count();
        $theme_count = Theme::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count,
            'category_count' => $category_count,
            'theme_count' => $theme_count
        ]);
    }
}
