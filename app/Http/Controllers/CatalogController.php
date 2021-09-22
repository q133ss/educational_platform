<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use App\Models\Theme;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($class,$theme_id){

        $class_id = Group::where('number', $class)->first();
        $videos = Post::where('theme_id' , $theme_id)->where('class_id',$class_id->id)->orderBy('created_at', 'ASC')->get(); //Video from our theme

        $theme = Theme::where('id', $theme_id)->first();
        $all_videos = Post::where('class_id',$class_id->id)->where('cat_id', $theme['cat_id'])->get();

        //for header
        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        //page title
        $page_title = Category::where('id', $theme['cat_id'])->first();

        return view('catalog',[
            'page_title' => $page_title,
            'categories' => $cat,
            'groups' => $group,
            'videos' => $videos,
            'class' => $class,
            'theme' => $theme,
            'all_videos' => $all_videos
        ]);
    }

    public function theme_video($class,$theme_title, $video_id)
    {
        $video = Post::find($video_id);

        $theme_id = Theme::where('title', $theme_title)->first();

        $theme = Theme::where('id', $theme_id['id'])->first();
        $page_title = Category::where('id', $theme['cat_id'])->first();

        $class_id = Group::where('number', $class)->first();

        $videos = Post::where('theme_id' , $theme_id['id'])->where('class_id',$class_id['id'])->orderBy('created_at', 'ASC')->get();

        $all_videos = Post::where('class_id',$class_id['id'])->where('cat_id', $theme_id['cat_id'])->get();

        //for header
        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        return view('video',[
            'video' => $video,
            'theme' => $theme,
            'categories' => $cat,
            'groups' => $group,
            'page_title' => $page_title,
            'class' => $class,
            'videos' => $videos,
            'all_videos' => $all_videos
        ]);
    }
}
