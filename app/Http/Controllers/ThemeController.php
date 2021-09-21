<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use App\Models\Theme;

class ThemeController extends Controller
{
    public function index($sub, $class){

        $cat = Category::where('title', $sub)->first();
        $class_id = Group::where('number', $class)->first();

        $themes = Theme::where('cat_id', $cat->id)->where('class_id', $class_id->id)->paginate(10);
        $video = Post::where('cat_id', $cat->id)->inRandomOrder()->first(); //Random video

        //For header
        $categories = Category::get();
        $groups = Group::get();

        return view('themes',[
            'sub' => $sub,
            'class' => $class,
            'categories' => $categories,
            'groups' => $groups,
            'themes' => $themes,
            'video' => $video
        ]);
    }
}
