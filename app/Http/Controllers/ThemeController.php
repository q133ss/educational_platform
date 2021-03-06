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

        $cat_lang = Category::where('title', $sub)->first();

        //For header
        $categories = Category::get();
        $groups = Group::get();

        return view('themes',[
            'sub' => $sub,
            'class' => $class,
            'categories' => $categories,
            'groups' => $groups,
            'themes' => $themes,
            'video' => $video,
            'cat_lang' => $cat_lang
        ]);
    }

    public function category($sub){
        $groups = Group::orderBy('number')->paginate(10);

        $cat = Category::where('title', $sub)->first();
        $video = Post::where('cat_id', $cat['id'])->inRandomOrder()->first();

        $cat_lang = Category::where('title', $sub)->first();

        $themes = Theme::get();

        $categories = Category::get();
        return view('category',[
            'categories' => $categories,
            'sub' => $sub,
            'groups' => $groups,
            'video' => $video,
            'themes' => $themes,
            'cat_lang' => $cat_lang
        ]);
    }
}
