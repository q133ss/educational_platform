<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show( $sub, $class)
    {
        $cat_id = Category::where('title', $sub)->first();
        $video = Post::where('cat_id', $cat_id->id)->where('class_id', $class)->get();

        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        return view('themes',[
            'sub' => $sub,
            'class' => $class,
            'video' => $video,
            'categories' => $cat,
            'groups' => $group
        ]);
    }
}
