<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($sub , $id){
        $cat_id = Category::where('title', $sub)->first();
        $video = Post::where('cat_id', $cat_id->id)->first();
        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();
        $class_num = Group::where('id', $video->class_id)->first();
        return view('post',[
            'video' => $video,
            'categories' => $cat,
            'groups' => $group,
            'class_num' => $class_num
        ]);
    }
}
