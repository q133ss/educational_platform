<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $video = Post::orderBy('created_at', 'DESC')->get();
        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();
        return view('index',[
            'video' => $video,
            'categories' => $cat,
            'groups' => $group
        ]);
    }
}
