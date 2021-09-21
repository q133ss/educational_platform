<?php

namespace App\Http\Controllers;

use App\Filters\VideoFilter;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

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

        $cat = Category::orderBy('created_at', 'DESC')->get();
        $group = Group::orderBy('number', 'ASC')->get();

        return view('search',[
            'posts' => $videos,
            'filter' => $filter,
            'categories' => $cat,
            'groups' => $group,
            'req' => $req
        ]);
    }
}
