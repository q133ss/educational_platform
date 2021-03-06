<?php

namespace App\Http\Controllers;

use App\filters\VideoFilter;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Theme;

use Illuminate\Support\Facades\App;


class IndexController extends Controller
{
    /*
     * Main controller
     */

    public function index(){
        $video = Post::orderBy('created_at', 'DESC')->get();
        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        return view('index',[
            'video' => $video,
            'categories' => $cat,
            'groups' => $group
        ]);
    }

    public function search(VideoFilter $filter, Request $req){

        $videos = Post::filter($filter)->paginate(10);

        $themes = Theme::get();

        $class_num = Group::where('id', $req->class_id)->first();
        $cat_title = Category::where('id', $req->category_id)->first();

        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        return view('search',[
            'posts' => $videos,
            'filter' => $filter,
            'categories' => $cat,
            'groups' => $group,
            'req' => $req,
            'class_num' => $class_num,
            'cat_title' => $cat_title,
            'themes' => $themes
        ]);
    }

    public function changeLocale($lang){
        session(['locale' => $lang]);
        App::setLocale($lang);
        if($lang == 'ru'){
            session(['lang_code' => 'Рус']);
        }elseif($lang == 'kz'){
            session(['lang_code' => 'Kaz']);
        }elseif($lang == 'en'){
            session(['lang_code' => 'Eng']);
        }
        return redirect()->back();
    }
}
