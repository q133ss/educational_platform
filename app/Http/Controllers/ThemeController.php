<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    public function index($sub, $class){
        $cat_id = Category::where('title', $sub)->first();
        $video = Post::where('cat_id', $cat_id['id'])->get();
        $themes = Theme::get();

        //class finder
        $class_number = Group::where('number', $class)->first();

      //  dd($class_number);

        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        return view('themes',[
            'sub' => $sub,
            'class' => $class,
            'cat_id' => $cat_id,
            'video' => $video,
            'categories' => $cat,
            'groups' => $group,
            'themes' => $themes,
            'class_num' => $class_number
        ]);
    }
}
